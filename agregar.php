<?php
session_start();
if(isset($_POST['btnagregar'])){
    $_SESSION[$_POST['txtproducto']] = $_POST['txtprecio'] = $_POST['txtcantidad'];
} header("location: list.php");

?>