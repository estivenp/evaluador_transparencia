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
@endsection