<div class="container mt-5 mb-4">
<div class=" row text-center">
<div class="col-md-10">
<br>
<p class="display-4" >Lista de empleados liquidados</p>
</div>
</div>
<br>
<table class="table">
    <thead>
        <th>Numero de empleado</th>
        <th>Nombre</th>
        <th>Celular</th>
        <th>Cargo</th>
        <th>Documento</th>
        <th>Correo</th>
        <th>Observacion</th>
        <th>Fecha de liquidaciòn</th>
        <th>Foto </th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::alls() as $empleado):  ?>
        <tr>
        <td><?= $empleado->id_regis ?></td>
            <td><?= $empleado->nombre ?>&nbsp;<?= $empleado->apellidos ?></td>
            <td><?= $empleado->celular?></td>
            <td><?= $empleado->Id_cargo?></td>
            <td>C.C &nbsp;<?= $empleado->documento ?></td>
            <td><?= $empleado->correo?></td>
            <td><?= $empleado->observacion?></td>
            <td><?= $empleado->fecha_li?></td>
            <td><img width="100" height="100" src="<?= $empleado->imagen ?>" alt=""></td>
            <td width="200" class="table__options">
                <a class="btn btn-success mr-1 ml-1 qwe" href="?controller=empleado&method=edi&id_regis=<?= $empleado->id_regis ?>"  role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Editar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
            <a class="btn btn-primary mr-1 ml-1 qwe" href="?controller=empleado&method=editd&id_regis=<?= $empleado->id_regis ?>"  role="button">No Liquidar</a><br>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>



<br><br><br><br><br><br>

