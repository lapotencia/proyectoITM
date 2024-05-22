
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href = "https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2e492e">
    <div class="container-fluid">
        <img src="img/logoitm.png" href="login.html" height="50px" width="50px">
        <a class="navbar-brand" href="login.html">ㅤITM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Docentes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="docentes.php">Docentes</a></li>
                        <li><a class="dropdown-item" href="estudiantes.php">Listado de estudiantes</a></li>
                        <li><a class="dropdown-item" href="calificacionesaca.php">Calificaciones academicas</a></li>
                        <li><a class="dropdown-item" href="calificacionesmfs.php">Calificaciones modulos</a></li>
                        <li><a class="dropdown-item" href="boletin.php">Boletin</a></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="https://itm.edupage.org/timetable/">Horarios</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Estudiantes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://itm.edupage.org/timetable/">Horarios</a></li>
                        <li><a class="dropdown-item" href="estudiantes.php">Estudiantes</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Tutores
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://itm.edupage.org/timetable/">Horarios</a></li>
                        <li><a class="dropdown-item" href="estudiantes.php">Estudiantes</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav> <br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <h1>ESTUDIANTES</h1>
    <table id="estudiantes">
    <thead>
        <tr>
            <th>id_estudiantes</th>
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
            <th>patologia</th>
            <th>iduser</th>
            
       </tr>
       </thead>
       <tbody>
        <?php 
        $mysqli = new mysqli("localhost", "root","", "5b_informatica");
        $consulta = "SELECT * FROM estudiantes";
        if($resultado = $mysqli->query($consulta)){
            while($datos = $resultado->fetch_object()){
       ?>
       
        <tr>
            <td><?php printf($datos-> id_estudiantes);?></td>
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
            <td><?php printf($datos-> patologia);?></td>
            <td><?php printf($datos-> iduser);?></td>
        </tr>
        <?php } $resultado->close(); }?>
        </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>let table = new DataTable('#estudiantes');</script>










