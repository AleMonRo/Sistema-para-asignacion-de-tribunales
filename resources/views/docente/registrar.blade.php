@extends ('welcome')
@section ('contenido')

<html>
<div class="container-fluid">
<form role="form">
  <div class="form-group">
    <label>Nombre</label>
    <input class="form-control"
           placeholder="Introduce tu nombre">
  </div>
  <div class="form-group">
    <label>Cargo</label>
    <input type="file" class="form-control" placeholder="Descripcion">
  </div>
  <div class="form-group">
    <label for="sub-area">Area afin</label>
    <input type="file" id="sub-area">
  </div>
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
</div>
</html>

@stop