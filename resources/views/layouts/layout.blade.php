@if (Auth::user()->hasRole('ADMINISTRADOR'))

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title')</title>

        @yield('css')

        <!-- Custom fonts -->
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <link rel="stylesheet" href="{{asset('./css/layout.css')}}">
        <link rel="stylesheet" href="{{asset('./css/dasboard.css')}}">
        <link rel="stylesheet" href="{{asset('./css/tablas.css')}}">
        <link rel="stylesheet" href="{{asset('./css/home.css')}}">



        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('https://kit.fontawesome.com/4977cb8944.css')}}" crossorigin="anonymous">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div class="wrapper" id="wrapper">



            <!-- Nav Item - Pages Collapse Menu -->



            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top ">

                        <img class="logo" src="../img/logoverde.png" alt="">


                        <h2 class="leo_sena_titulo d-inline
                        ">LEO SENA APP</h2>

                        <li style="list-style: none" class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" style="color: #39a900; list-style:none" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>


                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" style="color: #39a900; margin-right: 10px;"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }} <i class="fa-solid fa-door-open"
                                    style="color: #39a900; margin-left: 34px;"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" style="color: #39a900;"  href="{{ route('NewPassword') }}">
                                    {{ __('Actualizar Datos') }}
                                </a>
                            </div>
                        </li>



                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>



                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">


                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                            {{-- <!-- Nav Item - User Information -->
                    <ul class="navbar-nav ms-auto">
                        <a style="margin-top:5px " class="nav-link" href="{{ route('custom.logout') }}">
                            {{ __('logout') }}

                        </a> --}}

                            <!-- Elemento de navegación - Información del usuario -->



                        </ul>

                        </ul>

                    </nav>

                    <div class="sidebar">
                        <div class="cuadro">
                            <a href="/home"><i class="fa-solid fa-house " style="color: #39a900;"></i></a>
                        </div>

                        <div class="cuadro">
                            <a href="/regional"><i class="fa-solid fa-earth-americas" style="color: #39a900;"></i></a>
                        </div>
                        <div class="cuadro">
                            <a href="/centro"><i class="fa-solid fa-building " style="color: #39a900;"></i></a>
                        </div>

                        <div class="cuadro">
                            <a href="/egresado"><i class="fa-solid fa-user-graduate " style="color: #39a900;"></i></a>
                        </div>


                    </div>



                    <!-- End of Topbar -->

                    @yield('contenido')

                    <script src="https://kit.fontawesome.com/4977cb8944.js" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
                    </script>

                    <!-- DataTables scripts -->
                    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

                    <!-- Your other scripts -->
                    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                    <script src="js/sb-admin-2.min.js"></script>
                    <script src="../js/whats.js"></script>
                    <script src="vendor/chart.js/Chart.min.js"></script>
                    <script src="js/demo/chart-area-demo.js"></script>
                    <script src="js/demo/chart-pie-demo.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            @if (session('status') == 'login-successful-admin' && Auth::check() && Auth::user()->hasRole('ADMINISTRADOR'))
                                Swal.fire({
                                    title: 'Bienvenido',
                                    text: '¡Hola, {{ Auth::user()->name }}! Bienvenido como Administrador.',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                });
                            @endif
                        });
                    </script>

                    @yield('js')

    </body>

    </html>
