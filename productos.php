<?php

session_start();
if(isset($_POST['btnagregar'])){
    $_SESSION[$_POST['txtproducto']] = $_POST['txtprecio'] = $_POST['txtcantidad'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Lista de Productos</title>
    <meta name="viewport" content="whidth=divice-whidth, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
<div class="col-md-4">
<form action="list.php" method="post"accept-charset="utf-8">
    <div class="panel panel-primary">
    <div class="panel-heading">Registro de Productos</div>

    <div class="form-group">
    <label class="control-label">Producto</label>
    <input type="text" name="txtproducto" class="form-control"> <p>
    </div>

    <div class="form-group">
    <label class="control-label">Precio</label>
    <input type="text" name="txtprecio" class="form-control"> <p>
    </div>

 <div class="form-group">
    <label class="control-label">Cantidad</label>
    <input type="text" name="txtcantidad" class="form-control"> <p>
    </div>

    <div class="form-group">
                <label class="col-md-2 control-label"></label>
                <button type="submit" name="btnagregar" class="btn btn-primary">Agregar</button>
                
            </div>
    
     
    </form>
    
    </table>

    <a href="productos-delete.php">Eliminar sesion</a>


 </div>
    </div>
</div>
</div>
    
   

<!--AÑADIENDO BOOTSTRAP.JS Y JQUERY-->
<script src="bootstrap/js/jquery-1.12.4.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>   
</body>