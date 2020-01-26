<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="font-serif">
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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-page theme-light">
    <div id="app">
        <nav class="bg-header">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center py-2">
                    <h1>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <svg id="logoipsum" data-name="logoipsum" xmlns="http://www.w3.org/2000/svg" width="200px" viewBox="25 25 130 50" class="text-default-700 relative">
                                <title>logoipsum-2</title>
                                <g class="fill-current">
                                <path d="M53.73,45.71c.36,0,.48.13.48.48v7.92h4.07c.35,0,.48.13.48.48v.7c0,.35-.13.48-.48.48H52.92c-.35,0-.49-.13-.49-.48v-9.1c0-.35.14-.48.49-.48Z"/>
                                <path d="M62.31,49.2c0-2.31,1.46-3.7,4-3.7s4,1.39,4,3.7v3.08c0,2.31-1.47,3.7-4,3.7s-4-1.39-4-3.7Zm6.32,0c0-1.3-.81-2-2.27-2s-2.26.71-2.26,2V52.3c0,1.31.8,2,2.26,2s2.27-.72,2.27-2Z"/>    
                                <path d="M82.22,50.26c.39,0,.48.13.48.48v1.9A3,3,0,0,1,81.64,55a4.36,4.36,0,0,1-3,.94c-2.59,0-4-1.39-4-3.7v-3.1c0-2.28,1.46-3.68,4-3.68,2,0,3.3.79,3.85,2.37a.43.43,0,0,1-.3.62l-.78.27c-.34.12-.48.05-.6-.3a2.06,2.06,0,0,0-2.17-1.3c-1.47,0-2.27.71-2.27,2V52.3c0,1.31.81,2,2.27,2S81,53.63,81,52.65v-.74H78.83c-.36,0-.49-.14-.49-.49v-.68c0-.35.13-.48.49-.48Z"/>
                                <path d="M86.83,49.2c0-2.31,1.46-3.7,4-3.7s4,1.39,4,3.7v3.08c0,2.31-1.47,3.7-4,3.7s-4-1.39-4-3.7Zm6.31,0c0-1.3-.81-2-2.26-2s-2.27.71-2.27,2V52.3c0,1.31.81,2,2.27,2s2.26-.72,2.26-2Z"/>
                                <path d="M99.54,46c0-.22.07-.29.29-.29h.46c.22,0,.27.07.27.29v9.48c0,.22,0,.29-.27.29h-.46c-.22,0-.29-.07-.29-.29Z"/>
                                <path d="M109.67,45.71a3.14,3.14,0,1,1,0,6.28h-3v3.49c0,.22-.05.29-.26.29h-.47c-.21,0-.29-.07-.29-.29V46c0-.22.08-.29.29-.29ZM109.58,51a2.18,2.18,0,1,0,0-4.36h-3V51Z"/>
                                <path d="M120.62,45.51a3.61,3.61,0,0,1,3.72,2.18c.08.16,0,.29-.16.37l-.44.2c-.18.07-.25.06-.36-.13a2.72,2.72,0,0,0-2.76-1.64c-1.69,0-2.61.67-2.61,1.87a1.52,1.52,0,0,0,1.27,1.54,6.79,6.79,0,0,0,1.66.32,6.88,6.88,0,0,1,2,.41A2.25,2.25,0,0,1,124.5,53c0,1.87-1.36,3-3.86,3a3.61,3.61,0,0,1-3.83-2.43.27.27,0,0,1,.17-.38l.44-.16a.27.27,0,0,1,.36.17A2.86,2.86,0,0,0,120.64,55c1.89,0,2.82-.66,2.82-2a1.49,1.49,0,0,0-1.17-1.53,7,7,0,0,0-1.59-.28l-1.08-.14a9.5,9.5,0,0,1-1-.27,2.63,2.63,0,0,1-.89-.47,2.44,2.44,0,0,1-.8-1.91C117,46.65,118.31,45.51,120.62,45.51Z"/>
                                <path d="M129.89,52.35a2.78,2.78,0,0,0,5.55,0V46c0-.22.07-.29.29-.29h.46c.22,0,.29.07.29.29v6.34c0,2.27-1.34,3.64-3.81,3.64s-3.81-1.37-3.81-3.64V46c0-.22.07-.29.28-.29h.47c.21,0,.28.07.28.29Z"/>
                                <path d="M150.28,45.71c.22,0,.29.07.29.29v9.48c0,.22-.07.29-.29.29h-.42c-.21,0-.28-.07-.28-.29V49.71a18.55,18.55,0,0,1,.17-2.51h-.06a18,18,0,0,1-1.09,2.21l-2.15,3.79a.35.35,0,0,1-.33.22h-.28a.37.37,0,0,1-.34-.22l-2.18-3.83a16.07,16.07,0,0,1-1-2.18h-.06a21.76,21.76,0,0,1,.16,2.53v5.76c0,.22-.07.29-.29.29h-.39c-.22,0-.29-.07-.29-.29V46c0-.22.07-.29.29-.29h.36a.4.4,0,0,1,.4.23L146,52.16,149.48,46c.11-.21.17-.24.39-.24Z"/>
                                </g>
                                <path d="M35.94,53.55v7.23a1,1,0,0,1-2.09,0V53.56a1.77,1.77,0,0,0,1,.34A1.72,1.72,0,0,0,35.94,53.55Zm8.9-2.09a1,1,0,0,0-1,1v1.26a1,1,0,1,0,2.09,0V52.51A1,1,0,0,0,44.84,51.46ZM31.58,56.29a1.8,1.8,0,0,1-1-.34V63.2a1.05,1.05,0,0,0,2.1,0V56A1.83,1.83,0,0,1,31.58,56.29Zm10-7a1,1,0,0,0-1.05,1v5.57a1.05,1.05,0,1,0,2.1,0V50.36A1,1,0,0,0,41.53,49.31Zm-3.32,2.14a1.83,1.83,0,0,1-1.05-.34v7.27a1.05,1.05,0,1,0,2.1,0V51.1A1.77,1.77,0,0,1,38.21,51.45ZM29.31,57V36.69a.94.94,0,0,0-.94-.93h-.22a.94.94,0,0,0-.94.93V57a.94.94,0,0,0,.94.94h.22A.94.94,0,0,0,29.31,57Zm2.38-1.48h-.22a.94.94,0,0,1-.94-.94V39.11a.94.94,0,0,1,.94-.93h.22a.94.94,0,0,1,.94.93V54.6A.94.94,0,0,1,31.69,55.54ZM35,53.14h-.23a.93.93,0,0,1-.93-.93V41.51a.93.93,0,0,1,.93-.94H35a.94.94,0,0,1,.93.94v10.7A.93.93,0,0,1,35,53.14Zm3.31-2.45H38.1a.94.94,0,0,1-.94-.93V44A.94.94,0,0,1,38.1,43h.22a.94.94,0,0,1,.94.94v5.8A.94.94,0,0,1,38.32,50.69Zm3.32-2.15h-.22a.94.94,0,0,1-.94-.94V46.11a.94.94,0,0,1,.94-.93h.22a.94.94,0,0,1,.94.93V47.6A.94.94,0,0,1,41.64,48.54Z" style="fill:#5533ff"/>
                            </svg>
                            
                        </a>
                    </h1>
                    <div>
                        <!-- Right Side Of Navbar -->
                        <div class="flex items-center ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                    <a class="nav-link text-default-500" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="nav-link text-default-500" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                <theme-switcher></theme-switcher>                               

                                <a id="navbarDropdown"
                                    class="flex items-center text-default-500 text-sm"
                                    href="#" role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    v-pre>
                                    <img width="35"
                                        class="rounded mr-3"
                                        src="{{ gravatar_url(auth()->user()->email) }}">
                                    {{ Auth::user()->name }} 
                                </a>

                                {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-default-500" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div> --}}
                            @endguest
                            </div>
                    </div>
                </div>
            </div>
        </nav>

        <main class="container mx-auto py-4 px-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
