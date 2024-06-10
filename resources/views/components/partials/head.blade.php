<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">



<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<!-- Scripts -->
<script src="{{ asset('assets/js/main.js') }}" defer></script>
<script src="{{ asset('assets/js/drop-down.js') }}" defer></script>


@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Styles -->
@livewireStyles

<title>@yield('title', 'Blog')</title>
