@extends('layouts.app')
@section('content')

<div class="container">
    <table class="table table-bordered table-dark">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Estilo</th>
            <th scope="col">Tipo de Area</th>
            <th scope="col">Precio</th>
            <th scope="col">Fecha de creación</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nombre }}</td>
                <td>{{ $product->estilo }}</td>
                <td>{{ $product->tipo_area }}</td>
                <td>{{ $product->precio }}</td>
                <td>{{ $product->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
</div>
    
@endsection