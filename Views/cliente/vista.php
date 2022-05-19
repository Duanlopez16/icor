<?php if($_SESSION['login']->Id_cargo == 4){ ?>

<div class="container mt-5 mb-4">
<div class=" row text-center"><br><br>



<div class="row">

<?php
$conexion=mysqli_connect('localhost','root','','icor');
 $sql="SELECT * from producto";
    $result1=mysqli_query($conexion,$sql);

    while( $mostrar1=mysqli_fetch_array($result1)){
?>
  <div class="col-md-4">
    <div class="card-body">
            <div class="card-img">
                <img src="<?php echo $mostrar1['imagen'] ?>"  class="card-img-top" alt="...">
            </div>
                <div class="card-box">
                    <h4 class="card-title pb-3 mbr-fonts-style display-7"><?php echo $mostrar1['Nombre'] ?></h4>
                </div> 
    </div>
</div>

<?php } ?>

</div><br>

</div>
</div>
</div>

</div>
</div>
</div>


<?php } ?>