@extends('layouts.app')

@section('body')
    @section('sidebar')
        <p>This is sidebar.</p>
        @yield('test')
    @show

    @yield('content') 
@endsection