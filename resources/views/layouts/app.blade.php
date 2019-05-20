<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')
    <body>
        <div id="app">
            @yield('nav')
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>
