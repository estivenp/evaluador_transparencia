@extends('Base.Base2')
@section('formulario')
<div class="form-wrapper" id="contenidoFormulario">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Análisis de Página Web</h3>
        </div>
        <div class="card-body">
            <form id="agregarPaginaForm">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre de la página</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre de la página">
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="url" class="form-control" id="url" placeholder="https://ejemplo.com">
                </div>
                <button type="submit" class="btn btn-primary">Iniciar análisis</button>
            </form>
            <div class="mt-4">
                <h4 class="text-primary">Descubre el nivel de transparencia en la gestión de datos</h4>
                <p class="mt-3">
                    Evalúa la transparencia en la gestión de datos de cualquier plataforma web en simples pasos:
                </p>
                <ol>
                    <li>Ingresa el nombre y la URL de la plataforma web que deseas analizar.</li>
                    <li>Inicia el análisis para acceder a las métricas de evaluación.</li>
                    <li>Completa las métricas para cada característica de transparencia.</li>
                    <li>Descubre el nivel de transparencia en la gestion de los datos de la plataforma web.</li>
                </ol>
                <p>
                    Esta herramienta te permitirá evaluar aspectos cruciales como disponibilidad, usabilidad, 
                    informatividad, seguridad y auditabilidad de los datos. Obtén una visión completa de cómo 
                    las plataformas web manejan la información y promueve mejores prácticas en la gestión de datos.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection