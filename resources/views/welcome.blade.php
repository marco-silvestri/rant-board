<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/flexmasonry/dist/flexmasonry.css">
        <script src="https://unpkg.com/flexmasonry/dist/flexmasonry.js"></script>

        @livewireStyles

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="flex items-center justify-center">
            <div x-data 
            x-init="FlexMasonry.init('.grid');" 
            class="w-4/6 grid">
            @foreach (\App\Models\Message::all() as $message)
                <livewire:rant :message='$message' />
            @endforeach
        </div>
        </div>
    @livewireScripts
    </body>
</html>
