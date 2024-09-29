@extends('Base.Base')

@section('contenido')
<div class="layout-container">
    <div class="sidebar-wrapper">
        <button class="btn btn-primary d-lg-none" id="sidebarToggle">
            <i class="fas fa-bars"></i> Menú
        </button>
        <div class="sidebar-container" id="sidebar">
            <button class="btn btn-secondary d-lg-none close-sidebar" id="closeSidebar">
                <i class="fas fa-times"></i> Cerrar
            </button>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item" id="pagina">
                        <a href="#" class="nav-link active" onclick="analizarPagina()">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>Página web</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview caracteristica">
                        <a href="#" class="nav-link" id="disponibilidad" onclick="verCaracteristica('disponibilidad')">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Disponibilidad
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('confiabilidad')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Confiabilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('portabilidad')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Portabilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('integridad')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Integridad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('accesibilidad')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Accesibilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('privacidad')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Privacidad</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview caracteristica">
                        <a href="#" class="nav-link" id="usabilidad" onclick="verCaracteristica('usabilidad')">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Usabilidad
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('adaptabilidad')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Adaptabilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('legibilidad')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Legibilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('consistencia')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Consistencia</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview caracteristica" >
                        <a href="#" class="nav-link" id="informatividad" onclick="verCaracteristica('informatividad')">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Informatividad
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('concision')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Concision</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('actualidad')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Actualidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('completitud')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Completitud</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview caracteristica" >
                        <a href="#" class="nav-link" id="seguridad" onclick="verCaracteristica('seguridad')">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Seguridad
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('confidencialidad')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Confidencialidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('autenticidad')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Autenticidad</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview caracteristica" >
                        <a href="#" class="nav-link" id="auditabilidad" onclick="verCaracteristica('auditabilidad')">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Auditabilidad
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('verificabilidad')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Verificabilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('trazabilidad')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Trazabilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="verCaracteristica('no repudio')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>No repudio</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview" >
                        <a href="#" class="nav-link" id="transparencia" onclick="verTransparencia()" style="display:none">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Transparencia
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    @yield('formulario')
</div>
<script>
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
        debugger
        const transparencia = document.getElementById('transparencia');
        transparencia.style.display = 'none';
    }

    function mostrarCaracteristicas() {
        const elementos = document.getElementsByClassName('caracteristica');
        for (let i = 0; i < elementos.length; i++) {
            elementos[i].style.display = '';
            id =  elementos[i].id;
        }
        debugger

        if(localStorage.getItem('transparencia')){
            mostrarTransparencia()
        }
    }

    function mostrarTransparencia(){
        const transparencia = document.getElementById('transparencia');
        transparencia.style.display = '';
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
                    debugger
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
debugger
        var porcentajeResultado = document.getElementById('porcentaje_caracteristica_'+id_caracteristica);
        porcentajeResultado.innerHTML = resultado + " %"

        const listaMetricas = document.getElementById('lista_metricas');
        listaMetricas.innerHTML = '';

        metricas.forEach(metrica => {
            debugger
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

    
</script>
@endsection