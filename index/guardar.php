<?php
$conexion = new mysqli("localhost","root","","5b_informatica");

$asig = $_POST["asignatura"];
$estu = $_POST["listaEstudiantes"];
$p1 = $_POST["P1"];
$p2 = $_POST["P2"];       
$p3 = $_POST["P3"];
$p4 = $_POST["P4"];
$cf = $_POST["CF"];
$pa = $_POST["PA"];
$cf50 = $_POST["50cf"];
$cpc = $_POST["cpc"];
$cpc50 = $_POST["50cpc"];
$cc = $_POST["cc"];
$cf30 = $_POST["30cf"];
$cpex = $_POST["cpex"];
$cpex70 = $_POST["70cpex"];
$cex = $_POST["cex"];
$situa = $_POST["listaEstudiantes"];

$consulta = "INSERT INTO calificaciones_academicas VALUES ('','$asig', '$estu', '$p1', '$p2', '$p3', '$p4', '$cf', '$pa', '$cf50', '$cpc', '$cpc50', '$cc', '$cf30', '$cpex', '$cpex70', '$cex','$situa')";

$resultado = mysqli_query($conexion, $consulta);

if (!$resultado) {
    die("Error de inserción: " . mysqli_error($conexion));
}

header("location:boletin.php");

?>

<?php
$conexion = new mysqli("localhost","root","","5b_informatica");

$pra1 = $_POST["PRA1"];
$pra2 = $_POST["PRA2"];
$pra3 = $_POST["PRA3"];
$pra4 = $_POST["PRA4"];
$pra5 = $_POST["PRA5"];
$ra1 = $_POST["RA1"];
$ra2 = $_POST["RA2"];
$ra3 = $_POST["RA3"];
$ra4 = $_POST["RA14"];
$ra5 = $_POST["RA5"];
$Total = $_POST["TotalMF"];

$consulta = "INSERT INTO calificaciones_mfs VALUES ('', '$pra1','$pra2','$pra3','$pra4','$pra5','$ra1','$ra2','$ra3', '$ra4', '$ra5', '$Total', '', '', '')";

$resultado = mysqli_query($conexion, $consulta);

if (!$resultado) {
    die("Error de inserción: " . mysqli_error($conexion));
}

header("location:boletin.php");
?>