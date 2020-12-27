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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js" charset="utf-8"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <x-navigation>
        @guest
          <a href="{{ route('login') }}">{{ __('Login') }}</a>
          <a href="{{ route('register') }}">{{ __('Register') }}</a>
        @else
          <x-auth-dropdown>
            <a href="{{ route('home') }}">{{ __('Dashboard') }}</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
          </x-auth-dropdown>
        @endguest
      </x-navigation>
      <div class="flex h-screen">
        <aside class="w-64 bg-gray-800">
          <form class="" action="index.html" method="post">
            <label for="search" class="hidden">Search</label>
            <input type="search" name="" value="" placeholder="Search .." class="block placeholder-purple-500 text-purple-500 w-full px-8 py-3 bg-gray-900 text-sm font-light border-b border-gray-900 focus:outline-none focus:border-purple-600">
          </form>
          <nav class="py-4">
            <div class="px-8 pb-2">
              <h4 class="text-xs uppercase text-gray-500 font-light">General</h4>
            </div>
            <a href="#" class="block w-full text-gray-300 hover:text-purple-600 transform px-8 py-2 font-light text-sm"><i class="fas fa-tachometer-alt pr-3 hover:text-purple-500"></i>Dashboard</a>
          </nav>
          <nav class="pt-2">
            <div class="px-8 pb-2">
              <h4 class="text-xs uppercase text-gray-500 font-light">User Management</h4>
            </div>
            <a href="#" class="block w-full text-gray-300 hover:text-purple-600 transform px-8 py-2 font-light text-sm"><i class="fas fa-users pr-3 hover:text-purple-500"></i>Users</a>
            <a href="#" class="block w-full text-gray-300 hover:text-purple-600 transform px-8 py-2 font-light text-sm"><i class="fas fa-briefcase pr-3 hover:text-purple-500"></i>Roles</a>
            <a href="#" class="block w-full text-gray-300 hover:text-purple-600 transform px-8 py-2 font-light text-sm"><i class="fas fa-lock pr-3 hover:text-purple-500"></i>Permissions</a>
          </nav>
        </aside>
        <main class="flex-1">
          @yield('content')
        </main>
      </div>
    </div>
</body>
</html>
