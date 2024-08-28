<?php

namespace App\Aplicacion\Servicios\Caracteristica;

use App\Dominio\Interfaces\Caracteristica\CaracteristicaRepositoryInterface;
use App\Dominio\Interfaces\Caracteristica\ObtenerDatosCaracteristicaInterface;

class ObtenerDatosCaracteristicaService implements ObtenerDatosCaracteristicaInterface
{
    private $caracteristicaRepository;

    public function __construct(CaracteristicaRepositoryInterface $caracteristicaRepository)
    {
        $this->caracteristicaRepository = $caracteristicaRepository;
    }

    public function obtenerDatos($nombre)
    {
        return $this->caracteristicaRepository->obtenerCaracteristicaPorNombre($nombre);
    }
}