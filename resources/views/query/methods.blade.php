@extends('layout')

@section('content')
    <div class="container">
        <h1 class="page-header">{{ $title }}</h1>
        <table class="table table-hover table-striped">
            <thead>
                @include('partials.head-users')
            </thead>
            <tbody>
                @include('partials.list-users');
            </tbody>
        </table>
    </div>
@stop
