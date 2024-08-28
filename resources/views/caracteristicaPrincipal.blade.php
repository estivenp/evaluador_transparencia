<div class="card card-primary card-tabs" id="contenidoFormulario">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-Descripcion-tab" data-toggle="pill" href="#custom-tabs-one-Descripcion" role="tab" aria-controls="custom-tabs-one-Descripcion" aria-selected="true">Descripcion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-M1-tab" data-toggle="pill" href="#custom-tabs-one-M1" role="tab" aria-controls="custom-tabs-one-M1" aria-selected="false">M1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-M2-tab" data-toggle="pill" href="#custom-tabs-one-M2" role="tab" aria-controls="custom-tabs-one-M2" aria-selected="false">M2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-M2-Res" data-toggle="pill" href="#custom-tabs-one-Res" role="tab" aria-controls="custom-tabs-one-Res" aria-selected="false">Resultado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-Car-tab" data-toggle="pill" href="#custom-tabs-one-Car" role="tab" aria-controls="custom-tabs-one-Car" aria-selected="false">Resultado2</a>
            </li>
        </ul>
    </div>
    <div class="card-body" style="height: 300px; overflow-y: auto;">
        <div class="tab-content" id="custom-tabs-one-tabContent">
            <div class="tab-pane fade active show" id="custom-tabs-one-Descripcion" role="tabpanel" aria-labelledby="custom-tabs-one-Descripcion-tab">
                <h4>Definición</h4>
                <p>
                    {{ $caracteristica->descripcion }}
                <!-- La característica en cuestión, según la norma ISO 25000, se refiere a la capacidad de una plataforma web de garantizar que los usuarios puedan obtener y utilizar sus datos en el momento y lugar que lo necesiten, con la disponibilidad y accesibilidad como objetivos principales. En ese sentido, la disponibilidad se preocupa por la facilidad con la que los usuarios pueden acceder a la información que proporcionaron a la plataforma web durante su interacción con ella, siempre y cuando sea accesible [1]. Debido a esto, es una característica que motiva el mejoramiento de la capacidad de respuesta de las plataformas web ante problemas e interrupciones relacionadas con el acceso a los datos para que estos sean correctos, precisos y no generen confusión. -->
                </p>
            </div>

            <div class="tab-pane fade" id="custom-tabs-one-M1" role="tabpanel" aria-labelledby="custom-tabs-one-M1-tab">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title" style="font-weight: 600;">SMPD - Satisfacción con mecanismos de protección de datos</h3>
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
                                                <p>Esta métrica tiene como objetivo evaluar la percepción de la satisfacción respecto a la manera en que una plataforma web comunica sus políticas de privacidad y los mecanismos que protección de datos ofrecidos a los usuarios durante si iteración con la plataforma. La métrica se basa en una encuesta compuesta por dos preguntas, cada una con cinco opciones de respuesta y un rango de puntaje de 1 a 5 para cada pregunta..</p>
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
                                                                <td>SMPD = (P1 + P2) ÷ 10</td>
                                                                <td>Porcentaje %</td>
                                                                <td>[20, 100]</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <h4 style="font-weight: 600;">Variables:</h4>
                                                <p>P1 y P2: Hace referencia al valor entre 1 y 5 que se le puede asignar a las preguntas P1 y P2 según las posibilidades respuestas de la encuesta.</p>
                                                <p>SMPD: Indicador de la satisfacción con mecanismos de protección de datos.</p>

                                                <h4 style="font-weight: 600;">Observaciones:</h4>
                                                <p>Opciones de respuesta para P1 y P2: 1 - Muy insatisfecho, 2 - Insatisfecho, 3 - Neutral, 4 - Satisfecho, 5 - Muy satisfecho</p>

                                                <div class="callout callout-info">
                                                    <h5 style="font-weight: 600;">Ejemplo de utilización:</h5>
                                                    <p>Para aplicar la métrica SMPD se debe responder la encuesta que tiene asociada seleccionando una de las respuestas disponibles para cada pregunta las cuales tienen un puntaje entre 1 y 5 como se describe en las observaciones.</p>
                                                    <p>Supongamos que un usuario responde:</p>
                                                    <p>P1 = 4, P2 = 5</p>
                                                    <p>SMPD = (4 + 5) ÷ 10</p>
                                                    <p>SMPD = 90%</p>
                                                    <p>Este resultado indica una alta satisfacción con los mecanismos de protección de datos y seguridad implementados en la plataforma web, cumpliendo con el objetivo.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form>
                                    <div class="form-group">
                                        <label>P1: ¿Qué tan satisfecho está con los mecanismos de protección de datos de la plataforma?</label>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="p1_1" name="p1" value="1" required>
                                            <label for="p1_1" class="custom-control-label">1 - Muy insatisfecho</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="p1_2" name="p1" value="2">
                                            <label for="p1_2" class="custom-control-label">2 - Insatisfecho</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="p1_3" name="p1" value="3">
                                            <label for="p1_3" class="custom-control-label">3 - Neutral</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="p1_4" name="p1" value="4">
                                            <label for="p1_4" class="custom-control-label">4 - Satisfecho</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="p1_5" name="p1" value="5">
                                            <label for="p1_5" class="custom-control-label">5 - Muy satisfecho</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>P2: ¿Cómo calificaría la seguridad de sus datos personales en esta plataforma?</label>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="p2_1" name="p2" value="1" required>
                                            <label for="p2_1" class="custom-control-label">1 - Muy insatisfecho</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="p2_2" name="p2" value="2">
                                            <label for="p2_2" class="custom-control-label">2 - Insatisfecho</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="p2_3" name="p2" value="3">
                                            <label for="p2_3" class="custom-control-label">3 - Neutral</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="p2_4" name="p2" value="4">
                                            <label for="p2_4" class="custom-control-label">4 - Satisfecho</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="p2_5" name="p2" value="5">
                                            <label for="p2_5" class="custom-control-label">5 - Muy satisfecho</label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Calcular SMPD</button>
                                </form>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="custom-tabs-one-M2" role="tabpanel" aria-labelledby="custom-tabs-one-M2-tab">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title" style="font-weight: 600;">TEED - Tasa de Éxito en la Exportación de Datos</h3>
                            </div>
                            <div class="card-body">
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
                                                <td>TEED = (NEE / NTIE) * 100</td>
                                                <td>Porcentaje %</td>
                                                <td>[20, 100]</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h4 style="font-weight: 600;">Variables:</h4>
                                <ul>
                                    <li><strong>NEE:</strong> Número de exportaciones exitosas.</li>
                                    <li><strong>NTIE:</strong> Número total de intentos de exportación.</li>
                                    <li><strong>TEED:</strong> Indicador de la tasa de éxito en la exportación de datos.</li>
                                </ul>

                                <h4 style="font-weight: 600;">Observaciones:</h4>
                                <p>N/A</p>

                                <div class="callout callout-info">
                                    <h5 style="font-weight: 600;">Ejemplo de utilización:</h5>
                                    <p>Para aplicar la métrica <strong>TEED</strong> se debe establecer un número de exportaciones de datos exitosas y no exitosas. Supongamos los siguientes datos:</p>
                                    <p>Se van a evaluar 20 intentos de exportación, de los cuales 16 fueron exitosos.</p>
                                    <p>TEED = (16 / 20) * 100 = 80%</p>
                                    <p>Este resultado indica una buena tasa de éxito en la exportación de datos, superando el valor objetivo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title" style="font-weight: 600;">Formulario de Evaluación</h3>
                            </div>
                            <div class="card-body">
                                <form id="teedForm">
                                    <div class="form-group">
                                        <label for="nee">NEE: Número de exportaciones exitosas</label>
                                        <input type="number" class="form-control" id="nee" name="nee" min="0" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="ntie">NTIE: Número total de intentos de exportación</label>
                                        <input type="number" class="form-control" id="ntie" name="ntie" min="1" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Calcular TEED</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="custom-tabs-one-Res" role="tabpanel" aria-labelledby="custom-tabs-one-Res-tab">
                <div class="row mb-3">
                    <div class="col-12">
                        <button class="btn btn-primary" id="modifyDataBtn">
                            <i class="fas fa-edit mr-2"></i>Modificar datos de la métrica
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Resultado SMPD</h3>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                    <div class="text-center">
                                        <h1 class="display-4">90%</h1>
                                        <p class="text-muted">Satisfacción con mecanismos de protección de datos</p>
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
                            <div class="card-body" style="height: 300px;">
                                <canvas id="smpdChart"></canvas>
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
                                <h4>Ecuación aplicada:</h4>
                                <p><strong>SMPD = (P1 + P2) ÷ 10</strong></p>
                                <p>Donde:</p>
                                <ul>
                                    <li>P1 = 4 (Satisfecho)</li>
                                    <li>P2 = 5 (Muy satisfecho)</li>
                                </ul>
                                <p><strong>SMPD = (4 + 5) ÷ 10 = 0.9 = 90%</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="custom-tabs-one-Car" role="tabpanel" aria-labelledby="custom-tabs-one-Car-tab">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Disponibilidad</h3>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h4>Resultado</h4>
                                    <div id="resultado-disponibilidad">
                                        <p>
                                            Para obtener el resultado de disponibilidad de la plataforma, por favor complete las métricas de las siguientes subcaracterísticas:
                                        </p>
                                        <ul>
                                            <li>Confiabilidad</li>
                                            <li>Portabilidad</li>
                                            <li>Integridad</li>
                                            <li>Accesibilidad</li>
                                            <li>Privacidad</li>
                                        </ul>
                                        <p>
                                            Una vez diligenciadas todas las métricas, se mostrará aquí un análisis detallado que incluirá:
                                        </p>
                                        <ul>
                                            <li>Gráficas representativas de cada subcaracterística</li>
                                            <li>Porcentaje global de disponibilidad</li>
                                            <li>Recomendaciones para mejorar la disponibilidad de la plataforma</li>
                                        </ul>
                                        <p>
                                            Este análisis le proporcionará una visión completa del nivel de disponibilidad de la plataforma web evaluada, permitiéndole identificar áreas de mejora y fortalezas en la gestión de datos.
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
