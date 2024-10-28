<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <link rel="shortcut icon" href="{{ asset('assets/img/icon.ico') }}" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="Sistema reparaciones  y ventas" />
     <title>Reparaciones y ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <!--Barra de navegación--->
    <nav class="navbar navbar-expand-md bg-body-secondary">
        <div class="container-fluid">
            <!---Marca navegación-->
            <a class="navbar-brand" href="{{ route('panel') }}">
                <img src="{{ asset('assets/img/icon.ico') }}" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-top">
                Reparaciones y ventas
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!----Lista de opciones del menú-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('panel') }}">Inicio</a>
                    </li>
                </ul>

                <form class="d-flex" action="{{ route('login') }}" method="get">
                    <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
                </form>

            </div>
        </div>
    </nav>

 
    <br><br>
    <!---Section Ventajas / Desventajas--->
    <div>
        <div class="card border-0 container-fluid">
            <div
                class="card-header text-center text-info border-info fs-5 fw-semibold border-3 rounded-start rounded-end">
                Estimado Cliente...
            </div>
            <div class="card-body">
                <ul class="text-light">
                    <p>¡Te damos la más cordial bienvenida </p>
                </ul>
            </div>
        </div>
        <br>
        <!---Footer--->
        <footer class="text-center text-white">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                Copyright &copy; 2024
            </div>
            <!-- Copyright -->
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>

        <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
 
</body>

</html>
