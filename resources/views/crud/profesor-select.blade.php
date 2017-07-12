@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Profesores</div>

                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <form class="" action="{{ Request::fullUrl() }}" method="get">
                        <div class="form-inline">
                          <input autofocus type="text" name="q" value="{{ Request::input('q') }}" class="form-control">
                          <button type="submit" name="" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i> Buscar por Nombre</button>
                        </div>
                      </form>
                      <hr/>
                    </div>
                    <div class="col-md-12">
                      <table class="table table-striped table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Asignatura</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($profesores as $profesor)
                            <tr>
                              <td>{{ $profesor->complete_name }}</td>
                              <td>{{ $profesor->asignature->name }}</td>
                              <td><a href="{{ route('profesores.show', $profesor->id) }}" class="btn btn-info">ver</a></td>
                            </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="3">
                              {{ $profesores->appends(Request::except('page'))->links() }}
                            </td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
