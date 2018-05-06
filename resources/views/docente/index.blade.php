@extends ('welcome')
@section ('contenido')

<html>
    <h2>Profesionales</h2>
    <table border="2">
        <thread>
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>APELLIDO P</td>
            <td>APELLIDO M</td>
            <td>TITULO</td>
        </tr>
        </thread>
        <tbody>
            <?php

            foreach($profesionales as $rows) {?>
        <tr>
            <td><?php echo $rows->id; ?></td>
            <td><?php echo $rows->nombre; ?></td>
            <td><?php echo $rows->apellidoMat; ?></td>
            <td><?php echo $rows->apellidoMat; ?></td>
            <td><?php echo $rows->titulo; ?></td>
        </tr>
            <?php }?>
    </tbody>
    </table>
</html>
@stop