<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <x-partials.head/>


    </head>
    <body>
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            {{ $slot }}
        </div>
    <footer>
        <div>
            <h2>copyright &copy;</h2>
        </div>
        @yield('content')
    </footer>
        @livewireScripts
    </body>
</html>
