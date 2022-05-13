<?php

class UserSession{
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

$usuarios=$_POST ['usuarios'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuarios']=$usuarios;

$conexion=mysqli_connect("localhost", "root", "", "bdsadet");
$consulta="SELECT*FROM usuario where Usuario= '$usuarios' and Contra='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);


if($filas){
    header("location:formularios/index.php");

}else{
    ?>
    <?php
    include("sesion.php");
    echo'<script type="text/javascript">
    alert("Error de inicio de sesion");
    </script>';
    ?>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);