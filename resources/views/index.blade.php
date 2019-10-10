@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4 text-center">Productos</h1>
        <div class="row text-center">
            <div class="col-6">
                <a href="{{route('lista-productos')}}" class="btn btn-primary btn-lg" role="button">Tabla productos</a>
            </div>
            <div class="col-6">
                <a href="{{route('ProductController@create')}}" class="btn btn-secondary btn-lg" role="button">Registro Productos</a>
            </div>
        </div>
    </div>
</div>

@endsection