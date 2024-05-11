<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body class="bg-gray-100 font-sans antialiased">
<body class="bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1613163215609-1f8fe3edc638?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
    
    <div id="app-2">

        @include('layouts.navbar')
        
        <div class="main flex flex-wrap justify-end mt-16">
            
            <div class="content w-full">
                <div class="container mx-auto p-4 sm:p-6">

                    @yield('content')
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>
