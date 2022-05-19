<div class="modal fade" id="exampleModalCenter" style="font-family: 'Lexend Deca', sans-serif;" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle">Iniciar sesion</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="?controller=security&method=login" method="POST">
  <div class="form-group">
    <label for="exampleInputcorreo1"><h6>Correo</h6></label>
    <input type="email" name="correo" id="correo" required class="form-control input-lg" placeholder="******@gmail.com">
  </div>
  <div class="form-group">
    <label for="exampleInputcontrasena1"><h6>Contraseña</h6></label>
    <input type="password" name="contrasena" id="contrasena" required class="form-control"  placeholder="Contraseña">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger col-md-6" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary col-md-6" name="dat">Iniciar sesion</button>
        </Form>
      </div>
    </div>
  </div>
</div>



 
 <div class="modal fade" id="exampleModalRegistro" style="font-family: 'Lexend Deca', sans-serif;" tabindex="-1" role="dialog"  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalScrollableTitle">Registro</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=user&method=store" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1"><h6>Nombre</h6></label>
    <input type="text" name="name" id="name" required class="form-control input-lg"  placeholder="Carlos">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"><h6>Correo</h6></label>
    <input type="email"  name="email" id="email" required class="form-control input-lg"  placeholder="carlosro@algo.com">
  </div>
  <div>
<input type="hidden" name="id_rol" value="2">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h6>Contraseña</h6></label>
    <input type="password" name="password" id="password" required class="form-control"  placeholder="*********">
  </div>



 
      </div>
      <div class="modal-footer" style="font-family: 'Lexend Deca', sans-serif;">
        <button type="button" class="btn btn-danger col-md-6" style="font-family: 'Lexend Deca', sans-serif;" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary col-md-6" style="font-family: 'Lexend Deca', sans-serif;" name="datreg">Registrarse</button>
        </Form>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="comen" style="font-family: 'Lexend Deca', sans-serif;" tabindex="-1" role="dialog"  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalScrollableTitle">Comentario</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=index&method=store" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1"><h6>Comentario</h6></label>
    <input type="text" name="comentario" id="comentario" required class="form-control input-lg"  placeholder="Es una maravillosa pagina. ;)">
  </div>

<input type="hidden" name="nombre" id="nombre" value="<?=$_SESSION['user']->name;?>">
<input type="hidden" name="id_usu" id="id_usu" value="<?=$_SESSION['user']->id;?>">



      </div>
      <div class="modal-footer" style="font-family: 'Lexend Deca', sans-serif;">
        <button type="button" class="btn btn-danger col-md-6" style="font-family: 'Lexend Deca', sans-serif;" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary col-md-6" style="font-family: 'Lexend Deca', sans-serif;" name="datreg">Crear</button>
        </Form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalComentario" style="font-family: 'Lexend Deca', sans-serif;" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h3 class="modal-title" id="exampleModalCenterTitle">Comentario</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="?controller=comen&method=store" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1"><h6>Nombre</h6></label>
    <input type="name" name="nombre_usu" id="nombre_usu" required class="form-control input-lg" placeholder="Escriba su nombre aquí">
  </div>
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Comentario</h5>
 <textarea name="comentario" id="comentario"  class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su comentario o duda"></textarea>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger col-md-6" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary col-md-6" name="dat">Enviar</button>
        </Form>
      </div>
    </div>
  </div>
</div>

