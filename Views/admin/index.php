
<?php if($_SESSION['login']->Id_cargo == 1){ ?>

<div class="lok pt-5 pb-5">
<div class="container text-center pt-5 pb-2">
<div class="fd">
<h2 class=" " style="font-family: 'Lexend Deca', sans-serif;">En Promotion Factory nos encargamos 
del diseño, desarrollo y producción de gran variedad de material publicitario y de promoción de Marca 
para puntos de venta, caracterizándonos por generar soluciones innovadoras, realizables y perdurables.</h2>
</div>
<style>
</style>
</div>
</div>
</div>
<div  id="coment"  class="mb-5 mt-5 container">
<center>
<p class="mt-5 mb-5 h1"><b>Comentarios No Publicados</b><p>
<div class="row  d-flex justify-content-between">
<div class="col-md-4">
<p class="h2">📑</p>
</div>
<div class="col-md-4">
<p class="h2 ef">📑</p>
</div>
<div class="col-md-4">
<p class="h2 ef">📑</p>
</div>
</div>
</center>
</div><br>


  


<div class="container d-flex justify-content-center text-center">
<div class="row">
<?php foreach(parent::all() as $comen):  ?>
<div class="col-md-4  d-flex justify-content-center mb-5">
  <div class="card  align-self-center hgf " style="width: 18rem;">
  <div class="card-body">
    <p class="card-text mr-2"><?= $comen->comentario ?></p>
    </div>
    <div class="card-footer">
    <p class="text-muted ">-<?= $comen->nombre_usu ?><p><br>
    <a class="btn btn-warning mr-1 ml-1 qwe" href="?controller=comen&method=edit&id_co=<?= $comen->id_co ?>"  role="button">Responder</a><br><br>
    <button type="button" class="btn btn-danger btn-lg text-white"  data-toggle="modal" data-target="#exampleModal">Eliminar</button>&nbsp;&nbsp;
    <form  action="?controller=comen&method=updates" method="POST" >
    <input type="hidden" name="id_co" value="<?= $comen->id_co ?>">
    <input type="hidden" name="id_esta" value="1">
    <button type="submit" class="btn btn-primary col-md-6">Publicar</button>
            </form>


    </div>
</div>
</div>
<?php endforeach; ?> 
</div>
</div>

<div class="shadow pt-5 pb-4 mb-5 bg-white rounded">
<div class="container  mb-4 d-flex justify-content-center">
<button id="boton1" type="button" class="btn btn-success btn-lg w-25" onclick="document.getElementById('oculto1').style.display = 'none';document.getElementById('boton1').style.display = 'none';document.getElementById('boton2').style.display = 'block';" style="display: none;">Ocultar</button>
<button id="boton2" type="button" class="btn btn-success btn-lg w-25" onclick="document.getElementById('oculto1').style.display = 'block';document.getElementById('boton2').style.display = 'none';document.getElementById('boton1').style.display = 'block';" style="display: block;">Mensajes Publicados</button>
</div>

<div id="oculto1" style="display:none;">
<div class="row">
<?php foreach(parent::ale() as $comen):  ?>
<div class="col-md-4  d-flex justify-content-center mb-5">
  <div class="card  align-self-center hgf " style="width: 18rem;">
  <div class="card-body">
    <center><p class="card-text mr-2"><?= $comen->comentario ?></p></center>
    </div>
    <div class="card-footer">
    <center><p class="text-muted ">-<?= $comen->nombre_usu ?><p><br></center>
    <center><a class="btn btn-warning mr-1 ml-1 qwe" href="?controller=comen&method=edit&id_co=<?= $comen->id_co ?>"  role="button">Responder</a><br><br>
    <button type="button" class="btn btn-danger btn-lg text-white"  data-toggle="modal" data-target="#exampleModal">Eliminar</button><br><br>
    <form  action="?controller=comen&method=updates" method="POST" >
    <input type="hidden" name="id_co" value="<?= $comen->id_co ?>">
    <input type="hidden" name="id_esta" value="2">
    <button type="submit" class="btn btn-dark col-md-6">No Publicar</button>
            </form>

</center>
    </div>
</div>
</div>
<?php endforeach; ?> 
</div>
</div>
</div>
</div>
<br>





<?php } ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Advertencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <div class="form-group">
    <label for="exampleInputEmail1">El comentario se eliminara</label>
  </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-danger mr-1 ml-1 qwe" href="?controller=comen&method=delete&id_co=<?= $comen->id_co ?>"  role="button">Eliminar</a><br><br>
      </div>
    </div>
  </div>
</div>
