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
                    <p class="card-text">
                        DTWebEvaluator es una herramienta innovadora diseñada para evaluar la transparencia en la gestión de datos de las plataformas web. Utilizando un conjunto de métricas cuidadosamente seleccionadas, nuestra aplicación analiza las características principales de los sitios web para determinar qué tan transparentes son en el manejo de la información de los usuarios.
                    </p>
                    <p class="card-text">
                        Nuestro objetivo es proporcionar una evaluación cuantitativa fácil de entender, que permita a usuarios, desarrolladores y propietarios de sitios web comprender rápidamente el nivel de transparencia de una plataforma específica. Al generar un resultado numérico, facilitamos la comparación entre diferentes sitios y promovemos la mejora continua en las prácticas de gestión de datos.
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
phpinfo()
@endsection
@section('scripts')
<script>
function analizarPagina(){
    window.location.href = '/vistaAgregarPagina';
}
</script>
@endsection
