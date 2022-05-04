<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Alcohol Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <link href="./main.css" rel="stylesheet">
</head>

<body class="bg-red-50 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-orange-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        Alcohol Blog
                    </a>
                </div>
                <div class="">
                    <form class="d-flex" method="post" action="{{ url('/search_post') }}">
                        @csrf
                        <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
                            <input
                                class="form-control inline-block relative flex-auto min-w-0 block px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                type="search" placeholder="Search" name="search" aria-label="Search">
                            <button
                                class="btn inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-700 hover:shadow-lg focus:bg-yellow-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                                type="submit" name="submit">Search</button>
                        </div>
                    </form>
                </div>

                <nav class="space-x-4 text-gray-50 text-sm sm:text-base">
                    <a class="no-underline hover:underline" href="/">Home</a>

                    <a class="no-underline hover:underline" href="/blog">Blog</a>

                    <a class="no-underline hover:underline" href="/about">About us</a>

                    <a class="no-underline hover:underline" href="/support">Support</a>
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline"
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <a class="no-underline hover:underline" href="/alcoholFacts">Alcohol Facts</a>
                        <span>{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}" class="no-underline hover:underline"
                            onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>

</html>
