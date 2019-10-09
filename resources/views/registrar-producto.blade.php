@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contacto</div>
                <div class="card-body">
                <form action="{{ route('registrar-producto') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre del Producto</label>
                        <input type="text" name="nombre" class="form-control" id="correo" placeholder="Ingresa el nombre">
                    </div>
                    <div class="form-group">
                        <label for="estilo">Nombre del Producto</label>
                        <input type="text" name="estilo" class="form-control" id="correo" placeholder="Ingresa el estilo">
                    </div>
                    <div class="form-group">
                        <label for="tipo_area">Nombre del Producto</label>
                        <input type="text" name="tipo_area" class="form-control" id="correo" placeholder="Ingresa el tipo de area del producto">
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