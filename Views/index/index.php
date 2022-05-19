
<span class="ir-arriba icon-arrow-up2">Arriba</span>

<div class="lok pt-5 pb-5">
<div class="container text-center pt-5 pb-2">
<div class="fd">
<h2 class=" " style="font-family: 'Lexend Deca', sans-serif;">En Promotion Factory nos encargamos 
del diseño, desarrollo y producción de gran variedad de material publicitario y de promoción de Marca 
para puntos de venta, caracterizándonos por generar soluciones innovadoras, realizables y perdurables.</h2>
</div>
<style>
</style>
<h3 class=" mb-4 sm ">Contamos con<span class="hs"></span><span class="if">&#160;</span><h3>
<a class="btn btn-outline-dark ki mt-1" href="#" role="button" style="border-radius: 30px;padding-right: 30px;padding-left: 30px;padding-top: 8px;padding-bottom: 8px;border-width: 2px;"><h5>Contactanos</h5></a>
<br>
</div>
</div>
</div>


<div class="container d-flex justify-content-center text-center pt-5" style="font-family: 'Lexend Deca', sans-serif;">
<div class="row">
<div class="col-md-4  d-flex justify-content-center mb-5">
  <div class="card  align-self-left hgf animation-target1" style="width: 20rem;">
  <div class="card-body">
  <div class="uf mb-3"> 
  <img src="assets/images/2.jpg" class="card-img-top um" alt="...">
  </div>
  <div class="pl-3 pt-1 pr-3">
    <h5 class="card-title mb-3"><b>Experiencia</b></h5>
    <p class="card-text ">Más de 15 años en el mercado de proyectos
     p.o.p.<p>
</div>
</div>
</div>
</div>

<div class="col-md-4  d-flex justify-content-center mb-5">
<div class="card  align-self-center hgf animation-target1" id="card" style="width: 20rem;">
  <div class="card-body">
  <div class="uf mb-3"> 
  <img src="assets/images/3.jpg" class="card-img-top um" alt="...">
  </div>
  <div class="pl-3 pt-1 pr-3">
    <h5 class="card-title mb-3"><b>Compromiso</b></h5>
    <p class="card-text ">Nuestros proyectos se caracterizan 
    por el cumplimiento, eficacia, eficiencia y calidad<p>
</div>
</div>
</div>
</div>

<div class="col-md-4  d-flex justify-content-center mb-5">
<div class="card  align-self-center hgf  animation-target1" style="width: 20rem;">
  <div class="card-body">
  <div class="uf mb-3"> 
  <img src="assets/images/4.jpg" class="card-img-top um" alt="...">
  </div>
  <div class="pl-3 pt-1 pr-3">
    <h5 class="card-title mb-3"><b>Certificado</b></h5>
    <p class="card-text ">Contamos con el sello de calidad coface.<p>
</div>
</div>
</div>
</div>

</div>
</div>



<div class="separador text-center text-white" style="font-family: 'Lexend Deca', sans-serif;">
		<p><q>Los mejores servicios siempre disponibles para ti 😊</q></p>
</div> 

<div  id="coment"  class="mb-5 mt-5 container">
<center>
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

</center>
</div>
  
<div class="container text-center mb-3"  style="font-family: 'Lexend Deca', sans-serif;">
<div class="df">
<p class="mt-5 mb-5 h1"><b>Comentarios</b><p>
<h3>para darnos tu opinion o duda, da click en el boton de comentario</h3><br><br>
</div>
<?php
if (isset($_SESSION['user'])){
if($_SESSION['user']->id_rol == 2){ ?>
  <button type="button"  style="font-family: 'Lexend Deca', sans-serif;" class="btn btn-success mb-5" data-toggle="modal" data-target="#comen">
  Crear comentario
</button>
<?php }
}
?>
</div>


