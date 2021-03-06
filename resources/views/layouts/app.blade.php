<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/title-logo.png')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    @yield('style')
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <a class="navbar-brand pl-5 " href="{{ url('/') }}">
                <img src="{{asset('assets/logo.png')}}" alt="" width="118px" height="40px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto wow fadeIn">
                        <li class="nav-item">
                            <a class="nav-link text-dark pl-5" href="/category">Kelas</a>
                        </li>
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" >
                                    <a class="nav-link" id="login-wrapper"  href="{{ route('login') }}">{{ __('Masuk') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item" >
                                    <a class="nav-link" id="register-wrapper" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->is_admin)
                                        <a class="dropdown-item" href="/add-course">
                                            Add Course
                                        </a>
                                        <a class="dropdown-item" href="/add-category">
                                            Add Category
                                        </a>
                                        <a class="dropdown-item" href="/manage-course">
                                            Manage Course & Category
                                        </a>
                                        
                                    @else
                                        <a class="dropdown-item" href="/dashboard">
                                            Dashboard
                                        </a>
                                        <a class="dropdown-item" href="/mycart">
                                            My Cart
                                        </a>
                                    @endif
                                    
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>

        <div id="footer">
            <div class="d-flex justify-content-between align-items-center">
                <img id="footer-logo" src="{{asset('assets/logo.png')}}" alt="" width="118px" height="40px">
                <div id="footer-desc" class="d-flex justify-content-between">
                    <div id="footer-list">
                        <h2>ISkill</h2>
                        <p>Tentang Kami</p>
                        <p>Blog</p>
                    </div>
                    <div id="footer-list">
                        <h2>Layanan</h2>
                        <p>Kelas</p>
                        <p>Kerja</p>
                        <p>Notes</p>
                        <p>Podomoro Timer</p>
                    </div>
                    <div id="footer-list">
                        <h2>Bantuan dan Panduan</h2>
                        <p>Syarat dan Ketentuan</p>
                        <p>Kebijakan Privasi</p>
                        <p>Bantuan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>new WOW().init();</script>
    @yield('script')
</body>
</html>
