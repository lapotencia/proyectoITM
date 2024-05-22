<?php

$conexion=mysqli_connect("localhost","root","","5b_informatica");

$user=$_POST ['usuario'];
$pass=$_POST ['contrasena'];
session_start();        

$consulta="SELECT*FROM user where usuario ='$user' and contrasena='$pass'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

    header("location:index.html");

}else{

    header("location:login.html");

}

mysqli_close($conexion);

?>