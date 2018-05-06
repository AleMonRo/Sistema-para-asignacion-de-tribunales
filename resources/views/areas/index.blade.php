@extends ('welcome')
@section ('contenido')

<html>
    <h2> Areas</h2>
    <div class="box box-primary">
    </div>
    <table class="table">
        <thread>
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>DESCRIPCION</td>
            <td>SUBAREAS</td>
        </tr>
        </thread>
        <tbody>
            <?php
            foreach($areas as $rows) {?>
        <tr>
            <td><?php echo $rows->idArea; ?></td>
            <td><?php echo $rows->nombre_area; ?></td>
            <td><?php echo $rows->descripcion; ?></td>
            <td>
            <section class="sidebar"><ul class="sidebar-menu"><li class="treeview">
              <a href="#">
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a> Registrar por lote</a></li>
                <li><a> Registrar por lote</a></li>
                <li><a> Registrar por lote</a></li>
              </ul></li></ul></section>
            </td>
        </tr>
            <?php }?>
    </tbody>
    </table>
</html>
@stop