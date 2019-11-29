@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (@isset($products))
                <div class="card-header">Editar Producto</div>
                @else
                <div class="card-header">Agregar Producto</div>
                @endif
                    <div class="card-body">
                        @if (@isset($products))
                        <form  action="{{ route('productos.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PATCH">
                        @else
                        <form action="{{ route('productos.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @endif    
                        @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input required type="text" class="form-control" name="nombre" value="{{ isset($products) ? $products->nombre : '' }}{{ old('nombre') }}"  placeholder="Ingresa el nombre del producto">
                            </div>
                            <div class="form-group">
                                <label for="estilo">Estilo</label>
                                <input required type="text" class="form-control" name="estilo" value="{{ isset($products) ? $products->estilo : '' }}{{ old('estilo  ') }}"  placeholder="Ingresa el estilo del producto">
                            </div>
                            <div class="form-group">
                                <label for="tipo_area">Tipo de Área</label>
                                <input required type="text" class="form-control" name="tipo_area" value="{{ isset($products) ? $products->tipo_area : '' }}{{ old('tipo_area  ') }}"  placeholder="Ingresa el tipo de area del producto">
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input required type="text" class="form-control" name="precio" value="{{ isset($products) ? $products->precio : '' }}{{ old('precio  ') }}"  placeholder="Ingresa el precio del producto">
                            </div>
                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input required type="text" class="form-control" name="cantidad" value="{{ isset($products) ? $products->cantidad : '' }}{{ old('cantidad  ') }}"  placeholder="Ingresa la cantidad del producto">
                            </div>
                            <div class="form-group">
                                <label for="categorias">Categoria</label>
                                <select class="form-control"  name="categoria_id" id="categorias">
                                    @foreach($categorias as $id => $nombre)
                                    <option value="{{ $id }}" >{{ $nombre }}</option> 
                                    @endforeach
                                </select>
                            </div>
                    @if (@isset($products))
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    @else
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    @endif
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection