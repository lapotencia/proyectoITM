<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable</title>
    <link rel="stylesheet" href = "https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>
    <h1> rols</h1>
    <table id="rols">
    <thead>
        <tr>
            <th>id_rols</th>
            <th>nombre_rol</th>
            <th>nivel</th>
           
            
       </tr>
       </thead>
       <tbody>
        <?php 
        $mysqli = new mysqli("localhost", "root","", "5b_informatica");
        $consulta = "SELECT * FROM rols";
        if($resultado = $mysqli->query($consulta)){
            while($datos = $resultado->fetch_object()){
       ?>
       
        <tr>
            <td><?php printf($datos-> id_rols);?></td>
            <td><?php printf($datos-> nombre_rol);?></td>
            <td><?php printf($datos-> nivel);?></td>
           
        </tr>
        <?php } $resultado->close(); }?>
        </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>let table = new DataTable('#rols');</script>







