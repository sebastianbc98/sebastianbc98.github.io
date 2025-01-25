<?php
$usuario = $_POST["usuario"];
$contraseña = $_POST["password"];
session_start();
$_SESSION['usuario']=$usuario;

include('conexion.php');

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:inicio.php");
}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="titulovalidar">ERROR DATOS INCORRECTOS</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>