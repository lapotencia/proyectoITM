<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable</title>
    <link rel="stylesheet" href = "https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>
    <h1>grupos</h1>
    <table id="grupos">
    <thead>
        <tr>
            <th>id_grupo </th>
            <th>id_seccion </th>
            <th>id_tituloformativo </th>
            <th>id_docente </th>
            <th>id_psicologo </th>
            
            
       </tr>
       </thead>
       <tbody>
        <?php 
        $mysqli = new mysqli("localhost", "root","", "5b_informatica");
        $consulta = "SELECT * FROM grupos";
        if($resultado = $mysqli->query($consulta)){
            while($datos = $resultado->fetch_object()){
       ?>
       
        <tr>
            <td><?php printf($datos-> id_grupo );?></td>
            <td><?php printf($datos-> id_seccion);?></td>
            <td><?php printf($datos-> id_tituloformativo);?></td>
            <td><?php printf($datos-> id_docente);?></td>
            <td><?php printf($datos-> id_psicologo);?></td>
            
        </tr>
        <?php } $resultado->close(); }?>
        </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>let table = new DataTable('#grupos');</script>








