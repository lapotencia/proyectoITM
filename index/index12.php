<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable</title>
    <link rel="stylesheet" href = "https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>
    <h1>user</h1>
    <table id="user">
    <thead>
        <tr>
            <th>id_user </th>
            <th>name</th>
            <th>email </th>
            <th>password</th>
            <th>remember_token</th>
           
       </tr>
       </thead>
       <tbody>
        <?php 
        $mysqli = new mysqli("localhost", "root","", "5b_informatica");
        $consulta = "SELECT * FROM user";
        if($resultado = $mysqli->query($consulta)){
            while($datos = $resultado->fetch_object()){
       ?>
       
        <tr>
            <td><?php printf($datos-> id_user);?></td>
            <td><?php printf($datos-> name);?></td>
            <td><?php printf($datos-> email);?></td>
            <td><?php printf($datos-> password);?></td>
            <td><?php printf($datos-> remember_token);?></td>
            
        </tr>
        <?php } $resultado->close(); }?>
        </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>let table = new DataTable('#user');</script>










