<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'DTWebEvaluator')</title>

     <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->

    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="logo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">DTWebEvaluator</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" onclick="inicio()">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="content-wrapper bg-image" id="contenidoPrincipal">
                @yield('contenido')
            </div>
        </main>

        <footer class="main-footer">
            <div class="container">
                <div class="float-right d-none d-sm-inline">
                    <a href="#">Políticas de privacidad</a> | 
                    <a href="#">Términos de uso</a>
                </div>
                <strong>Copyright &copy; 2024 DTWebEvaluator.</strong> Todos los derechos reservados.
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
    @stack('scripts')
    <script>
    function inicio(){
        window.location.href = '/';
    }
    </script>
    @yield('scripts')
</body>
</html>