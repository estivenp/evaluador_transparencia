<?php

namespace App\Persistencia\Archivos;

use App\Dominio\Interfaces\Caracteristica\CaracteristicaRepositoryInterface;
use App\Dominio\Interfaces\PlataformaWeb\PlataformaWebRepositoryInterface;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;
use App\Dominio\Interfaces\ComponenteFormula\ComponenteFormulaRepositoryInterface;
use App\Dominio\Interfaces\ResultadoMetrica\ResultadoMetricaRepositoryInterface;
use App\Dominio\Interfaces\Archivos\GenerarCsvInterface;

class GenerarCsv implements GenerarCsvInterface
{
    private $caracteristicaRepository;
    private $evaluacionRepository;
    private $plataformaWebRepository;
    private $resultadoMetricaRepository;
    private $componenteFormulaRepository;

    public function __construct(
        PlataformaWebRepositoryInterface $plataformaWebRepository,
        EvaluacionRepositoryInterface $evaluacionRepository,
        CaracteristicaRepositoryInterface $caracteristicaRepository,
        ResultadoMetricaRepositoryInterface $resultadoMetricaRepository,
        ComponenteFormulaRepositoryInterface $componenteFormulaRepository,
        )
    {
        $this->evaluacionRepository = $evaluacionRepository;
        $this->caracteristicaRepository = $caracteristicaRepository;
        $this->plataformaWebRepository = $plataformaWebRepository;
        $this->resultadoMetricaRepository = $resultadoMetricaRepository;
        $this->componenteFormulaRepository = $componenteFormulaRepository;
    }

    public function generar($token)
    {
        $data = [];
        $evaluacion = $this->evaluacionRepository->validarToken($token);
        $plataforma = $evaluacion->plataformaWeb;
        $data[] = ['Plataforma web:',$plataforma->nombre , '', 'Url:', $plataforma->url];
        $data[] = [''];
        $data[] = ['Caracteristicas principales','','','', 'Subcaracteristicas','','','', 'Metricas'];
        $data[] = ['Caracteristica principal', 'Formula caracteristica principal', 'Formula aplicada caracteristica principal', 'Resultado caracteristica principal',
            'Subcaracteristica', 'Formula subcaracteristica principal','Formula aplicada subcaracteristica principal', 'Resultado subcaracteristica principal',
            'Metrica', 'Formula metrica', 'Formula aplicada metrica', 'Resultado metrica'];
        $caracteristicasPrincipales = $this->caracteristicaRepository->obtenerValoresCaracteristicasPrincipales($evaluacion->id);
        $valoresCaracteristicasPrincipales = [];
        $valoresCaracteristicasPrincipalesAplicados = [];
        $formulaCaracteristicaPrincipalAplicada = "(";
        $formulaCaracteristicaPrincipal = "(";

        foreach ($caracteristicasPrincipales as $caracteristica) {
            $valor = $caracteristica->valorCaracteristica->first();
            $nombreCaracteristicaPrincipal = $valor->caracteristica->nombre;
            $subCaracteristicas = $this->caracteristicaRepository->obtenerValoresSubcaracteristicas($valor->caracteristica->id, $evaluacion->id);
            $valoresSubCaracteristica = [];
            $formulaSubCaracteristica = "(";
            foreach ($subCaracteristicas as $subcaracteristica) {
                $valorSubCaracteristica = $subcaracteristica->valorCaracteristica->first();
                $resultadoMetricas = $this->resultadoMetricaRepository->obtenerResultadosMetricaPorEvaluacionYCaracteristica($evaluacion->id,$valorSubCaracteristica->caracteristica->id);
                $valoresSubCaracteristica[] = $subcaracteristica->nombre;
                $valoresMetricas = [];
                $formulaMetricas = "(";
                foreach($resultadoMetricas as $resultadoMetrica){
                    $valoresMetricas[] = $resultadoMetrica->abreviatura;
                    $formulaMetrica = $this->componenteFormulaRepository->obtenerFormulaMetrica($resultadoMetrica->id);
                    $data[] = [$nombreCaracteristicaPrincipal,'','','',$subcaracteristica->nombre,'','','',
                        $resultadoMetrica->abreviatura,$formulaMetrica,$resultadoMetrica->formula,$resultadoMetrica->resultado];
                }
                $formulaMetricas .= implode("+", $valoresMetricas). ")/".count($resultadoMetricas);
                $data[] = [$nombreCaracteristicaPrincipal,'','','',$subcaracteristica->nombre,$formulaMetricas,
                    $valorSubCaracteristica->formula,$valorSubCaracteristica->valor];
            }
            $formulaSubCaracteristica .= implode("+", $valoresSubCaracteristica). ")/".count($subCaracteristicas);
            $data[] = [$nombreCaracteristicaPrincipal,$formulaSubCaracteristica,$valor->formula,$valor->valor];
            $valoresCaracteristicasPrincipales[] = $nombreCaracteristicaPrincipal;
            $valoresCaracteristicasPrincipalesAplicados[] = $valor->valor;
        }
        $formulaCaracteristicaPrincipal .= implode("+", $valoresCaracteristicasPrincipales). ")/".count($caracteristicasPrincipales);
        $formulaCaracteristicaPrincipalAplicada .= implode("+", $valoresCaracteristicasPrincipalesAplicados). ")/".count($caracteristicasPrincipales);
        $data[] = [''];
        $data[] = ['Transparencia en la gestión de los datos de los usuarios finales'];
        $data[] = ['','Formula', 'Formula aplicada', 'Resultado'];
        $data[] = ['Transparencia',$formulaCaracteristicaPrincipal, $formulaCaracteristicaPrincipalAplicada, $evaluacion->resultado_final];

        $output = fopen('php://temp', 'r+');
        foreach ($data as $row) {
            fputcsv($output, $row);
        }
        rewind($output);
        $csvContent = stream_get_contents($output);
        fclose($output);

        return $csvContent;
    }
}