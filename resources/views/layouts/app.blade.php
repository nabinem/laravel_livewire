<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}" />

    @livewireStyles

</head>

<body>
    <div class="container mx-auto">
        @session('error')
            <div class="my-5 text-center">
                <h5 class="text-red-600"> {{ $value }} </h5>
            </div>
        @endsession

        {{ $slot }}
    </div>

    @livewireScripts

    @stack('scripts')
    
</body>

</html>