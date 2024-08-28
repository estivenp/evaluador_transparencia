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
                    <li class="nav-item">
                        <a href="#" class="nav-link active" onclick="analizarPagina()">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>Página web</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
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
                    <li class="nav-item has-treeview">
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
                    <li class="nav-item has-treeview" >
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
                    <li class="nav-item has-treeview" >
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
                    <li class="nav-item has-treeview" >
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
    $(document).ready(function() {
        function ocultarOpciones(){
            $('#disponibilidad').css({
                    'display': 'none'
                });
            $('#usabilidad').css({
                'display': 'none'
            });
            $('#informatividad').css({
                    'display': 'none'
                });
            $('#seguridad').css({
                'display': 'none'
            });
            $('#auditabilidad').css({
                    'display': 'none'
                });
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

        // ocultarOpciones();
        SidebarSelector();
    });

    // function selectorSidebarItem(itemId) {

    //     // Deseleccionar todos los elementos activos
    //     $('.sidebar-container .nav-link').removeClass('active').css(inactivo);

    //     // Seleccionar el nuevo elemento
    //     let $selectedItem = $('#' + itemId);
    //     $selectedItem.addClass('active').css(activo);

    //     // Si el elemento está en un submenú, aplicar estilos específicos y activar el padre
    //     if ($selectedItem.parent().hasClass('has-treeview')) {
    //         let $parentItem = $selectedItem.parent();
    //         $parentItem.addClass('menu-open menu-is-opening');
    //         $parentItem.children('.nav-treeview').show();
    //         $selectedItem.find('.right').removeClass('fa-angle-left').addClass('fa-angle-down');
    //     } 
    //     else if ($selectedItem.closest('.nav-treeview').length) {
    //         $selectedItem.css(activeSubmenuStyles);
    //         let $parentItem = $selectedItem.closest('.nav-item.has-treeview');
    //         let $parentLink = $parentItem.children('.nav-link');
    //         $parentItem.addClass('menu-open menu-is-opening');
    //         $parentLink.addClass('active').css(activeStyles);
    //         $parentItem.children('.nav-treeview').show();
    //         $parentLink.find('.right').removeClass('fa-angle-left').addClass('fa-angle-down');
    //     }


    //     // Opcional: desplazarse al elemento seleccionado
    //     $selectedItem[0].scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    // }



    function selectorSidebarItem(itemId) {
        // Estilos
        // const inactivo = { color: '#c2c7d0' };
        // const activo = { color: '#fff', backgroundColor: '#007bff' };
        // const activeSubmenuStyles = { color: '#007bff', backgroundColor: 'transparent' };

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
            data: {'nombre':nombre},
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                document.getElementById('contenidoFormulario').innerHTML = response.vista;
                selectorSidebarItem(nombre);
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

    // Evento para cerrar otros submenús al abrir uno nuevo
    $('.sidebar-container .has-treeview > .nav-link').on('click', function() {
        $('.sidebar-container .has-treeview').not($(this).parent()).removeClass('menu-open menu-is-opening');
        $('.sidebar-container .has-treeview').not($(this).parent()).children('.nav-treeview').hide();
    });

    function analizarPagina(){
        window.location.href = '/analizarPagina';
    }
</script>
@endsection