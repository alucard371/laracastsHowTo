@extends('layout')

@section('title')
    Welcome
@endsection

@section('content')
<h1>My first {{ $foo }} website</h1>

    @foreach ($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
@endsection