
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
        <a class="navbar-brand" href="#">ㅤITM</a>
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

    <h1>Calificaciones academicas</h1> <br>
    <table id="Tabla" class="display">
        <thead>
        <th>ID_CalificacionesA</th>
        <th>Asignatura</th>
        <th>Estudiante</th>
        <th>SegundoNombre</th>
        <th>P1</th>
        <th>P2</th>
        <th>P3</th>
        <th>P4</th>
        <th>CF</th>
        <th>PA</th>
        <th>50CF</th>
        <th>CPC</th>
        <th>50CPC</th>
        <th>CC</th>
        <th>30CF</th>
        <th>70CPEX</th>
        <th>CPEX</th>
        <th>CEX</th>
        <th>Situacion_Final</th>
    </tr>
    </thead>
    <tbody>
    <?php
     $mysqli = new mysqli("localhost", "root","", "5b_informatica");
     $consulta = "SELECT c.*, e.Primer_Nombre AS PrimerNombre, e.Segundo_Nombre AS SegundoNombre, a.Nombre_Asignatura AS NombreAsignatura
     FROM calificaciones_academicas c
     INNER JOIN estudiantes e ON c.Estudiante = e.id_estudiantes
     INNER JOIN asignaturas_academicas a ON c.id_asignatura = a.id_asignatura_aca";
   if($resultado = $mysqli->query($consulta)){
    while($datos = $resultado->fetch_object()){
    ?>
            <tr>
            <td><?php echo $datos->id_calificaciones_aca; ?></td>
            <td><?php echo $datos->NombreAsignatura; ?></td>
            <td><?php echo $datos->PrimerNombre; ?></td>
            <td><?php echo $datos->SegundoNombre; ?></td>
            <td><?php echo $datos->p1; ?></td>
            <td><?php echo $datos->p2; ?></td>
            <td><?php echo $datos->p3; ?></td>
            <td><?php echo $datos->p4; ?></td>
            <td><?php echo $datos->cf; ?></td>
            <td><?php echo $datos->pa; ?></td>
            <td><?php echo $datos->cf_50; ?></td>
            <td><?php echo $datos->cpc; ?></td>
            <td><?php echo $datos->cpc_50; ?></td>
            <td><?php echo $datos->cc; ?></td>
            <td><?php echo $datos->cf_30; ?></td>
            <td><?php echo $datos->cp_ex; ?></td>
            <td><?php echo $datos->xp_ex_70; ?></td>
            <td><?php echo $datos->cex; ?></td>
            <td><?php echo $datos->situacion_final; ?></td>
            </tr>
            <?php
        }
        $resultado->close();
    } else {
        echo "Error: " . $mysqli->error;
    }
    ?>
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('#Tabla').DataTable();
    });
</script>
</body>
</html>
