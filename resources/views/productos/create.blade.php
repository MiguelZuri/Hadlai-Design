@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (@isset($products))
                <h2>Editar articulo</h2>
                @else
                <h2>Registro de articulo</h2>
                @endif
                <div class="card-header">Contacto</div>
                <div class="card-body">
                <form action="{{ url('productos') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingresa el nombre">
                    </div>
                    <div class="form-group">
                        <label for="estilo">Estilo</label>
                        <input type="text" name="estilo" class="form-control" id="estilo" placeholder="Ingresa el estilo">
                    </div>
                    <div class="form-group">
                        <label for="tipo_area">Tipo de Área</label>
                        <input type="text" name="tipo_area" class="form-control" id="tipo_area" placeholder="Ingresa el tipo de area del producto">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" name="precio" class="form-control" id="precio" placeholder="Ingresa el precio del producto">
                    </div>
                    {{-- <div class="form-group">
                        <label for="comentario">Example textarea</label>
                        <textarea name="comentario" class="form-control" id="comentario" rows="3"></textarea>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection