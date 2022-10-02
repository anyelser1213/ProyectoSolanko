<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Choices CSS-->
    <link rel="stylesheet" href="{{ asset('template/vendor/choices.js/public/assets/styles/choices.min.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('template/css/style.default.css') }}">

    <!-- Datatable -->
    <link href="{{ asset('css/libreria/jquery.dataTables.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/administrador.css').'?v='.time() }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="{{ (url()->current() == route('home'))? '' : 'divLogin' }}">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Solanko
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @if(App::isLocale('en'))
                                    <img src="{{ asset('images/icon/english.png') }}" alt="English" class="icon-lang selectLang" loading="lazy"> 
                                @else
                                    <img src="{{ asset('images/icon/spanish.png') }}" alt="Spanish" class="icon-lang selectLang" loading="lazy"> 
                                @endif
                            </a>
                            <ul class="dropdown-menu">
                                <li class="disabled liLang"><img src="{{ asset('images/icon/language.png') }}" class="icon-lang me-2" alt="language"> {{ __('variable.lenguaje') }}</li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('locale.setting', 'en') }}"><img src="{{ asset('images/icon/english.png') }}" class="icon-lang me-2" alt="English" loading="lazy"> English</a></li>
                                <li><a class="dropdown-item" href="{{ route('locale.setting', 'es') }}"><img src="{{ asset('images/icon/spanish.png') }}" class="icon-lang me-2" alt="Spanish" loading="lazy"> Spanish</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->nombre }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="page-content d-flex align-items-stretch"> 
            <!-- Side Navbar -->
            
            <nav class="side-navbar z-index-40 py-4">
                <!-- Sidebar Navidation Menus-->
                <span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Principal</span>
                <ul class="list-unstyled py-4">

                    <li class="sidebar-item <?php echo menu_anchor(url('/dashboard')); ?>">
                        <a class="sidebar-link" href="{{route('dashboard')}}"> 
                            <i class="fas fa-home me-xl-2"></i> Dashboard 
                        </a>
                    </li>




                    <li class="sidebar-item <?php echo menu_anchor(url('/role')); ?>">
                        <a class="sidebar-link" href="#menu-role" data-bs-toggle="collapse"> 
                        <i class="fas fa-user-tag me-xl-2"></i>
                            {{ __('variable.role') }}  
                        </a>
                        <ul class="collapse list-unstyled <?php echo menu_anchor(url('/role')); ?>" id="menu-role">
                            <li><a class="sidebar-link" href="{{route('role.crear')}}">{{ __('variable.crear_role') }} </a></li>
                            <li><a class="sidebar-link" href="{{route('role.listado')}}">{{ __('variable.listado_role') }} </a></li>
                        </ul>
                    </li>



                    <li class="sidebar-item <?php echo menu_anchor(url('/usuario')); ?>" id="menu-user">
                        <a class="sidebar-link" href="#menu-usuario" data-bs-toggle="collapse"> 
                        <i class="fas fa-user me-xl-2"></i>
                            {{ __('variable.usuarios') }} 
                        </a>
                        <ul class="collapse list-unstyled <?php echo menu_anchor(url('/usuario')); ?>" id="menu-usuario">
                            <li><a class="sidebar-link" href="{{route('usuario.crear')}}">{{ __('variable.crear_usuario') }} </a></li>
                            <li><a class="sidebar-link" href="{{route('usuario.listado')}}">{{ __('variable.listado_usuario') }} </a></li>
                        </ul>
                    </li>


                    

                    


                    <li class="sidebar-item <?php echo menu_anchor(url('/marca')); ?>">
                        <a class="sidebar-link" href="#menu-marca" data-bs-toggle="collapse"> 
                        <i class="fas fa-user-tag me-xl-2"></i>
                            {{ __('variable.marca') }}  
                        </a>
                        <ul class="collapse list-unstyled <?php echo menu_anchor(url('/marca')); ?>" id="menu-marca">
                            <li><a class="sidebar-link" href="{{route('role.crear')}}">{{ __('variable.crear_marca') }} </a></li>
                            <li><a class="sidebar-link" href="{{route('role.listado')}}">{{ __('variable.listado_marcas') }} </a></li>
                        </ul>
                    </li>


                    <li class="sidebar-item <?php echo menu_anchor(url('/modelo')); ?>">
                        <a class="sidebar-link" href="#menu-modelo" data-bs-toggle="collapse"> 
                        <i class="fas fa-user-tag me-xl-2"></i>
                            {{ __('variable.modelo') }}  
                        </a>
                        <ul class="collapse list-unstyled <?php echo menu_anchor(url('/modelo')); ?>" id="menu-modelo">
                            <li><a class="sidebar-link" href="{{route('role.crear')}}">{{ __('variable.crear_modelo') }} </a></li>
                            <li><a class="sidebar-link" href="{{route('role.listado')}}">{{ __('variable.listado_modelos') }} </a></li>
                        </ul>
                    </li>


                    <li class="sidebar-item <?php echo menu_anchor(url('/tipo_combustible')); ?>">
                        <a class="sidebar-link" href="#menu-tipo_combustible" data-bs-toggle="collapse"> 
                        <i class="fas fa-user-tag me-xl-2"></i>
                            {{ __('variable.tipo_combustible') }}  
                        </a>
                        <ul class="collapse list-unstyled <?php echo menu_anchor(url('/tipo_combustible')); ?>" id="menu-tipo_combustible">
                            <li><a class="sidebar-link" href="{{route('role.crear')}}">{{ __('variable.crear_tipo_combustible') }} </a></li>
                            <li><a class="sidebar-link" href="{{route('role.listado')}}">{{ __('variable.listado_tipo_combustibles') }} </a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item <?php echo menu_anchor(url('/yates')); ?>">
                        <a class="sidebar-link" href="#menu-yates" data-bs-toggle="collapse"> 
                        <i class="fas fa-user-tag me-xl-2"></i>
                            {{ __('variable.yates') }}  
                        </a>
                        <ul class="collapse list-unstyled <?php echo menu_anchor(url('/yates')); ?>" id="menu-yates">
                            <li><a class="sidebar-link" href="{{route('role.crear')}}">{{ __('variable.crear_yate') }} </a></li>
                            <li><a class="sidebar-link" href="{{route('role.listado')}}">{{ __('variable.listado_yates') }} </a></li>
                        </ul>
                    </li>


                </ul>
            </nav>
            <section class="section-main w-100">
                @yield('content')
            </section>
        </div>
    </div>

    <param id="excelente" value="{{ __('variable.excelente') }}  ">
    <param id="sLengthMenu" value="{{ __('variable.sLengthMenu') }}  ">
    <param id="sZeroRecords" value="{{ __('variable.sZeroRecords') }}  ">
    <param id="sEmptyTable" value="{{ __('variable.sEmptyTable') }}  ">
    <param id="sInfo" value="{{ __('variable.sInfo') }}  ">
    <param id="sInfoEmpty" value="{{ __('variable.sInfoEmpty') }}  ">
    <param id="sInfoFiltered" value="{{ __('variable.sInfoFiltered') }}  ">
    <param id="sSearch" value="{{ __('variable.sSearch') }}  ">
    <param id="sLoadingRecords" value="{{ __('variable.sLoadingRecords') }}  ">
    <param id="sFirst" value="{{ __('variable.sFirst') }}  ">
    <param id="sLast" value="{{ __('variable.sLast') }}  ">
    <param id="sNext" value="{{ __('variable.sNext') }}  ">
    <param id="sPrevious" value="{{ __('variable.sPrevious') }}  ">

    <!-- Scripts -->
    <script src="{{ asset('js/libreria/jquery.min.js') }}"></script>

    <!-- sweetalert -->
    <script ript src="{{ asset('js/libreria/sweetalert.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('js/libreria/jquery.dataTables.min.js') }}"></script>

    <!-- Script -->
    <script src="{{ asset('js/administrador.js').'?v='.time() }}" defer></script>


    @if (Session::has('success'))
        <script>
            Swal.fire(
                $('#excelente').val(),
                '{{Session::get("success") }}',
                'success'
            );
        </script>
    @endif 
</body>
</html>
