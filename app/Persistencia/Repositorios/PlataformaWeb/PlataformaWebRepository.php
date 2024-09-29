<?php

namespace App\Persistencia\Repositorios\PlataformaWeb;

use App\Dominio\Entidad\PlataformaWeb\PlataformaWeb;
use App\Dominio\Interfaces\PlataformaWeb\PlataformaWebRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class PlataformaWebRepository implements PlataformaWebRepositoryInterface
{
    public function all()
    {
        return PlataformaWeb::all();
    }

    public function find($id)
    {
        return PlataformaWeb::findOrFail($id);
    }

    public function create(array $data)
    {
        return PlataformaWeb::create($data);
    }

    public function update($id, array $data)
    {
        $plataforma = PlataformaWeb::findOrFail($id);
        $plataforma->update($data);
        return $plataforma;
    }

    public function delete($id)
    {
        $plataforma = PlataformaWeb::findOrFail($id);
        $plataforma->delete();
    }

    public function obtenerPlataformaPorNombreYUrl( string $nombre,string $url){
        return PlataformaWeb::where('nombre', $nombre)
                            ->where('url', $url)
                            ->first();
    }
}