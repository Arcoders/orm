@extends('layout')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Curso Eloquent ORM</h1>
            <p>Texto</p>
        </div>
    </div>

    <div class="container">
        <h1 class="page-header">Ultimos usuarios registrados</h1>
        <table class="table table-hover table-striped">
            <thead>
                @include('partials.head-users')
            </thead>
            <tbody>
                @include('partials.list-users')
            </tbody>
        </table>
    </div>

@stop