@elseif(Auth::user()->hasRole('REGIONAL'))
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title')</title>

        @yield('css')

        <!-- Custom fonts -->
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <link rel="stylesheet" href="{{asset('./css/layout.css')}}">
        <link rel="stylesheet" href="{{asset('./css/dasboard.css')}}">
        <link rel="stylesheet" href="{{asset('./css/tablas.css')}}">
        <link rel="stylesheet" href="{{asset('./css/home.css')}}">




        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://kit.fontawesome.com/4977cb8944.css" crossorigin="anonymous">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div class="wrapper" id="wrapper">



            <!-- Nav Item - Pages Collapse Menu -->



            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top ">

                        <img class="logo" src="../img/logoverde.png" alt="">


                        <h2 class="leo_sena_titulo">LEO SENA APP</h2>

                        <li style="list-style: none" class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" style="color: #39a900; list-style:none" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>


                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" style="color: #39a900; margin-right: 10px;"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }} <i class="fa-solid fa-door-open"
                                    style="color: #39a900; margin-left: 34px;"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" style="color: #39a900;"  href="{{ route('NewPassword') }}">
                                    {{ __('Actualizar Datos') }}
                                </a>
                            </div>
                        </li>




                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>



                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">


                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                            {{-- <!-- Nav Item - User Information -->
                    <ul class="navbar-nav ms-auto">
                        <a style="margin-top:5px " class="nav-link" href="{{ route('custom.logout') }}">
                            {{ __('logout') }}

                        </a> --}}

                            <!-- Elemento de navegación - Información del usuario -->


                        </ul>

                        </ul>

                    </nav>

                    <div class="sidebar">
                        <div class="cuadro">
                            <a href="/home"><i class="fa-solid fa-house " style="color: #39a900;"></i></a>
                        </div>

                        <div class="cuadro">
                            <a href="/centro"><i class="fa-solid fa-building " style="color: #39a900;"></i></a>
                        </div>

                        <div class="cuadro">
                            <a href="/egresado"><i class="fa-solid fa-user-graduate " style="color: #39a900;"></i></a>
                        </div>




                    </div>



                    <!-- End of Topbar -->

                    @yield('contenido')

                    <script src="https://kit.fontawesome.com/4977cb8944.js" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
                    </script>

                    <!-- DataTables scripts -->
                    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

                    <!-- Your other scripts -->
                    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                    <script src="js/sb-admin-2.min.js"></script>
                    <script src="../js/whats.js"></script>
                    <script src="vendor/chart.js/Chart.min.js"></script>
                    <script src="js/demo/chart-area-demo.js"></script>
                    <script src="js/demo/chart-pie-demo.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            @if (session('status') == 'login-successful-regional' && Auth::check() && Auth::user()->hasRole('REGIONAL'))
                                Swal.fire({
                                    title: 'Bienvenido',
                                    text: '¡Hola, {{ Auth::user()->name }}! Bienvenido como Regional.',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                });
                            @endif
                        });

                    </script>

                    @yield('js')

    </body>

    </html>
@elseif(Auth::user()->hasRole('CENTRO'))
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title')</title>

        @yield('css')

        <!-- Custom fonts -->
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <link rel="stylesheet" href="{{asset('./css/layout.css')}}">
        <link rel="stylesheet" href="{{asset('./css/dasboard.css')}}">
        <link rel="stylesheet" href="{{asset('./css/tablas.css')}}">
        <link rel="stylesheet" href="{{asset('./css/home.css')}}">




        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://kit.fontawesome.com/4977cb8944.css" crossorigin="anonymous">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div class="wrapper" id="wrapper">



            <!-- Nav Item - Pages Collapse Menu -->



            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top ">

                        <img class="logo" src="../img/logoverde.png" alt="">


                        <h2 class="leo_sena_titulo">LEO SENA APP</h2>

                        <li style="list-style: none" class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" style="color: #39a900; list-style:none" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>


                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" style="color: #39a900; margin-right: 10px;"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }} <i class="fa-solid fa-door-open"
                                    style="color: #39a900; margin-left: 34px;"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" style="color: #39a900;"  href="{{ route('NewPassword') }}">
                                    {{ __('Actualizar Datos') }}
                                </a>
                            </div>
                        </li>




                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>



                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">


                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                            {{-- <!-- Nav Item - User Information -->
                    <ul class="navbar-nav ms-auto">
                        <a style="margin-top:5px " class="nav-link" href="{{ route('custom.logout') }}">
                            {{ __('logout') }}

                        </a> --}}

                            <!-- Elemento de navegación - Información del usuario -->


                        </ul>

                        </ul>

                    </nav>

                    <div class="sidebar">
                        <div class="cuadro">
                            <a href="/home"><i class="fa-solid fa-house " style="color: #39a900;"></i></a>
                        </div>

                        <div class="cuadro">
                            <a href="/egresado"><i class="fa-solid fa-user-graduate " style="color: #39a900;"></i></a>
                        </div>




                    </div>



                    <!-- End of Topbar -->

                    @yield('contenido')

                    <script src="https://kit.fontawesome.com/4977cb8944.js" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
                    </script>

                    <!-- DataTables scripts -->
                    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

                    <!-- Your other scripts -->
                    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                    <script src="js/sb-admin-2.min.js"></script>
                    <script src="../js/whats.js"></script>
                    <script src="vendor/chart.js/Chart.min.js"></script>
                    <script src="js/demo/chart-area-demo.js"></script>
                    <script src="js/demo/chart-pie-demo.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            @if (session('status') == 'login-successful-regional' && Auth::check() && Auth::user()->hasRole('REGIONAL'))
                                Swal.fire({
                                    title: 'Bienvenido',
                                    text: '¡Hola, {{ Auth::user()->name }}! Bienvenido como Regional.',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                });
                            @endif
                        });

                    </script>

                    @yield('js')

    </body>

    </html>
