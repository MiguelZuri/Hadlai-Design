@extends('layouts.app')
@section('content')

<div class="jumbotron" style="background-color:#1e1e2e !important; border: 1px solid #d94fd3;">
  <h1 class="display-4">HADLAI DESIGN</h1>
  <h2 class="display-4">Tienda de Diseño</h2>
  <p class="lead">La escencia del diseño en la creación de muebles y ambientación</p>
  <hr class="my-4" style="border: 1px solid #e04ecc">
  <a class="btn btn-primary btn-lg" href="{{ route('/') }}" role="button">Vamos al Inicio</a>
</div>

@endsection