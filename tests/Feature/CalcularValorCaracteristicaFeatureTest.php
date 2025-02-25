<?php

namespace Tests\Featrue;

use Tests\TestCase;
use Mockery;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Dominio\Interfaces\ValorCaracteristica\CalcularValorCaracteristicaInterface;
use App\Dominio\Interfaces\ValorCaracteristica\ValorCaracteristicaRepositoryInterface;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;
use App\Dominio\Interfaces\Caracteristica\CaracteristicaRepositoryInterface;
use App\Dominio\Interfaces\ResultadoMetrica\ResultadoMetricaRepositoryInterface;
use App\Infraestructura\Http\Controllers\ValorCaracteristica\CalcularValorCaracteristicaController;
use App\Dominio\Entidad\Caracteristica\Caracteristica;
use App\Dominio\Entidad\Evaluacion\Evaluacion;
use App\Dominio\Entidad\PlataformaWeb\PlataformaWeb;
use Illuminate\Foundation\Testing\WithFaker;

class CalcularValorCaracteristicaFeatureTest extends TestCase
{

    use RefreshDatabase, WithFaker;

    protected $calcularValorCaracteristica;
    protected $valorCaracteristicaRepository;
    protected $caracteristicaRepository;
    protected $evaluacionRepository;
    protected $resultadoMetricaRepository;
    protected $controladorCalcularValor;

    protected function setUp():void{
        parent::setUp();

        $this->calcularValorCaracteristica = Mockery::mock(CalcularValorCaracteristicaInterface::class);
        $this->valorCaracteristicaRepository = Mockery::mock(ValorCaracteristicaRepositoryInterface::class);
        $this->caracteristicaRepository = Mockery::mock(CaracteristicaRepositoryInterface::class);
        $this->evaluacionRepository = Mockery::mock(EvaluacionRepositoryInterface::class);
        $this->resultadoMetricaRepository = Mockery::mock(ResultadoMetricaRepositoryInterface::class);

        $this->controladorCalcularValor = new CalcularValorCaracteristicaController(
            $this->calcularValorCaracteristica,
            $this->valorCaracteristicaRepository,
            $this->evaluacionRepository,
            $this->caracteristicaRepository,
            $this->resultadoMetricaRepository
        );
    }

    protected function tearDown():void{
        Mockery::close();
        parent::tearDown();
    }

    /**
     * test para calcular valor de una subcaracteristica de forma exitosa
     */
    public function test_calcular_valor_sub_caracteristica_correcto(){
        // Datos de prueba
        $idCaracteristica = 2;
        $token = 'token-valido';
        $tipo = 'subcaracteristica';
        $caracteristica = new Caracteristica(['id' => $idCaracteristica, 'nombre' => 'accesibilidad']);
        PlataformaWeb::factory()->count(1)->create();
        $evaluacion = Evaluacion::factory()->create([
            'id_plataforma' => '1',
            'fecha_evaluacion' => '2025-02-05',
            'resultado_final' => null,
            'token' => 'token-valido',
            'token_expira_en' =>'2025-02-05'
        ]);

        // Simular el comportamiento de los repositorios
        $this->caracteristicaRepository
            ->shouldReceive('find')
            ->once()
            ->with($idCaracteristica)
            ->andReturn($caracteristica);

        $this->evaluacionRepository
            ->shouldReceive('validarToken')
            ->once()
            ->with($token)
            ->andReturn($evaluacion);

        $this->calcularValorCaracteristica
            ->shouldReceive('calcular')
            ->once()
            ->with($caracteristica, $evaluacion, $tipo)
            ->andReturn([
                'valor' => 100,
                'formula' => 'Fórmula de prueba',
                'siguiente_calculo' => null
            ]);

        $this->resultadoMetricaRepository
            ->shouldReceive('obtenerResultadosMetricaPorEvaluacionYCaracteristica')
            ->once()
            ->with($evaluacion->id, $caracteristica->id)
            ->andReturn([]);

        // Crear una solicitud simulada
        $request = Request::create('/calcular', 'POST', [
            'id_caracteristica' => $idCaracteristica,
            'token' => $token,
            'tipo' => $tipo
        ]);

        // Ejecutar el método del controlador
        $response = $this->controladorCalcularValor->calcular($request);

        // Verificar la respuesta
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJson($response->getContent());

        $responseData = json_decode($response->getContent(), true);
        $this->assertEquals('exito', $responseData['estado']);
        $this->assertEquals($idCaracteristica, $responseData['id_caracteristica']);
        $this->assertEquals(100, $responseData['resultado']);
        $this->assertEquals('Fórmula de prueba', $responseData['formula']);
        $this->assertEquals([], $responseData['metricas']);
        $this->assertEquals($tipo, $responseData['tipo']);
        $this->assertNull($responseData['siguiente_calculo']);
        $this->assertEquals($caracteristica->nombre, $responseData['nombre_caracteristica']);
    }
}