@elseif(Auth::user()->hasRole('EGRESADO'))
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title')</title>

        @yield('css')

        <!-- Custom fonts -->
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <link rel="stylesheet" href="{{asset('./css/layout.css')}}">
        <link rel="stylesheet" href="{{asset('./css/dasboard.css')}}">
        <link rel="stylesheet" href="{{asset('./css/tablas.css')}}">
        <link rel="stylesheet" href="{{asset('./css/home.css')}}">





        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://kit.fontawesome.com/4977cb8944.css" crossorigin="anonymous">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div class="wrapper" id="wrapper">



            <!-- Nav Item - Pages Collapse Menu -->



            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top ">

                        <img class="logo" src="../img/logoverde.png" alt="">


                        <h2 class="leo_sena_titulo">LEO SENA APP</h2>


                        <li style="list-style: none" class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" style="color: #39a900; list-style:none" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>


                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" style="color: #39a900; margin-right: 10px;"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }} <i class="fa-solid fa-door-open"
                                    style="color: #39a900; margin-left: 34px;"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" style="color: #39a900;"  href="{{ route('NewPassword') }}">
                                    {{ __('Actualizar Datos') }}
                                </a>
                            </div>
                        </li>





                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>



                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">


                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                            {{-- <!-- Nav Item - User Information -->
                    <ul class="navbar-nav ms-auto">
                        <a style="margin-top:5px " class="nav-link" href="{{ route('custom.logout') }}">
                            {{ __('logout') }}

                        </a> --}}

                            <!-- Elemento de navegación - Información del usuario -->


                        </ul>

                        </ul>

                    </nav>

                    <div class="sidebar">
                        <div class="cuadro">
                            <a href="/home"><i class="fa-solid fa-house " style="color: #39a900;"></i></a>
                          
                            
                        </div>

                        <div class="cuadro">
                            
                          
                        <a href="/posts"><i class="fa-solid fa-pen-to-square" style="color: #39a900;"></i></a>
                            
                        </div>

                    </div>



                    <!-- End of Topbar -->

                    @yield('contenido')

                    <script src="{{asset('https://kit.fontawesome.com/4977cb8944.js')}}" crossorigin="anonymous"></script>
                    <script src="{{asset('https://code.jquery.com/jquery-3.7.0.js')}}"></script>
                    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}"
                    integrity="{{asset('sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4')}}" crossorigin="anonymous">
                    </script>

                    <!-- DataTables scripts -->
                    <script src="{{asset('https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js')}}"></script>
                    <script src="{{asset('https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js')}}"></script>

                    <!-- Your other scripts -->
                    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
                    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
                    <script src="{{asset('../js/whats.js')}}"></script>
                    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
                    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
                    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
                    <script src="{{asset('https://cdn.jsdelivr.net/npm/sweetalert2@10')}}"></script>
                    <script>
                          document.addEventListener('DOMContentLoaded', function() {
                            @if (session('status') == 'login-successful-egresado' && Auth::check() && Auth::user()->hasRole('EGRESADO'))
                                Swal.fire({
                                    title: 'Bienvenido',
                                    text: '¡Hola, {{ Auth::user()->name }}! Bienvenido como Egresado.',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                });
                            @endif
                        });
                    </script>


                    @yield('js')

    </body>

    </html>
@endif
