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
              <th class="text-center">
                #
              </th>
              <th>
                Name
              </th>
              <th>
                Job Position
              </th>
              <th class="text-center">
                Since
              </th>
              <th class="text-right">
                Salary
              </th>
              <th class="text-right">
                Actions
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">
                <div class="photo">
                  <img src="https://black-dashboard-pro-laravel.creative-tim.com/black/img/tania.jpg" alt="Table image">
                </div>
              </td>
              <td>
                Andrew Mike
              </td>
              <td>
                Develop
              </td>
              <td class="text-center">
                2013
              </td>
              <td class="text-right">
                € 99,225
              </td>
              <td class="text-right">
                <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon " data-original-title="Refresh" title="">
                  <i class="tim-icons icon-refresh-01"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm " data-original-title="Delete" title="">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <div class="photo">
                  <img src="https://black-dashboard-pro-laravel.creative-tim.com/black/img/robi.jpg" alt="Table image">
                </div>
              </td>
              <td>
                John Doe
              </td>
              <td>
                Design
              </td>
              <td class="text-center">
                2012
              </td>
              <td class="text-right">
                € 89,241
              </td>
              <td class="text-right">
                <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon " data-original-title="Refresh" title="">
                  <i class="tim-icons icon-refresh-01"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm " data-original-title="Delete" title="">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <div class="photo">
                  <img src="https://black-dashboard-pro-laravel.creative-tim.com/black/img/lora.jpg" alt="Table image">
                </div>
              </td>
              <td>
                Alex Mike
              </td>
              <td>
                Design
              </td>
              <td class="text-center">
                2010
              </td>
              <td class="text-right">
                € 92,144
              </td>
              <td class="text-right">
                <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon " data-original-title="Refresh" title="">
                  <i class="tim-icons icon-refresh-01"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm " data-original-title="Delete" title="">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <div class="photo">
                  <img src="https://black-dashboard-pro-laravel.creative-tim.com/black/img/jana.jpg" alt="Table image">
                </div>
              </td>
              <td>
                Mike Monday
              </td>
              <td>
                Marketing
              </td>
              <td class="text-center">
                2013
              </td>
              <td class="text-right">
                € 49,990
              </td>
              <td class="text-right">
                <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon   btn-neutral  " data-original-title="Refresh" title="">
                  <i class="tim-icons icon-refresh-01"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm   btn-neutral  " data-original-title="Delete" title="">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <div class="photo">
                  <img src="https://black-dashboard-pro-laravel.creative-tim.com/black/img/robi.jpg" alt="Table image">
                </div>
              </td>
              <td>
                Paul Dickens
              </td>
              <td>
                Communication
              </td>
              <td class="text-center">
                2015
              </td>
              <td class="text-right">
                € 69,201
              </td>
              <td class="text-right">
                <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon   btn-neutral  " data-original-title="Refresh" title="">
                  <i class="tim-icons icon-refresh-01"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm   btn-neutral  " data-original-title="Delete" title="">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <div class="photo">
                  <img src="https://black-dashboard-pro-laravel.creative-tim.com/black/img/emilyz.jpg" alt="Table image">
                </div>
              </td>
              <td>
                Manuel Rico
              </td>
              <td>
                Manager
              </td>
              <td class="text-center">
                2012
              </td>
              <td class="text-right">
                € 99,201
              </td>
              <td class="text-right">
                <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon   btn-neutral  " data-original-title="Refresh" title="">
                  <i class="tim-icons icon-refresh-01"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm   btn-neutral  " data-original-title="Delete" title="">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    </div>
  </div>
</div>

@endsection