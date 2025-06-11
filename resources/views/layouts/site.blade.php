<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">    
    
    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])   
    
    </head>
    <body class="font-sans antialiased" x-data="{ show: false }" style="background-image: url({{ asset('images/Bandeira.png') }}); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">        

        <div>  
            @include('layouts.navegacao')
        </div>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @include('layouts.footer')

        <div>
            {{ $dialog ?? '' }}
        </div>
    </body>
</html>