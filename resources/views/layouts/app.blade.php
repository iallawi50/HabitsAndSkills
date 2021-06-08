<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'عاداتي ومهاراتي') }}</title>
    <meta name="description" 
    content="موقع يساعدك على اكتساب العادات والمهارات المفيدة والتخلص من العادات السيئة في 40 يوماً">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/logo.png" type="image/x-icon">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="/css/custom.css"> --}}
    <style>
        .header-font {
            font-family: 'El Messiri', sans-serif;
            font-size: 1.5rem;
        }
        a,a:hover {
            text-decoration: none;
            color: black;
        }

        .text-font {
            font-family: 'Changa', sans-serif;

        }

        .card, .card-header {
            font-family: 'Changa', sans-serif;
            color: black
        }

    </style>
</head>

<body>
    <div id="app" dir="rtl">
        <nav class="navbar navbar-expand-md navbar-light bg-warning shadow-sm">
            <div class="container">
                <a class="navbar-brand header-font font-weight-bold" style="" href="/home">
                    {{ config('app.name', 'عاداتي ومهاراتي') }}
                </a>

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mr-auto text-font">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل دخول') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('إنشاء جديد') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="/about">
                                        حول
                                    </a>

                                    <a class="dropdown-item" href="/home">
                                        عاداتي \ مهاراتي
                                    </a>

                                    <a class="dropdown-item" href="/profile">
                                        الملف الشخصي
                                    </a>

                                    @if (auth()->user()->email == 'aahh50018@gmail.com')
                                    <a class="dropdown-item" href="/dbadmin/show/users">
                                        المستخدمين
                                    </a>
                                    @endif

                                    <hr>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل الخروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>

{{-- 
            <footer>
                
                <div class="card text-dark bg-warning text-center footer">
                    <div class="card-header">شريط التنقل السريع</div>
                    <div class="card-body">
                        <h5 class="card-title">
                            
                            <a href="/about">حول</a>
                            
                            |
                        
                            <a href="/habits">عاداتي ومهاراتي</a>
                            
                            |
                            
                            <a href="/profile">الملف الشخصي</a>
                            
                        </h5>
                        <a target="_blank" href="https://wa.me/966565595718">
                            <p class="card-text">برمجة وتصميم : علي العبدالله</p>
                        </a>
                    </div>
                </div>
            </footer> --}}
        </div>
    </body>
    </html>
    