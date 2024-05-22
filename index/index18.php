<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable</title>
    <link rel="stylesheet" href = "https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>
    <h1>tutors</h1>
    <table id="tutors">
    <thead>
        <tr>
            <th>id_tutor</th>
            <th>primer_nombre</th>
            <th>segundo_nombre</th>
            <th>primer_apellido</th>
            <th>segundo_apellido</th>
            <th>direccion</th>
            <th>telefono</th>
            <th>email</th>
            <th>parentesco</th>
            <th>genero</th>
            
            <th>escueladepadres</th>
            <th>comitedecursop</th>
            <th>apmae</th>
            <th>rolescueladepadres</th>
            <th>rolcomitedecurso</th>
            <th>rolapmae</th>
            <th>id_estudiante</th>
            <th>id_user </th>
            
       </tr>
       </thead>
       <tbody>
        <?php 
        $mysqli = new mysqli("localhost", "root","", "5b_informatica");
        $consulta = "SELECT * FROM tutors";
        if($resultado = $mysqli->query($consulta)){
            while($datos = $resultado->fetch_object()){
       ?>
       
        <tr>
            <td><?php printf($datos-> id_tutor);?></td>
            <td><?php printf($datos-> primer_nombre);?></td>
            <td><?php printf($datos-> segundo_nombre);?></td>
            <td><?php printf($datos-> primer_apellido);?></td>
            <td><?php printf($datos-> segundo_apellido);?></td>
            <td><?php printf($datos-> direccion);?></td>
            <td><?php printf($datos-> telefono);?></td>
            <td><?php printf($datos-> email);?></td>
            <td><?php printf($datos-> parentesco);?></td>
            <td><?php printf($datos-> genero);?></td>
            <td><?php printf($datos-> escueladepadres);?></td>
            <td><?php printf($datos-> comitedecursop);?></td>
            <td><?php printf($datos-> apmae);?></td>
            <td><?php printf($datos-> rolescueladepadres);?></td>
            <td><?php printf($datos-> rolcomitedecurso);?></td>
            <td><?php printf($datos-> rolapmae);?></td>
            <td><?php printf($datos-> id_estudiante);?></td>
            <td><?php printf($datos-> iduser);?></td>

        </tr>
        <?php } $resultado->close(); }?>
        </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>let table = new DataTable('#tutors');</script>










