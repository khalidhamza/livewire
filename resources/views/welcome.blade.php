<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire</title>
    </head>
    <body>
        {{-- <livewire:read-message /> --}}
        {{-- <livewire:actions /> --}}
        {{-- @livewire('actions') --}}
        @livewire('properties')
    </body>
</html>
