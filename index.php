<?php

    $servidor ="localhost";
    $usuario ="root";
    $clave ="";
    $baseDeDatos ="login";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

?>

<?php
    
        if(isset($_POST['registro'])){

            $nombre= $_POST ['nombre'];
            $correo= $_POST ['correo'];
            $telefono= $_POST ['telefono'];
            $password= $_POST ['password'];


        
            $insertarDatos = "INSERT INTO usuarios VALUES('$nombre','$correo','$telefono','$password','')";
  

            $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);
            header('location: login.php');
            exit();
        }
    

?>