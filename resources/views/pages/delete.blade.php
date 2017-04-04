@extends('layout')

@section('content')
    <div>
        <p class="alert alert-success">
            El usuario se eliminó correctamente
            <a href="{{ route('home') }}"> Ir al Home </a>
        </p>
    </div>
@stop
