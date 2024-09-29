<div class="card card-primary card-tabs" id="contenidoFormulario">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-Descripcion-tab" data-toggle="pill" href="#custom-tabs-one-Descripcion" role="tab" aria-controls="custom-tabs-one-Descripcion" aria-selected="true">Descripcion</a>
            </li>
            @if($metricas->count() > 0)
                @foreach($metricas as $metrica)
                <li class="nav-item" id="tab-{{$metrica->id}}">
                    <a class="nav-link" id="custom-tabs-one-{{$metrica->abreviatura}}-tab" data-toggle="pill" href="#custom-tabs-one-{{$metrica->abreviatura}}" role="tab" aria-controls="custom-tabs-one-{{$metrica->abreviatura}}" aria-selected="false">{{$metrica->abreviatura}}</a>
                </li>
                @endforeach
            @endif
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-Car-tab" data-toggle="pill" href="#custom-tabs-one-Car" role="tab" aria-controls="custom-tabs-one-Car" aria-selected="false"> Resultado {{ $caracteristica->nombre }}</a>
            </li>
        </ul>
    </div>
    <div class="card-body" style="height: 300px; overflow-y: auto;">
        <div class="tab-content" id="custom-tabs-one-tabContent">
            <div class="tab-pane fade active show" id="custom-tabs-one-Descripcion" role="tabpanel" aria-labelledby="custom-tabs-one-Descripcion-tab">
                <h4>Definición</h4>
                <p>
                    {{ $caracteristica->descripcion }}
                </p>
            </div>
            @if($metricas->count() > 0)
                @foreach($metricas as $metrica)
                <div class="tab-pane fade" id="custom-tabs-one-{{$metrica->abreviatura}}" role="tabpanel" aria-labelledby="custom-tabs-one-{{$metrica->abreviatura}}-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="formulario-{{$metrica->id}}">
                                <div class="card-header">
                                    <h3 class="card-title" style="font-weight: 600;">{{$metrica->abreviatura}} - {{$metrica->nombre}}</h3>
                                </div>
                                <div class="card-body">

                                    <div id="accordion">
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <h4 class="card-title w-100">
                                                <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                                                    Descipcion
                                                </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <p>{{$metrica->descripcion}}</p>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Ecuación</th>
                                                                    <th>Unidad</th>
                                                                    <th>Escala</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{$metrica->abreviatura}} =
                                                                    @php
                                                                        $formula = '';
                                                                        foreach($metrica->componentesFormula as $componente) {
                                                                            $formula .= ' ' . $componente->valor . ' ';
                                                                        }
                                                                    @endphp
                                                                    {{ $formula }}
                                                                    </td>
                                                                    <td>{{$metrica->unidad}}</td>
                                                                    <td>{{$metrica->escala}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <h4 style="font-weight: 600;">Variables:</h4>
                                                    @php
                                                        $variablesYPreguntas = $metrica->componentesFormula->filter(function($componente) {
                                                            return in_array($componente->tipo, ['variable', 'pregunta']);
                                                        })->unique('valor');
                                                    @endphp
                                                    @foreach($variablesYPreguntas as $componente)
                                                        <p>
                                                            <strong>{{ $componente->valor }}:</strong>
                                                            @if($componente->tipo == 'variable')
                                                                {{ $componente->variable->descripcion }}
                                                            @else
                                                                Hace referencia al valor que se le puede asignar a la pregunta {{ $componente->valor }}.
                                                            @endif
                                                        </p>
                                                    @endforeach
                                                    <p><strong>{{ $metrica->abreviatura }}:</strong> {{ $metrica->nombre }}</p>

                                                    <h4 style="font-weight: 600;">Observaciones:</h4>
                                                    <p>{{$metrica->observaciones}}</p>

                                                    <div class="callout callout-info">
                                                        <h5 style="font-weight: 600;">Ejemplo de utilización:</h5>
                                                        <p>{{$metrica->ejemplo_utilizacion}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <form id="calcular_metrica_{{$metrica->id}}">
                                        @foreach($variablesYPreguntas as $componente)
                                            <div class="form-group">
                                                @if($componente->tipo == 'variable')
                                                    @if($metrica->abreviatura == 'CDD' and $componente->valor == 'PCD')
                                                        <button type="button" class="btn btn-primary" onclick="agregarElemento({{ $metrica->id }})">Agregar componente</button>
                                                    @elseif($componente->valor != 'NTDE')
                                                        <label for="{{ $componente->valor }}" title="{{ $componente->variable->descripcion }}">{{ $componente->valor }}</label>
                                                        <input type="number" class="form-control" id="{{ $componente->valor }}" name="{{ $componente->valor }}" min="0" required>
                                                    @endif
                                                @else
                                                    <label>{{ $componente->valor }}: {{ $componente->pregunta->texto }}</label>
                                                    @foreach($componente->pregunta->respuesta->opcionesRespuesta as $opcion)
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" type="radio" id="{{$componente->valor}}_{{$opcion->valor}}" name="{{$componente->valor}}" value="{{$opcion->valor}}" required>
                                                        <label for="{{$componente->valor}}_{{$opcion->valor}}" class="custom-control-label">{{$opcion->valor}} - {{$opcion->texto}}</label>
                                                    </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        @endforeach

                                        <button type="button" class="btn btn-primary" onclick="calcularMetrica({{ $metrica->id }})">Calcular {{ $metrica->abreviatura }}</button>
                                    </form>
                                </div>
                            </div>


                            <div id="resultado-{{$metrica->id}}" style="display:none">
                                <button class="btn btn-primary" id="modifyDataBtn" onclick="cargarFormularioMetrica({{ $metrica->id }},'{{ $metrica->abreviatura }}')">
                                    <i class="fas fa-edit mr-2"></i>Modificar datos de la métrica
                                </button>
                                <div class="row" style="margin-top:10px">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">{{ $metrica->abreviatura }}</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                                    <div class="text-center">
                                                        <h1 class="display-4" id="porcentaje_{{$metrica->id}}">0%</h1>
                                                        <p class="text-muted">{{ $metrica->nombre }}</p>
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
                                                <canvas id="grafica_{{ $metrica->id }}" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
                                                <h4>Ecuación utilizada:</h4>
                                                <p><strong>{{$metrica->abreviatura}} =
                                                    @php
                                                        $formula = '';
                                                        foreach($metrica->componentesFormula as $componente) {
                                                            $formula .= ' ' . $componente->valor . ' ';
                                                        }
                                                    @endphp
                                                    {{ $formula }}</strong></p>
                                                <p>Ecuacion aplicada:</p>
                                                <p><strong>{{ $metrica->abreviatura }} = 
                                                    <span id="formula_metrica_{{$metrica->id}}">(0 + 0) ÷ 10 = 0 = 0%</span>
                                                </strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            @endif

                <div class="tab-pane fade" id="custom-tabs-one-Car" role="tabpanel" aria-labelledby="custom-tabs-one-Car-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">{{ Str::of($caracteristica->nombre)->limit(110)->upper()}}</h3>
                                </div>
                                <div class="card-body">

                                    <div id="resultado_caracteristica_info">
                                        <h4>Resultado</h4>
                                        <div id="resultado-disponibilidad">
                                            @if($caracteristica->subCaracteristicas->count() > 0)
                                                <p>
                                                    Para obtener el resultado de disponibilidad de la plataforma, por favor complete las métricas de las siguientes subcaracterísticas:
                                                </p>
                                                <ul>
                                                @foreach($caracteristica->subCaracteristicas as $subCaracteristicas)
                                                    <li>{{ $subCaracteristicas->nombre }}</li>
                                                @endforeach
                                                </ul>
                                            @else
                                                <p>
                                                    Para obtener el resultado de disponibilidad de la plataforma, por favor complete las métricas de {{ $caracteristica->nombre }}.
                                                </p>
                                            @endif
                                            <p>
                                                Una vez diligenciadas todas las métricas, se mostrará aquí un análisis detallado que incluirá:
                                            </p>
                                            <ul>
                                                <li>Resultados de las métricas asociadas</li>
                                                <li>Calculo de la métrica utilizada para calcular la {{ $caracteristica->nombre }}</li>
                                                <li>Porcentaje global de {{ $caracteristica->nombre }}</li>
                                            </ul>
                                            <p>
                                                Este análisis le proporcionará una visión completa del nivel de disponibilidad de la plataforma web evaluada, permitiéndole identificar áreas de mejora y fortalezas en la gestión de datos.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="resultado_caracteristica" style="display:none">

                                        <div class="row" style="margin-top:10px">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">{{ $caracteristica->nombre }}</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                                            <div class="text-center">
                                                            <h1 class="display-4" id="porcentaje_caracteristica_{{$caracteristica->id}}">0 %</h1>
                                                            <p class="text-muted">Nivel de conformidad de {{ $caracteristica->nombre }}</p>
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
                                                        <canvas id="grafica_caracteristica_{{ $caracteristica->id }}" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
                                                        <h4>Metricas utilizadas:</h4>
                                                        <ul id="lista_metricas">
                                                        @foreach($valores as $nombre => $valor)
                                                            <li><strong>{{ $nombre }}:</strong> {{ $valor }} </li>
                                                        @endforeach
                                                        </ul>
                                                        <h4>Ecuacion aplicada:</h4>
                                                        <p><strong>{{ $caracteristica->nombre }} = </strong>
                                                            <span id="formula_caracteristica_{{$caracteristica->id}}">(60 + 60 + 60 +60 +60) / 5 = 60</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
