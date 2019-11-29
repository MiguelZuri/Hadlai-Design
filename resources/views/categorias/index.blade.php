@extends('layouts.app')
@section('content')
@if(session('message'))
<div class="alert alert-success">
  <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
    <i class="tim-icons icon-simple-remove"></i>
  </button>
  <span><b> Success - </b> {{session('message')}}</span>
</div>
@endif

<div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="tools float-right">
          <div class="dropdown">
            <button type="button" class="btn btn-default dropdown-toggle btn-link btn-icon" data-toggle="dropdown">
              <i class="tim-icons icon-settings-gear-63"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <a class="dropdown-item text-danger" href="#">Remove Data</a>
            </div>
          </div>
        </div>
        <h4 class="card-title">Simple Table</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive ps">
          <table class="table">
            <thead class="text-primary">
              <tr>
                <th class="col-1 text-center">
                  #
                </th>
                <th class="col-1 text-left">
                    Nombre
                </th>
                <th class="col-1 text-left">
                    Descripción
                </th>
                <th class="col-1 text-left">
                    Opciones
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
              <tr>
                <td class="text-center">
                    {{ $categoria->id }}
                  {{-- <div class="photo">
                    <img src="https://black-dashboard-pro-laravel.creative-tim.com/black/img/tania.jpg" alt="Table image">
                  </div> --}}
                </td>
                <td>
                    {{ $categoria->nombre }}
                </td>
                <td class="">
                        {{ $categoria->descripcion }}
                </td>
                <td class="text-left">
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                        <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon " data-original-title="Refresh" title="">
                            <a href="{{ route('categorias.edit', $categoria->id) }}"><i class="tim-icons icon-pencil"></i></a>
                        </button>
                          @csrf
                          @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger btn-link btn-sm " data-original-title="Delete" title="">
                          <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </form>        
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
        <a href="{{ route('categorias.create') }}" type="button" class="btn btn-primary">Registrar categoria</a>
    </div>
  </div>

@endsection