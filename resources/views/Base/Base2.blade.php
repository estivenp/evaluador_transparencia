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
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>Página web</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview" id="disponibilidad">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Disponibilidad
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Confiabilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Portabilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Integridad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Accesibilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Privacidad</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview" id="usabilidad">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Usabilidad
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Adaptabilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Legibilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Consistencia</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview" id="informatividad">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Informatividad
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Consicion</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Actualidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Completitud</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview" id="seguridad">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Seguridad
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Confidencialidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Autenticidad</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview" id="auditabilidad">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Auditabilidad
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Verificabilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Trazabilidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
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
        function handleSidebarSelection() {
            $('.sidebar-container .nav-link').on('click', function(e) {
                e.preventDefault();
                let active = {
                    'background-color': '#007bff',
                    'color': '#ffffff'
                }
                $('.sidebar-container .nav-link').removeClass('active').css({
                    'background-color': '',
                    'color': ''
                });
                
                $(this).addClass('active').css(active);
                
                if ($(this).closest('.nav-treeview').length) {
                    let parentLink = $(this).closest('.nav-item.has-treeview').children('.nav-link');
                    parentLink.addClass('active').css(active);
                }
                
                if ($(this).closest('.nav-treeview').length) {
                    $(this).css({
                        'background-color': '#007bff91',
                        'color': '#ffffff'
                    });
                }
            });
        }
        // ocultarOpciones();
        handleSidebarSelection();
    });
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
</script>
@endsection