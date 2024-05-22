
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

    <h1>calificaciones_mfs</h1>
    <table id="calificaciones_mfs">
    <thead>
        <tr>
        <th>ID_Calificaciones_MFS</th>
            <th>PRA1</th>
            <th>PRA2</th>
            <th>PRA3</th>
            <th>PRA4</th>
            <th>PRA5</th>
            <th>RA1</th>
            <th>RA2</th>
            <th>RA3</th>
            <th>RA4</th>
            <th>RA5</th>
            <th>Total_MF</th>
            <th>Situación_Final</th>
       </tr>
       </thead>
       <tbody>
       <?php
     $mysqli = new mysqli("localhost", "root","", "5b_informatica");
     $consulta = "SELECT * FROM calificaciones_mfs";
   if($resultado = $mysqli->query($consulta)){
    while($datos = $resultado->fetch_object()){
    ?>
       
        <tr>
        <td><?php printf($datos-> id_calificaciones_mfs);?></td> 
            <td><?php printf($datos-> PRA1);?></td>
            <td><?php printf($datos-> PRA2);?></td>
            <td><?php printf($datos-> PRA3);?></td>
            <td><?php printf($datos-> PRA4);?></td>
            <td><?php printf($datos-> PRA5);?></td>
            <td><?php printf($datos-> RA1);?></td>
            <td><?php printf($datos-> RA2);?></td>
            <td><?php printf($datos-> RA3);?></td>
            <td><?php printf($datos-> RA4);?></td>
            <td><?php printf($datos-> RA5);?></td>
            <td><?php printf($datos-> total_mf);?></td>
            <td><?php printf($datos-> situacion_final);?></td>
        </tr>
        <?php } $resultado->close(); }?>
        </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>let table = new DataTable('#calificaciones_mfs');</script>










