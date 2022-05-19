<div class="container mt-5 mb-4">
<div class=" row text-center">
<div class="col-md-2 d-flex align-items-center">
<button type="button" class="btn btn-success btn-lg"  data-toggle="modal" data-target="#exampleModal">Venta Nueva</button>
</div>
<div class="col-md-10">
<br>
<center><p class="display-4" >Facturas</p><center>
</div>
</div>
<br>

<?php foreach(parent::all() as $venta):  ?>
<table class="table">
    <thead>
        <TR>
           <th>Numero de Factura</th>
           <td><?= $venta->Id_factura ?></td>
        </TR>
        <TR>
           <th>Producto</th> 
           <td><?= $venta->Nombre_producto?></td>
        </TR>
        <TR>
           <th>Cantidad</th>
           <td><?= $venta->cantidad_producto ?></td> 
        </TR>
        <TR>
           <th>Precio</th>
           <td><?= $venta->Precio_producto ?></td> 
        </TR>
        <TR>
           <th>Referencia</th>
           <td><?= $venta->Id_producto ?></td> 
        </TR>
        <TR>
           <th>Fecha</th>
           <td><?= $venta->Fecha ?></td> 
        </TR>
        <TR>
           <th>Sub Total</th>
           <td><?= $venta->Sub_total ?></td> 
        </TR>
        <TR>
           <th>Total</th>
           <td><?= $venta->Total ?></td> 
        </TR>
        <TR>
           <th>Vendedor</th>
           <td><?= $venta->id_regis ?></td> 
        </TR>
        <TR>
           <th>Cliente</th>
           <td><?= $venta->nombre ?></td> 
        </TR>
        <TR>
           <th>Numero Documento Cliente</th>
           <td><?= $venta->documento ?></td> 
        </TR>
   </thead>   
        <TR>
            <td width="300" >
                <a href="?controller=ventas&method=edit&Id_factura=<?=  $venta->Id_factura ?>">
                    <button class="btn btn-outline-success btn-lg">Editar</button>
                </a>
                <a href="?controller=ventas&method=delete&Id_factura=<?= $venta->Id_factura ?>">
                    <button class="btn btn-outline-danger btn-lg">Eliminar</button>
                </a>
            </td>
        </TR>
</table>
    <?php endforeach; ?>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rellene el Formulario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=ventas&method=store" method="POST" enctype="multipart/form-data">
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Nombre del producto</label>
    <input type="name" name="Nombre_producto" id="Nombre_producto" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba el nombre del producto" required="required">
  </div>
  <div class="form-group col-md-2">
    <label for="exampleInputEmail1">C/U</label>
     <select name="cantidad_producto" id="cantidad_producto" required class="form-control" aria-describedby="emailHelp" required="required">
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option> 
       <option value="4">4</option>
       <option value="5">5</option> 
    </select>
  </div>
  <div class="form-group  col-md-4">
    <label for="exampleInputEmail1">Precio</label>
    <input type="number" name="Precio_producto" id="Precio_producto" required class="form-control" aria-describedby="emailHelp" placeholder="$$$$$$" required="required">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Codigo Producto</label>
    <input type="number" name="Id_producto" id="Id_producto" required  class="form-control"  placeholder="# Referencia" required="required">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Fecha</label>
    <input type="date" name="Fecha" id="Fecha" required  class="form-control" required="required">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Sub Total</label>
    <input type="number" name="Sub_total" id="Sub_total" required class="form-control"  placeholder="$$$$$$" required="required">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Total</label>
    <input type="number" name="Total" id="Total" required class="form-control"  placeholder="$$$$$$" required="required">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Codigo Vendedor</label>
    <input type="number" name="id_regis" id="id_regis" required class="form-control"  placeholder="Codigo Vendedor" required="required">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Nombre Cliente</label>
    <input type="text" name="nombre" id="nombre" required class="form-control"  placeholder="Nombre Cliente" required="required">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Numero Documento Cliente</label>
    <input type="number" name="documento" id="documento" required class="form-control"  placeholder="Codigo Cliente" required="required">
  </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger col-md-6"  data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary col-md-6">Continuar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br>

