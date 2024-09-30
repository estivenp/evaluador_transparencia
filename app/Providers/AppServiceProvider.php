<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;
use App\Persistencia\Repositorios\Evaluacion\EvaluacionRepository;
use App\Dominio\Interfaces\PlataformaWeb\PlataformaWebRepositoryInterface;
use App\Persistencia\Repositorios\PlataformaWeb\PlataformaWebRepository;
use App\Dominio\Interfaces\Caracteristica\CaracteristicaRepositoryInterface;
use App\Persistencia\Repositorios\Caracteristica\CaracteristicaRepository;
use App\Aplicacion\Servicios\Metrica\CalcularMetricaService;
use App\Dominio\Interfaces\Metrica\CalcularMetricaInterface;
use App\Persistencia\Repositorios\Metrica\MetricaRepository;
use App\Dominio\Interfaces\Metrica\MetricaRepositoryInterface;
use App\Dominio\Interfaces\ResultadoMetrica\ResultadoMetricaRepositoryInterface;
use App\Persistencia\Repositorios\ResultadoMetrica\ResultadoMetricaRepository;
use App\Dominio\Interfaces\ValorCaracteristica\ValorCaracteristicaRepositoryInterface;
use App\Persistencia\Repositorios\ValorCaracteristica\ValorCaracteristicaRepository;
use App\Aplicacion\Servicios\ValorCaracteristica\CalcularValorCaracteristicaService;
use App\Dominio\Interfaces\ValorCaracteristica\CalcularValorCaracteristicaInterface;
use App\Dominio\Interfaces\Archivos\GenerarCsvInterface;
use App\Persistencia\Archivos\GenerarCsv;
use App\Dominio\Interfaces\ComponenteFormula\ComponenteFormulaRepositoryInterface;
use App\Persistencia\Repositorios\ComponenteFormula\ComponenteFormulaRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Servicios
        $this->app->bind(CalcularMetricaInterface::class, CalcularMetricaService::class);
        $this->app->bind(CalcularValorCaracteristicaInterface::class, CalcularValorCaracteristicaService::class);
        $this->app->bind(GenerarCsvInterface::class, GenerarCsv::class);


        //Repositorios
        $this->app->bind(PlataformaWebRepositoryInterface::class, PlataformaWebRepository::class);
        $this->app->bind(EvaluacionRepositoryInterface::class, EvaluacionRepository::class);
        $this->app->bind(CaracteristicaRepositoryInterface::class, CaracteristicaRepository::class);
        $this->app->bind(MetricaRepositoryInterface::class, MetricaRepository::class);
        $this->app->bind(ResultadoMetricaRepositoryInterface::class, ResultadoMetricaRepository::class);
        $this->app->bind(ValorCaracteristicaRepositoryInterface::class, ValorCaracteristicaRepository::class);
        $this->app->bind(ComponenteFormulaRepositoryInterface::class, ComponenteFormulaRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
