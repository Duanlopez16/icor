<div class="container mt-5 mb-4">
<div class=" row text-center">
<div class="col-md-2 d-flex align-items-center">
<button type="button" class="btn btn-success btn-lg"  data-toggle="modal" data-target="#exampleModal">Crear</button>
</div>
<div class="col-md-10">
<br>
<p class="display-4" >Lista de empleados</p>
</div>
</div>
<br>
<table class="table">
    <thead>
        <th>Numero de empleado</th>
        <th>Nombre completo</th>
        <th>Celular</th>
        <th>Cargo</th>
        <th>Documento</th>
        <th>Correo</th>
        <th>Observacion</th>
        <th>Fecha de Ingreso</th>
        <th>Foto</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $empleado):  ?>
        <tr>
            <td><?= $empleado->id_regis ?></td>
            <td><?= $empleado->nombre ?>&nbsp;<?= $empleado->apellidos ?></td>
            <td><?= $empleado->celular?></td>
            <td><?= $empleado->Id_cargo?></td>
            <td>C.C &nbsp;<?= $empleado->documento ?></td>
            <td><?= $empleado->correo?></td>
            <td><?= $empleado->observacion?></td>
            <td><?= $empleado->fecha_in?></td>
            <td><img width="100" height="100" src="<?= $empleado->imagen ?>" alt=""></td>
            <td width="200" class="table__options">
                <a class="btn btn-success mr-1 ml-1 qwe" href="?controller=empleado&method=edit&id_regis=<?= $empleado->id_regis ?>"  role="button">&nbsp;&nbsp;&nbsp;&nbsp;Editar&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
            <a class="btn btn-danger mr-1 ml-1 qwe" href="?controller=empleado&method=edits&id_regis=<?= $empleado->id_regis ?>"  role="button">&nbsp;&nbsp;Liquidar&nbsp;&nbsp;</a><br>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=empleado&method=store" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombres</label>
    <input type="name" name="nombre" id="nombre" required class="form-control" aria-describedby="emailHelp" placeholder="Carlos Daniel " required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos</label>
    <input type="name" name="apellidos" id="apellidos" required class="form-control" aria-describedby="emailHelp" placeholder="Blanco Rodriguez" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Celular</label>
    <input type="number" name="celular" id="celular" required class="form-control" aria-describedby="emailHelp" placeholder="3215449361" required="required">
  </div>
  <div class="dropdown">
  <label for="exampleInputEmail1" name="Id_cargo" id="Id_cargo">Cargo</label><br>
    <select class="btn btn-secondary " name="Id_cargo" id="Id_cargo">
    <option name="Id_cargo" required>Seleccionar</option>
      <option  value="1">Administrador</option> 
      <option  value="2">Vendedor</option>
      <option  value="3">Empleado</option>
      <option  value="4">Usuario</option>
    </select>
</div> <br> 
<div class="form-group">
    <input type="hidden" name="Id_doc" id="Id_doc"   class="form-control" value="1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Documento</label>
    <input type="number" name="documento" id="documento" required  class="form-control"  placeholder="10015973" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Correo</label>
    <input type="email" name="correo" id="correo" required  class="form-control"  placeholder="Carlos@algo.com" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha de ingreso</label>
    <input type="date" name="fecha_in" id="fecha_in" required  class="form-control"  placeholder="Carlos@algo.com" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Foto del empleado </label>
    <input type="file" name="file" id="file" required  class="form-control"  placeholder="Carlos@algo.com" required="required">
  </div>
  <div class="form-group">
    <input type="hidden" name="contrasena" id="contrasena"   class="form-control" value="promotionfactory">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary col-md-6"  data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary col-md-6">Crear</button>
        </form>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br>

