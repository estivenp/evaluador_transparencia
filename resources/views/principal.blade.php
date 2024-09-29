@extends('Base.Base')

@section('contenido')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-12 text-center">
                <!-- <h1 class="main-title" style="color:white">Evalúa la transparencia en la gestión de los datos</h1> -->
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div style="color:white">
                    <h5 class="mb-4 titulo_blanco">
                    Analiza y mide la transparencia en la gestión de los datos de una plataforma web</h5>
                    <p class="card-text" style="text-align: justify;">
                        DTWebEvaluator es una herramienta que mide la transparencia en la gestión de datos de plataformas web. Mediante métricas específicas, analiza sitios web para cuantificar su nivel de transparencia en el manejo de información de usuarios. Ofrece una evaluación numérica fácil de interpretar, permitiendo comparaciones entre sitios y fomentando mejores prácticas en la gestión de datos para usuarios, desarrolladores y propietarios web.
                    </p>
                    <div class="text-center mt-4" style="margin-bottom:20px">
                        <a class="btn btn-block bg-gradient-success btn-flat" style="width: 80%;height: 50px;font-size: x-large;font-weight: bold;" 
                        onclick="analizarPagina()">Analizar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ url('images/analisis_datos.jpg') }}" alt="DTWebEvaluator Feature" class="feature-image">
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
function analizarPagina(){
    window.location.href = '/analizarPagina';
}
</script>
@endsection
