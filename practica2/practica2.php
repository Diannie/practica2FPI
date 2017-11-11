<<?php
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$respuesta = "";

if ($usuario == "admin" && $pass == "1234") {
  $respuesta = "OK";
}else {
  $respuesta = "Usuario o contraseña incorrectos";
}

echo json encode($respuesta);
 ?>