<div class="container d-flex justify-content-center text-center">
<div class="row">
<?php foreach(parent::all() as $comen):  ?>
<div class="col-md-4  d-flex justify-content-center mb-5">
  <div class="card  align-self-center hgf " style="width: 18rem;">
  <div class="card-body">
    <p class="card-text mr-2"><?= $comen->comentario ?></p>
    </div>
    <div class="card-body">
    <p class="card-text mr-2"><?= $comen->respuesta ?></p>
    </div>
    <div class="card-footer">
    <p class="text-muted ">-<?= $comen->nombre_usu ?><p>
    <?php 
    if (isset($_SESSION['user'])){
    if($comen->id_usu==$_SESSION['user']->id_co){ ?>
      <a class="btn btn-danger btn-block" href="?controller=index&method=delete&id=<?= $comen->id ?>" role="button">Eliminar</a>
    <?php
    }
  }
    ?>
    </div>
</div>
</div>
<?php endforeach; ?> 
</div>
</div>

<div class="shadow pt-5 pb-4 mb-5 bg-white rounded">
<div class="container  mb-4 d-flex justify-content-center">
<button id="boton1" type="button" class="btn btn-success btn-lg w-25" onclick="document.getElementById('oculto1').style.display = 'none';document.getElementById('boton1').style.display = 'none';document.getElementById('boton2').style.display = 'block';" style="display: none;">Ocultar</button>
<button id="boton2" type="button" class="btn btn-success btn-lg w-25" onclick="document.getElementById('oculto1').style.display = 'block';document.getElementById('boton2').style.display = 'none';document.getElementById('boton1').style.display = 'block';" style="display: block;">Mostrar más</button>
</div>

<div id="oculto1" style="display:none;">
<div class="container d-flex justify-content-center text-center">
<div class="row mt-4">
<?php foreach(parent::ale() as $comem):  ?>
<div class="col-md-4  d-flex justify-content-center mb-5">
  <div class="card  align-self-center hgf " style="width: 18rem;">
  <div class="card-body">
    <p class="card-text mr-2"><?= $comem->comentario ?></p>
    </div>
    <div class="card-body">
    <p class="card-text mr-2"><?= $comem->respuesta ?></p>
    </div>
    <div class="card-footer">
    <p class="text-muted ">-<?= $comem->nombre_usu ?><p>
    <?php 
    if (isset($_SESSION['user'])){
    if($comem->id_usu==$_SESSION['user']->id_co){ ?>
      <a class="btn btn-danger btn-block" href="?controller=index&method=delete&id=<?= $comem->id_co ?>" role="button">Eliminar</a>
    <?php
    }
  }
    ?>
    </div>
</div>
</div>
<?php endforeach; ?> 
</div>
</div>
</div>
</div>
<br>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comentario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?Controller=comen&method=store" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="name" name="nombre_usu" id="nombre_usu" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su nombre " required="required">
  </div>
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Respuesta:</h5>
 <textarea name="comentario" id="comentario"  class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su Comentario" required="required"></textarea>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger col-md-6"  data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary col-md-6">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=index&method=stores" method="POST" enctype="multipart/form-data">
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Nombres</h5>
    <input type="name" name="nombre" id="nombre" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su nombre completo " required="required">
  </div>
  <div class="form-group">   
  <h5 class="modal-title" id="exampleModalLabel">Apellidos</h5>
    <input type="name" name="apellidos" id="apellidos" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su Correo personal " required="required">
  </div>
  <div class="form-group">   
  <h5 class="modal-title" id="exampleModalLabel">Celular</h5>
    <input type="number" name="celular" id="celular" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su Correo personal " required="required">
  </div>
  <div class="dropdown">
  <label for="exampleInputEmail1" name="Id_doc" id="Id_doc"><h5 class="modal-title" id="exampleModalLabel">Tipo de Documento</h5>
</label><br>
    <select class="btn btn-secondary " name="Id_doc" id="Id_doc">
    <option name="Id_doc" required>Seleccionar</option>
      <option  value="1">Cedula de ciudadania</option> 
      <option  value="2">Cedula de Extranjeria</option>

    </select>
</div> <br> 
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Documento</h5>
    <input type="number" name="documento" id="documento" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su numero de documento " required="required">
  </div>
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Correo</h5>
    <input type="email" name="correo" id="correo" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su celular" required="required">
  </div>
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Contraseña</h5>
    <input type="password" name="contrasena" id="contrasena" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su Contraseña" required="required">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger col-md-6"  data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary col-md-6">Registrarme</button>
        </form>
      </div>
    </div>
  </div>
</div>




  

