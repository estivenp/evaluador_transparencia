
function inicio(){
    window.location.href = '/';
}

function terminosUso(){
    window.location.href = '/terminosUso';
}

function analizarPagina(){
    window.location.href = '/analizarPagina';
}
    
let activo = {
    'background-color': '#007bff',
    'color': '#ffffff'
}
let activoSubmenu = {
        'background-color': '#007bff91',
        'color': '#ffffff'
    };
let inactivo = {
    'background-color': '',
    'color': ''
};

function ocultarCaracteristicas() {
    const elementos = document.getElementsByClassName('caracteristica');
    for (let i = 0; i < elementos.length; i++) {
        elementos[i].style.display = 'none';
    }
    const transparencia = document.getElementById('transparencia');
    transparencia.style.display = 'none';
}

function mostrarCaracteristicas() {
    const elementos = document.getElementsByClassName('caracteristica');
    for (let i = 0; i < elementos.length; i++) {
        elementos[i].style.display = '';
        id =  elementos[i].id;
    }

    if(localStorage.getItem('transparencia')){
        mostrarTransparencia()
    }
}

function mostrarTransparencia(){
    const transparencia = document.getElementById('transparencia');
    transparencia.style.display = '';
}

function generarReporte(){
    $.ajax({
        url: '/generarReporte',
        method: 'POST',
        data: {'token':localStorage.getItem('evaluacionToken')},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        xhrFields: {
            responseType: 'blob'
        },
        success: function(data, status, xhr) {
            var fecha = xhr.getResponseHeader('fecha');
            var plataforma = xhr.getResponseHeader('plataforma');

            console.log('Fecha del informe:', fecha);
            console.log('Plataforma:', plataforma);

            // Crear y descargar el archivo CSV
            var blob = new Blob([data], {type: 'text/csv'});
            var downloadUrl = URL.createObjectURL(blob);
            var a = document.createElement("a");
            a.href = downloadUrl;
            a.download = "informe_transparencia_"+plataforma+"_"+fecha+".csv";
            // a.download = "informe_transparencia.csv";
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(downloadUrl);
        },
        error: function(xhr, status, error) {
            console.error('Error generating report:', error);
        }
    });
}

