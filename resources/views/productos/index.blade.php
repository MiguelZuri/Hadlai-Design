@extends('layouts.app')
@section('content')
    
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
                <th scope="col" class="text-center">
                  #
                </th>
                <th scope="col">
                    Nombre
                </th>
                <th scope="col">
                    Estilo
                </th>
                <th scope="col" class="text-center">
                    Tipo de Area
                </th>
                <th scope="col" class="text-right">
                    Precio
                </th>
                <th scope="col" class="text-right">
                    Fecha de registro
                </th>
                <th scope="col" class="text-right">
                    Opciones
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
              <tr>
                <td class="text-center">
                    {{ $product->id }}
                  {{-- <div class="photo">
                    <img src="https://black-dashboard-pro-laravel.creative-tim.com/black/img/tania.jpg" alt="Table image">
                  </div> --}}
                </td>
                <td>
                    {{ $product->nombre }}
                </td>
                <td>
                        {{ $product->estilo }}
                </td>
                <td class="text-center">
                        {{ $product->tipo_area }}
                </td>
                <td class="text-right">
                        {{ $product->precio }}
                </td>
                <td class="text-right">
                        {{ $product->created_at }}
                </td>
                <td class="text-right">
                    <form action="{{route('productos.destroy', $product->id)}}" method="POST">
                      <button type="submit" rel="tooltip" class="btn btn-danger btn-link btn-sm " data-original-title="Delete" title=""><i class="tim-icons icon-pencil"></i></button>
                        <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon " data-original-title="Refresh" title=""><i class="tim-icons icon-refresh-01"></i><a href="{{route('productos.edit', $product->id)}}"></a></button>
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger btn-link btn-sm " data-original-title="Delete" title=""><i class="tim-icons icon-simple-remove"></i></button>
                    </form>

                  {{-- <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon " data-original-title="Refresh" title="">
                    <i class="tim-icons icon-refresh-01"></i>
                  </button>
                  <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm " data-original-title="Delete" title="">
                    <i class="tim-icons icon-simple-remove"></i>
                  </button> --}}
                </td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
      </div>
    </div>
  </div>

@endsection