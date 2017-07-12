@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Detalle de Profesor</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                              <td>Nombre</td>
                              <td>{{ $profesor->complete_name }}</td>
                            </tr>
                            <tr>
                              <td>Valor Hora</td>
                              <td>${{ $profesor->hour_value }}</td>
                            </tr>
                            <tr>
                              <td>Asignatura</td>
                              <td>{{ $profesor->asignature->name }}</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-12">
                      @role('inspector')
                      <button class="btn btn-default" data-href="{{route('profesores.destroy',$profesor->id)}}" data-toggle="modal" data-target="#confirm-delete">
                          Eliminar
                      </button>
                      @endrole
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
            </div>

            <div class="modal-body">
                <p>You are about to delete one track, this procedure is irreversible.</p>
                <p>Do you want to proceed?</p>
                <p class="debug-url"></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok" id="btn-confirm-delete">Delete</a>
            </div>
        </div>
    </div>
</div>
<script>

    function deleteElement(){
      $.ajax({
        url: '{{route('profesores.destroy',$profesor->id)}}',
        type: 'DELETE',
        success: function(result) {

          var resultSuccess = parseInt(result.result);
          switch (resultSuccess) {
            case 1:
              alert('Eliminado con exito');
              break;
            case 0:
              alert('Ha ocurrido un error, no se pudo eliminar');
              break;
            case -1:
              var error = result.error.errorInfo[2];
              alert('Ha ocurrido un error, no se pudo eliminar:' + error );
              break;
            case -2:
              var error = result.error;
              alert('Ha ocurrido un error, no se pudo eliminar:' + error );
              break;
            default:
            }
        },
      });
    };

    $('#btn-confirm-delete').on('click', function(e) {
        deleteElement();
    });
</script>
@endsection
