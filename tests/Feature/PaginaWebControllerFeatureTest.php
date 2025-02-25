<?php

namespace Test\Unit;

use Tests\TestCase;
use Illuminate\Http\Request;
use Mockery;
use Illuminate\Fundation\Testing\RefreshDatabase;
use App\Infraestructura\Http\Controllers\PaginaWeb\AgregarPaginaWebController;
use App\Infraestructura\Http\Controllers\PaginaWeb\VistaAgregarPaginaWebController;
use App\Dominio\Interfaces\PlataformaWeb\PlataformaWebRepositoryInterface;
use App\Dominio\Interfaces\Caracteristica\CaracteristicaRepositoryInterface;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;

class PaginaWebControllerFeatureTest extends TestCase
{
    //use RefreshDatabase;
    protected $plataformaRepo;
    protected $caracteristicaRepo;
    protected $evaluacionRepo;

    protected $request;

    protected function setUp():void{
        parent::setUp();

        $this->plataformaRepo = Mockery::mock(PlataformaWebRepositoryInterface::class);
        $this->caracteristicaRepo = Mockery::mock(CaracteristicaRepositoryInterface::class);
        $this->evaluacionRepo = Mockery::mock(EvaluacionRepositoryInterface::class);

        $this->request = new Request();
        $this->request->merge([
            'nombre'=>'Facebook',
            'url'=>'https://test.com'
        ]);
    }

    /**
     * Test unitario para vistaAgregarPaginaWebController
     */
    public function test_vista_controller_returns_correct_view(){
        $controller = new VistaAgregarPaginaWebController();

        $result = $controller->index();

        $this->assertEquals('agregarPlataformaWeb', $result->getName());
    }

    /**
     * Test unitario para agregarPaginaWebController
     */
    public function test_agregar_pagina_web(){
        
        $datos = [
            'nombre'=>'Facebook',
            'url'=>'https://test.com'
        ];

        $plataforma = (object) [
            'id'=>1,
            'nombre'=>$datos['nombre'],
            'url'=>$datos['url']
        ];

        $this->plataformaRepo->shouldReceive('obtenerPlataformaPorNombreYUrl')
            ->once()
            ->with('Facebook','https://test.com')
            ->andReturnNull();
        
        $this->plataformaRepo->shouldReceive('create')
            ->once()
            ->with($datos)
            ->andReturn($plataforma);
        
        $this->evaluacionRepo->shouldReceive('create')
            ->once()
            ->andReturn(true);
        
        $controller = new AgregarPaginaWebController(
            $this->plataformaRepo,
            $this->caracteristicaRepo,
            $this->evaluacionRepo
        );

        $response = $controller->agregar($this->request);

        $this->assertEquals(200,$response->status());
        $this->assertTrue($response->getData()->estado);
        $this->assertNotNull($response->getData()->token);
    }

    /**
     * Test en caso de error
     */
    public function test_agregar_controller_error(){
        $request = new Request();
        $request->merge([
            'nombre'=>'Facebook',
            'url'=>'https://test.com'
        ]);

        $this->plataformaRepo->shouldReceive('obtenerPlataformaPorNombreYUrl')
            ->once()
            ->andThrow(new \Exception('test error'));

        $controller = new AgregarPaginaWebController(
            $this->plataformaRepo,
            $this->caracteristicaRepo,
            $this->evaluacionRepo
        );

        $response = $controller->agregar($this->request);

        $this->assertEquals(400, $response->status());
        $this->assertEquals('error', $response->getData()->estado);
        $this->assertEquals('test error', $response->getData()->msg);
    }

    /**
     * test cuando ya exite la plataforma web
     */
    public function test_agregar_plataforma_cuando_ya_existe(){
        $plataformaExistente = (object)[
            'id'=>1,
            'nombre'=>'Facebook',
            'url'=>'https://test.com'
        ];

        $this->plataformaRepo->shouldReceive('obtenerPlataformaPorNombreYUrl')
            ->once()
            ->with('Facebook','https://test.com')
            ->andReturn($plataformaExistente);

        $this->plataformaRepo->shouldNotReceive('create');
        
        $this->evaluacionRepo->shouldReceive('create')
            ->once()
            ->andReturn(true);

        $controller = new AgregarPaginaWebController(
            $this->plataformaRepo,
            $this->caracteristicaRepo,
            $this->evaluacionRepo
        );

        $response = $controller->agregar($this->request);

        $this->assertEquals(200, $response->status());
        $this->assertTrue($response->getData()->estado);
        $this->assertNotNull($response->getData()->token);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }
}