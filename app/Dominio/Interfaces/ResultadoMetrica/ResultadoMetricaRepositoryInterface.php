<?php

namespace App\Dominio\Interfaces\ResultadoMetrica;

interface ResultadoMetricaRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function obtenerResultadoMetricaPorEvaluacionYMetrica($idEvaluacion, $idMetrica);
    public function obtenerResultadosMetricaPorEvaluacionYCaracteristica($idEvaluacion, $idCaracteristica);
}