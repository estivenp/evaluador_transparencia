<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Aplicacion\Servicios\PrincipalService;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;
use App\Persistencia\Repositorios\Evaluacion\EvaluacionRepository;
use App\Dominio\Interfaces\PlataformaWeb\PlataformaWebRepositoryInterface;
use App\Persistencia\Repositorios\PlataformaWeb\PlataformaWebRepository;
use App\Dominio\Interfaces\Evaluacion\TablaResultadoInterface;
use App\Aplicacion\Servicios\Evaluacion\TablaResultadoService;
use App\Dominio\Interfaces\Caracteristica\CaracteristicaRepositoryInterface;
use App\Dominio\Interfaces\Caracteristica\ObtenerDatosCaracteristicaInterface;
use App\Aplicacion\Servicios\Caracteristica\ObtenerDatosCaracteristicaService;
use App\Persistencia\Repositorios\Caracteristica\CaracteristicaRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Servicios
        $this->app->bind(PrincipalService::class, function ($app) {
            return new PrincipalService();
        });
        $this->app->bind(TablaResultadoInterface::class, TablaResultadoService::class);
        $this->app->bind(ObtenerDatosCaracteristicaInterface::class, ObtenerDatosCaracteristicaService::class);


        //Repositorios
        $this->app->bind(PlataformaWebRepositoryInterface::class, PlataformaWebRepository::class);
        $this->app->bind(EvaluacionRepositoryInterface::class, EvaluacionRepository::class);
        $this->app->bind(CaracteristicaRepositoryInterface::class, CaracteristicaRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
