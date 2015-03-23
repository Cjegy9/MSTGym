<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $title or 'MST Gym' }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{ HTML::style('css/semantic.min.css') }}
    {{ HTML::style('css/main.css') }}
    {{ HTML::style('css/lean-slider.css') }}
    @yield('extra-css', '')
    @yield('inline-css', '')
</head>
<body>
    <div class="containment">
        @include('includes.globals.flash_message')
        <div class="ui page grid">
            @yield('header')
            @yield('main')
            @yield('footer')
        </div>
        {{ HTML::script('javascript/jquery.min.js') }}
        {{ HTML::script('javascript/semantic.min.js') }}
        {{ HTML::script('javascript/lean-slider.min.js') }}
        @yield('extra-js', '')
        @yield('inline-js', '')
    </div>
</body>
</html>