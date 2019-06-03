<?php
session_start();
$Usu = $_POST['txtnombre'];

if(isset($_POST['btnagregar'])){
    $_SESSION[$_POST['txtproducto']] = $_POST['txtprecio'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Inicio de sesión</title>
    <meta name="viewport" content="whidth=divice-whidth, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
<div class="col-md-4">
<form action="list.php" method="post"accept-charset="utf-8">
    <div class="panel panel-primary">
    <div class="panel-heading">INICIO DE SESIÓN</div>

    <h5 >Usuario:<strong><?php echo $Usu;   ?></strong>  </h5>

<a href="productos.php">Agregar Productos</a>
 <a href="index.php">Cerrar Session</a>   
   
     
    </form>
    <?php if(count($_SESSION) > 0 ){?>
    <table class="table table-hover">
    <tr>
    <th>Producto</th>
    <th>Precio</th>
    <th>cantidad</th>
    </tr>
<?php foreach ($_SESSION as $nombre => $valor) {
    $nombre=strtoupper($nombre);
?>
    <tr>
    <td><?php echo $nombre;   ?>  </td>
    <td><?php echo $valor;   ?>  </td>
    
    
    </tr>
<?php } ?>
    </table>

    <a href="deleteproductos.php">Eliminar sesion</a>

<?php }  ?>
 </div>
    </div>
</div>
</div>
    
   

<!--AÑADIENDO BOOTSTRAP.JS Y JQUERY-->
<script src="bootstrap/js/jquery-1.12.4.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>   
</body>