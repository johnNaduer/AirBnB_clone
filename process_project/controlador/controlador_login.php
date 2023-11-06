<?php
#iniciar una session
session_start();

if (!empty($_POST["btningresar"])){
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $query = "select * from usuario where usuario='$usuario' and clave='$password'";
        $sql=$conexion->query($query);
        #si el usuario existe me llevara a la siguiente pagina
        if ($datos=$sql->fetch_object()){
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombres"]=$datos->nombres;
            $_SESSION["apellidos"]=$apellidos->apellidos;


            header("location: inicio.php");
        } else {
            echo "<div class='alert alert danger'> Acceso denegado</div>";
        }
    }
    else
    {
        echo "Campos vacios";
    }
}
?>
