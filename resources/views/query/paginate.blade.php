@extends('layout')

@section('content')
    <div class="container">
        <h1 class="page-header">Paginate Eloquent</h1>
        <p>
            {{ $users->total() }} Registros
            {{ $users->currentPage() }} Página actual de
            {{ $users->lastPage() }}
        </p>
        <table class="table table-hover table-striped">
            <thead>
                @include('partials.head-users')
            </thead>
            <tbody>
                @include('partials.list-users');
            </tbody>
        </table>
        {!! $users->render() !!}
    </div>
@stop
