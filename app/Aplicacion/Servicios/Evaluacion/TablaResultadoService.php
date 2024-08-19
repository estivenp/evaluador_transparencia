<?php

namespace App\Aplicacion\Servicios\Evaluacion;

use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;
use App\Dominio\Interfaces\Evaluacion\TablaResultadoInterface;

class TablaResultadoService implements TablaResultadoInterface
{
    private $evaluacionRepository;

    public function __construct(EvaluacionRepositoryInterface $evaluacionRepository)
    {
        $this->evaluacionRepository = $evaluacionRepository;
    }

    public function getAllEvaluaciones()
    {
        return $this->evaluacionRepository->getAllWithPlataforma();
    }
}