@extends('layouts.master')

@section('header')
    <header>
        @include('includes.globals.header')
    </header>
@stop

@section('main')
    @yield('content')
@stop

@section('footer')
    @include('includes.globals.footer')
@stop