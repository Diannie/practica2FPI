<?php
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$respuesta = "";

if ($usuario == "admin" && $pass == "1234") {
  $respuesta = "Loggeado con éxito";
}else {
  $respuesta = "Datos incorrectos";
}
echo json_encode($respuesta);
?>
