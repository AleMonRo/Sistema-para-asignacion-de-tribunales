@extends ('welcome')
@section ('contenido')

<html>
<div class="container-fluid">
<div class="panel-header">
<div class="box box-primary">
        <div class="box-header hidden-xs hidden-sm">
            <h3 class="box-title">Impotar Docentes</h3>
            <form class="form-inline pull-right row">
                <ng-csv-import
                    content="csv.content"
                    material
                    md-button-class="col-md-2 btn btn-primary fa fa-upload"
                    md-input-class="col-md-9"
                    header="csv.header"
                    separator="csv.separator"
                    result="csv.result"
                    accept="csv.accept"
                    callback="$ctrl.loadContent">
                </ng-csv-import>
            </form>
        </div>
    
</div>

<div class="panel-body">
<table class="table">
    <thead>
      <tr>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>john@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</html>

@stop