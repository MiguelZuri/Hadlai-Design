@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (@isset($categorias))
                <div class="card-header">Editar Categoria</div>
                @else
                <div class="card-header">Agregar Categoria</div>
                @endif
                    <div class="card-body">
                        @if (@isset($categorias))
                        <form  action="{{ route('categorias.update', $categorias->id) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PATCH">
                        @else
                        <form action="{{ route('categorias.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @endif    
                        @csrf
                            <div class="form-group">
                                <label for="nombre">Categoria</label>
                                <input required type="text" class="form-control" name="nombre" value="{{ isset($categorias) ? $categorias->nombre : '' }}{{ old('nombre ') }}"  placeholder="Ingresa el nombre de la categoria">
                            </div>
                            <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <textarea required cols="30" rows="10" class="form-control" name="descripcion" value="{{ isset($categorias) ? $categorias->descripcion : '' }}{{ old('descripcion  ') }}"  placeholder="Ingresa una breve descripcion de la categoria"></textarea>
                                </div>
                            @if (@isset($categorias))
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            @else
                            <button type="submit" class="btn btn-primary">Agregar</button>
                            @endif
                        </form>
                </div>
            </div>
        </div>
</div>

@endsection