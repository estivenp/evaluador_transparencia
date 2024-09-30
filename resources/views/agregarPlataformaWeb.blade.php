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
@section('scripts')
<script>
$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(function() {
    $('#agregarPaginaForm').on('submit', function(e) {
        e.preventDefault();
        let datos = $(this).serialize();
        var nombre = $('#nombre').val();
        var url = $('#url').val();

        if(localStorage.getItem('evaluacionToken') != null){
            if(!confirm("Tiene una evaluacion en curso. Desea iniciar una nueva evaluacion?")){
                return
            }
        }

        $.ajax({
            url: '/agregarPagina',
            type: 'POST',
            data: {'nombre':nombre, 'url':url},
            dataType: 'json',
            success: function(response) {
                if(response.estado){
                    $(document).Toasts('create', {
                        class: 'bg-success',
                        title: '¡Éxito!',
                        subtitle: 'Operación completada',
                        body: 'Iniciando analisis.',
                        icon: 'fas fa-check-circle',
                        autohide: true,
                        delay: 3000
                    });
                    mostrarCaracteristicas()
                    localStorage.setItem('evaluacionToken', response.token)
                    verCaracteristica('disponibilidad')
                }
                else{
                    $(document).Toasts('create', {
                        class: 'bg-danger',
                        title: '¡Error!',
                        subtitle: 'Operación fallida',
                        body: 'Fallo en la operacion.',
                        icon: 'fas fa-check-circle',
                        autohide: true,
                        delay: 3000
                    });
                }

            },
            error: function(xhr, status, error) {
                $(document).Toasts('create', {
                    class: 'bg-danger',
                    title: '¡Error!',
                    subtitle: 'Operación fallida',
                    body: 'Fallo en la operacion.',
                    icon: 'fas fa-check-circle',
                    autohide: true,
                    delay: 3000
                });
            }
        });
    });
});

function agregarElemento(id_metrica){
    // Preguntar por el nombre del elemento
    let nombreElemento = prompt("Por favor, ingrese el nombre del elemento a agregar:");
    
    // Verificar si el usuario canceló o ingresó un nombre vacío
    if (!nombreElemento) {
        alert("No se ingresó un nombre válido. No se agregará ningún elemento.");
        return;
    }
    
    // Crear el ID reemplazando espacios por guiones bajos
    let elementoId = nombreElemento.replace(/\s+/g, '_').toLowerCase();
    
    // Obtener el formulario
    const formulario = document.getElementById('calcular_metrica_'+id_metrica);
    
    // Crear el nuevo div para el grupo de formulario
    const nuevoDiv = document.createElement('div');
    nuevoDiv.className = 'form-group';
    
    // Crear la etiqueta
    const label = document.createElement('label');
    label.htmlFor = elementoId;
    label.textContent = nombreElemento;
    
    // Crear el input
    const input = document.createElement('input');
    input.type = 'number';
    input.id = elementoId;
    input.name = elementoId;
    input.className = 'form-control';
    
    // Agregar la etiqueta y el input al nuevo div
    nuevoDiv.appendChild(label);
    nuevoDiv.appendChild(input);
    
    // Agregar el nuevo div al formulario
    formulario.insertBefore(nuevoDiv, formulario.firstChild);
}

function calcularMetrica(id_metrica){
        var form = document.getElementById('calcular_metrica_'+id_metrica);
        var formData = {};
    
        var inputs = form.getElementsByTagName('input');
        
        for (var i = 0; i < inputs.length; i++) {
            var input = inputs[i];
            if (input.type === 'number') {
                formData[input.name] = parseFloat(input.value);
            } else {
                if (input.checked) {
                    formData[input.name] = input.value;
                }
            }
        }
        var token = localStorage.getItem('evaluacionToken')

        $.ajax({
            url: '/calcularMetrica',
            type: 'POST',
            data: JSON.stringify({'id_metrica': id_metrica, 'datos': formData, 'token':localStorage.getItem('evaluacionToken')}),
            dataType: 'json',
            success: function(response) {
                var porcentajeResultado = document.getElementById('porcentaje_'+response.id_metrica);
                porcentajeResultado.innerHTML = response.resultado + "%"
                mostrarResultadoMetrica(response.id_metrica, response.abreviatura, response.resultado, response.formula,response.escala,response.unidad)
                validarCaracteristica(response.id_caracteristica, true)

                $(document).Toasts('create', {
                        class: 'bg-success',
                        title: '¡Éxito!',
                        subtitle: 'Operación completada',
                        body: 'Se realizo el calculo de la metrica correctamente.',
                        icon: 'fas fa-check-circle',
                        autohide: true,
                        delay: 3000
                    });
            },
            error: function(xhr, status, error) {
                $(document).Toasts('create', {
                        class: 'bg-danger',
                        title: '¡Error!',
                        subtitle: 'Operación fallida',
                        body: 'Fallo en la operacion.',
                        icon: 'fas fa-check-circle',
                        autohide: true,
                        delay: 3000
                    });
            }
        });
}

function validarCaracteristica(id_caracteristica, cambio_metrica){

        $.ajax({
            url: '/validarCalculoCaracteristica',
            type: 'POST',
            data: {'id_caracteristica':id_caracteristica,'token': localStorage.getItem('evaluacionToken'), 'cambio_metrica': cambio_metrica},
            dataType: 'json',
            success: function(response) {
                debugger
                if(response.resultado.calcular){
                    calcularValorCaracteristica(response.resultado.id_caracteristica, response.resultado.tipo)
                }
            },
            error: function(xhr, status, error) {
                $(document).Toasts('create', {
                        class: 'bg-danger',
                        title: '¡Error!',
                        subtitle: 'Operación fallida',
                        body: 'Fallo en la operacion.',
                        icon: 'fas fa-check-circle',
                        autohide: true,
                        delay: 3000
                    });
            }
        });
}

function calcularValorCaracteristica(id_caracteristica, tipo){
    debugger
    $.ajax({
        url: '/calcularValorCaracteristica',
        type: 'POST',
        data: {'id_caracteristica':id_caracteristica,'token': localStorage.getItem('evaluacionToken'),'tipo': tipo },
        dataType: 'json',
        success: function(response) {
            debugger
            if(response.tipo == "subcaracteristica"){
                mostrarResultadoCaracteristica(response.id_caracteristica, response.resultado,
                    response.formula, response.metricas)
            }
            validarCaracteristica(id_caracteristica, false);
            $(document).Toasts('create', {
                    class: 'bg-success',
                    title: '¡Éxito!',
                    subtitle: 'Operación completada',
                    body: 'Se realizo el calculo de la '+tipo,
                    icon: 'fas fa-check-circle',
                    autohide: true,
                    delay: 3000
                });
            if(tipo == 'transparencia'){
                verTransparencia();
            }
        },
        error: function(xhr, status, error) {
            debugger
            $(document).Toasts('create', {
                    class: 'bg-danger',
                    title: '¡Error!',
                    subtitle: 'Operación fallida',
                    body: 'Fallo en la operacion.',
                    icon: 'fas fa-check-circle',
                    autohide: true,
                    delay: 3000
                });
        }
    });
}

function cargarFormularioMetrica(id_metrica, abreviatura){
    var tab = document.getElementById('custom-tabs-one-'+abreviatura+'-tab')
    tab.innerHTML = abreviatura;

    $('#formulario-'+id_metrica).css({
        'display': ''
    });
    $('#resultado-'+id_metrica).css({
        'display': 'none'
    });
}
</script>
@endsection