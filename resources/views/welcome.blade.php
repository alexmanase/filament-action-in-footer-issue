<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Filament action in footer issue</title>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
 
        @filamentStyles
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">

        @livewire('list-products')
        
        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
