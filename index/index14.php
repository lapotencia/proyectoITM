<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable</title>
    <link rel="stylesheet" href = "https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>
    <h1> psicologos</h1>
    <table id="psicologos">
    <thead>
        <tr>
            <th>id_psicologos </th>
            <th>primer_nombre</th>
            <th>segundo_nombre</th>
            <th>primer_apellido</th>
            <th>segundo_apellido</th>
            <th>direccion</th>
            <th>email</th>
            <th>telefono</th>
            <th>fecha_nacimiento</th>
            <th>edad</th>
            <th>genero</th>
            <th>especialidad</th>
           
            
       </tr>
       </thead>
       <tbody>
        <?php 
        $mysqli = new mysqli("localhost", "root","", "5b_informatica");
        $consulta = "SELECT * FROM psicologos";
        if($resultado = $mysqli->query($consulta)){
            while($datos = $resultado->fetch_object()){
       ?>
       
        <tr>
            <td><?php printf($datos-> id_psicologos);?></td>
            <td><?php printf($datos-> primer_nombre);?></td>
            <td><?php printf($datos-> segundo_nombre);?></td>
            <td><?php printf($datos-> primer_apellido);?></td>
            <td><?php printf($datos-> segundo_apellido);?></td>
            <td><?php printf($datos-> direccion);?></td>
            <td><?php printf($datos-> email);?></td>
            <td><?php printf($datos-> telefono);?></td>
            <td><?php printf($datos-> fecha_nacimiento);?></td>
            <td><?php printf($datos-> edad);?></td>
            <td><?php printf($datos-> genero);?></td>
            <td><?php printf($datos-> especialidad);?></td>
            
        </tr>
        <?php } $resultado->close(); }?>
        </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>let table = new DataTable('#psicologos');</script>