function verTransparencia(){
    $.ajax({
            url: '/verTransparencia',
            data:{'token':localStorage.getItem('evaluacionToken')},
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                localStorage.setItem('transparencia',true)
                mostrarTransparencia()
                selectorSidebarItem('transparencia');
                document.getElementById('contenidoFormulario').innerHTML = response.vista;
                crearGraficaNavegadores(['Cumple','No cumple'], [71, 29], "grafica_transparencia");
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

$(document).ready(function() {
    mostrarCaracteristicas()
    var token = localStorage.getItem('evaluacionToken')
    if(token != null){
        $.ajax({
            url: '/validarToken',
            data: {'token':token},
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                if(response.valido){
                    $('#nombre').val(response.plataforma_nombre)
                    $('#url').val(response.plataforma_url)
                }
                else{
                    ocultarCaracteristicas();
                    localStorage.removeItem('evaluacionToken')
                    localStorage.removeItem('transparencia')
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
    else{
        ocultarCaracteristicas();
    }

    function SidebarSelector() {
        $('.sidebar-container .nav-link').on('click', function(e) {
            e.preventDefault();
            
            $('.sidebar-container .nav-link').removeClass('active').css(inactivo);
            
            $(this).addClass('active').css(activo);
            
            if ($(this).closest('.nav-treeview').length) {
                let parentLink = $(this).closest('.nav-item.has-treeview').children('.nav-link');
                parentLink.addClass('active').css(activo);
            }
            
            if ($(this).closest('.nav-treeview').length) {
                $(this).css(activoSubmenu);
            }
        });
    }

    SidebarSelector();
});

function selectorSidebarItem(itemId) {

    // Deseleccionar todos los elementos activos
    $('.sidebar-container .nav-link').removeClass('active').css(inactivo);
    $('.sidebar-container .nav-item').removeClass('menu-open menu-is-opening');
    $('.sidebar-container .nav-treeview').hide();

    // Encontrar el elemento seleccionado
    let $selectedItem = $('.sidebar-container .nav-link').filter(function() {
        return $(this).text().trim().toLowerCase() === itemId.toLowerCase();
    });

    if ($selectedItem.length === 0) {
        // Si no se encuentra, buscar por ID (para características principales)
        $selectedItem = $('#' + itemId);
    }

    if ($selectedItem.length) {
        // Activar el elemento seleccionado
        $selectedItem.addClass('active').css(activo);

        if ($selectedItem.closest('.nav-treeview').length) {
            // Es una subcaracterística
            $selectedItem.css(activoSubmenu);
            let $parentItem = $selectedItem.closest('.nav-item.has-treeview');
            let $parentLink = $parentItem.children('.nav-link');
            $parentItem.addClass('menu-open menu-is-opening');
            $parentLink.addClass('active').css(activo);
            $parentItem.children('.nav-treeview').show();
            $parentLink.find('.right').removeClass('fa-angle-left').addClass('fa-angle-down');
        } else if ($selectedItem.parent().hasClass('has-treeview')) {
            // Es una característica principal con submenú
            let $parentItem = $selectedItem.parent();
            $parentItem.addClass('menu-open menu-is-opening');
            $parentItem.children('.nav-treeview').show();
            $selectedItem.find('.right').removeClass('fa-angle-left').addClass('fa-angle-down');
        }

        // Desplazarse al elemento seleccionado
        $selectedItem[0].scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var sidebarToggle = document.getElementById('sidebarToggle');
    var closeSidebar = document.getElementById('closeSidebar');
    var sidebar = document.getElementById('sidebar');

    sidebarToggle.addEventListener('click', function() {
        sidebar.classList.add('show');
    });

    closeSidebar.addEventListener('click', function() {
        sidebar.classList.remove('show');
    });
});

function verCaracteristica(nombre){
    $.ajax({
        url: '/obtenerDatosCaracteristica',
        data: {'nombre':nombre,'token': localStorage.getItem('evaluacionToken')},
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            document.getElementById('contenidoFormulario').innerHTML = response.vista;
            if(!(response.resultados.length === 0)){
                for(let resultado of response.resultados){
                    mostrarResultadoMetrica(resultado.id_metrica, resultado.abreviatura,
                    resultado.resultado, resultado.formula, resultado.escala,resultado.unidad)
                }
            }
            if(response.valorCaracteristica != null){
                var metricas = [];
                if(response.datos.metricas.length > 0){
                    var metricas = response.datos.metricas
                }
                else{
                    var metricas = response.datos.sub_caracteristicas
                }
                mostrarResultadoCaracteristica(response.valorCaracteristica.id_caracteristica,
                response.valorCaracteristica.valor, response.valorCaracteristica.formula,metricas);
                crearGraficaNavegadores(['Cumple','No cumple'], [response.valorCaracteristica.valor, 100 - response.valorCaracteristica.valor]
                , "grafica_caracteristica_"+response.valorCaracteristica.id_caracteristica)
            }

            selectorSidebarItem(nombre);
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

function mostrarResultadoMetrica(id_metrica, abreviatura, resultado, formula, escala, unidad){

    var porcentajeResultado = document.getElementById('porcentaje_'+id_metrica);
    porcentajeResultado.innerHTML = resultado + " "
    if(unidad == 'Porcentaje %'){
        porcentajeResultado.innerHTML += "%"
    }
    else{
        porcentajeResultado.innerHTML += unidad
    }

    var elem_formula = document.getElementById('formula_metrica_'+id_metrica);
    elem_formula.innerHTML = formula + " = " + resultado;

    // ejemploCreacionGrafica()
    crearGraficaNavegadores(['Cumple','No cumple'], [resultado, escala[1] - resultado], "grafica_"+id_metrica)

    var tab = document.getElementById('custom-tabs-one-'+abreviatura+'-tab')
    tab.innerHTML = abreviatura + ' - Resultado';

    $('#formulario-'+id_metrica).css({
        'display': 'none'
    });
    $('#resultado-'+id_metrica).css({
        'display': ''
    });
}

function mostrarResultadoCaracteristica(id_caracteristica, resultado, formula, metricas){
    var porcentajeResultado = document.getElementById('porcentaje_caracteristica_'+id_caracteristica);
    porcentajeResultado.innerHTML = resultado + " %"

    const listaMetricas = document.getElementById('lista_metricas');
    listaMetricas.innerHTML = '';

    metricas.forEach(metrica => {
        var valor = "";
        if(typeof metrica.abreviatura !== 'undefined'){
            valor = metrica.abreviatura
        }
        else{
            valor = metrica.nombre
        }
        const li = document.createElement('li');
        li.innerHTML = '<strong>'+valor+'</strong>';
        listaMetricas.appendChild(li);
    });

    var elem_formula = document.getElementById('formula_caracteristica_'+id_caracteristica);
    elem_formula.innerHTML = formula + " = " + resultado;

    // ejemploCreacionGrafica()
    crearGraficaNavegadores(['Cumple','No cumple'], [resultado, 100 - resultado], "grafica_caracteristica_"+id_caracteristica)

    $('#resultado_caracteristica_info').css({
        'display': 'none'
    });
    $('#resultado_caracteristica').css({
        'display': ''
    });
}

// Evento para cerrar otros submenús al abrir uno nuevo
$('.sidebar-container .has-treeview > .nav-link').on('click', function() {
    $('.sidebar-container .has-treeview').not($(this).parent()).removeClass('menu-open menu-is-opening');
    $('.sidebar-container .has-treeview').not($(this).parent()).children('.nav-treeview').hide();
});

function analizarPagina(){
    window.location.href = '/analizarPagina';
}

const chartInstances = {};

function crearGraficaNavegadores(labels = [], valores = [], grafica = "") {
    const ctx = document.getElementById(grafica).getContext('2d');

    // Destruir la instancia existente si la hay para esta gráfica específica
    if (chartInstances[grafica]) {
        chartInstances[grafica].destroy();
    }

    chartInstances[grafica] = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: valores,
                backgroundColor: ['#00a65a', '#f56954'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: false,
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let label = context.label || '';
                            if (label) {
                                label += ': ';
                            }
                            label += context.formattedValue;
                            return label;
                        }
                    }
                }
            },
        }
    });
}

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
                validarCaracteristica(response.id_caracteristica, "subcaracteristica")

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

function validarCaracteristica(id_caracteristica,tipo){

        $.ajax({
            url: '/validarCalculoCaracteristica',
            type: 'POST',
            data: {'id_caracteristica':id_caracteristica,'token': localStorage.getItem('evaluacionToken'), 'tipo':tipo},
            dataType: 'json',
            success: function(response) {
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
    $.ajax({
        url: '/calcularValorCaracteristica',
        type: 'POST',
        data: {'id_caracteristica':id_caracteristica,'token': localStorage.getItem('evaluacionToken'),'tipo': tipo },
        dataType: 'json',
        success: function(response) {
            if(response.tipo == "subcaracteristica"){
                mostrarResultadoCaracteristica(response.id_caracteristica, response.resultado,
                    response.formula, response.metricas)
            }
            if(response.siguiente_calculo != ""){
                validarCaracteristica(id_caracteristica, response.siguiente_calculo);
            }
            $(document).Toasts('create', {
                    class: 'bg-success',
                    title: '¡Éxito!',
                    subtitle: 'Operación completada',
                    body: 'Se realizo el calculo de la '+tipo+" "+response.nombre_caracteristica,
                    icon: 'fas fa-check-circle',
                    autohide: true,
                    delay: 3000
                });
            if(tipo == 'transparencia'){
                verTransparencia();
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