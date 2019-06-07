@extends('templates.withsidebar')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is content.</p>
@endsection


@section('test')
    <p>This is test.</p>
@endsection
