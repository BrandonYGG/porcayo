<?php
include 'conexion.php';
$usuario=$_POST['username'];
$password=$_POST['password'];
session_start(); 
$_SESSION['username']=$usuario;
$consulta="SELECT * FROM usuarios where usuario='$usuario' and contraseña='$password'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['ID_Rol']==1){ //administrador
    header("location:Administrador/dashboard.php");

}else if($filas['ID_Rol']==2){ //cliente
    header("location:calificaciones.html"); 
}
else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);
?>