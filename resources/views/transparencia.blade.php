<div class="form-wrapper" id="contenidoFormulario">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0"><strong>Resultado transparencia "{{ $plataforma->nombre }}"</strong></h3>
            <button type="button" class="btn btn-primary" onclick="generarReporte()">Descargar informe</button>
        </div>

        <div class="card-body">
            <div class="row" style="margin-top:10px">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Transparencia</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                <div class="text-center">
                                    <h1 class="display-4" id="porcentaje_transparencia">{{ $evaluacion->resultado_final }} %</h1>
                                    <p class="text-muted">Nivel de transparencia en la gestión de la información del usuario</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Gráfica de Resultados</h3>
                        </div>
                        <div>
                            <canvas id="grafica_transparencia" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Resumen de la Evaluación</h3>
                        </div>
                        <div class="card-body">
                            <h4>Resultados caracteristicas principales:</h4>
                            <ul>
                            @foreach($caracteristicas as $nombre => $valor)
                                <li><strong>{{ $nombre }}:</strong> {{ $valor }} </li>
                            @endforeach
                            </ul>
                            <h4>Ecuacion aplicada:</h4>
                            <p><strong>Transparencia en gestión de datos = </strong>
                                <span id="formula_transparencia">{{$formula}} = {{ $evaluacion->resultado_final }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>