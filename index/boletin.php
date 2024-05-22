<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificacion</title>
    <link rel="stylesheet" href="css/boletin.css">
    <script src="calcul.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
<form action="guardar.php" method="POST">
    <div class="container" style="text-align: center;">
        <h2>Calificación</h2>

        <div class="input-grupo">

<label>Grupos</label>
<select type="text" id="Selectgrupo" name="Grupo" style="width: 300px" class="form-control input-md custom-select">
    <option value="--">---</option>

    <?php
    $conect=mysqli_connect('localhost','root','','5b_informatica');

    $sql=mysqli_query($conect, "SELECT * FROM grupos g inner join  titulosformativos t on g.id_tituloformativo=t.id_titulosformativos");

    while($datos=mysqli_fetch_array($sql))
    {
    ?>
    <option id='options-<?php echo $datos["id_grupo"]?>' value="<?php echo $datos['id_grupo']?>" data-grupo="<?php echo htmlspecialchars(json_encode($datos), ENT_QUOTES, 'UTF-8')?>"><?php echo $datos['grupos']." ".$datos['nombre_titulo']?></option>
    <?php
    }
    ?>
</select> <br>

</div>

<script>
const selectgrupo = document.getElementById('Selectgrupo');
Selectgrupo.addEventListener('change', function (e) {
    var option = document.getElementById('options-' + e.target.value)
    var data = JSON.parse(option.dataset.grupo)
    Object.keys(data).forEach(function(key) {
        var elemento = document.getElementById(key);
        if (elemento) {
            elemento.value = data[key]
        }
    })
})
</script>

<div class="input-grupo" id="listaEstudiantes">

<label>Estudiantes</label>

<select id="SelectEstudiante" name="Estudiante" style="width: 300px" class="form-control input-md custom-select">

    <option value="--">---</option>

</select> 
</div> <br>

<div class="input-grupo">

<label>Asignatura</label>

<select id="asignaturas" name="asignatura" style="width: 300px" class="form-control input-md custom-select" onchange="MostrarAsigatura()">

    <option value="--">---</option>
    <?php
    $conect = mysqli_connect('localhost', 'root', '', '5b_informatica');
    $sql = mysqli_query($conect, "SELECT * FROM asignaturas_academicas");

    while ($datos = mysqli_fetch_array($sql)) {
    ?>
    <option id='options-<?php echo $datos["id_asignatura_aca"] ?>' value="<?php echo $datos['id_asignatura_aca'] ?>" data-estudiante="<?php echo htmlspecialchars(json_encode($datos), ENT_QUOTES, 'UTF-8') ?>"><?php echo $datos['nombre_asignatura']?></option>
    <?php
    }
    ?>
</select>
</div>

<script>
const estudianteSelect = document.getElementById('asignaturas_academicas');
estudianteSelect.addEventListener('change', function (e) {
    var option = document.getElementById('options-' + e.target.value);
    var data = JSON.parse(option.dataset.estudiante);
    document.getElementById('nombre_asignatura').value = data['nombre_asignatura'];
});
</script> <br>

<div class="input-grupo">

<label>Modulos_F</label>

<select id="modulof" name="modulof" style="width: 300px" class="form-control input-md custom-select" onchange="MostrarModulo()">

    <option value="--">---</option>
    <?php
    $conect = mysqli_connect('localhost', 'root', '', '5b_informatica');
    $sql = mysqli_query($conect, "SELECT * FROM modulos_formativos");

    while ($datos = mysqli_fetch_array($sql)) {
    ?>
    <option id='options-<?php echo $datos["id_modulos_formativos"] ?>' value="<?php echo $datos['id_modulos_formativos'] ?>" data-estudiante="<?php echo htmlspecialchars(json_encode($datos), ENT_QUOTES, 'UTF-8') ?>"><?php echo $datos['nombre_modulo']?></option>
    <?php
    }
    ?>
</select>
</div>

<script>
const estudianteSelect = document.getElementById('modulos_formativos');
estudianteSelect.addEventListener('change', function (e) {
    var option = document.getElementById('options-' + e.target.value);
    var data = JSON.parse(option.dataset.estudiante);
    document.getElementById('nombre_modulo').value = data['nombre_modulo'];
});
</script>
<br>



<div id="Periodos" style="display:none;">
            <label for="">P1</label> 
            <input name="P1" id="P1" type="number"><br>
            <label for="">P2</label> 
            <input name="P2" id="P2" type="number"><br>
            <label for="">P3</label> 
            <input name="P3" id="P3" type="number"><br>
            <label for="">P4</label> 
            <input name="P4" id="P4" type="number"><br>
            <label for="">CF</label> 
            <input name="CF" id="CF" type="number"><br>
            <label for="">PA</label> 
            <input name="PA" id="PA" type="number"><br>
            <label name="situa"id="situan">Situacion</label>
            <select name="situacion" id="situac"></select>
            
        </div>

        <div id="completivoo" style="display: none;">
    
    <label for="">50CF</label> 
    <input name="50cf" id="50cf" type="number"><br>
    <label for="">CPC</label> 
    <input name="cpc" id="cpc" type="number"><br> 
    <label for="">50CPC</label> 
    <input name="50cpc" id="50cpc" type="number"><br>
    <label for="">CC</label> 
    <input name="cc" id="cc" type="number"><br>

</div>
<div id="extraordinario" style="display: none;">
    
    <label for="">30CF</label> 
    <input name="30cf" id="30cf" type="number"><br>
    <label for="">CPEX</label> 
    <input name="cpex" id="cpex" type="number"><br>
    <label for="">70CPEX</label> 
    <input name="70cpex" id="70cpex" type="number"><br>
    <label for="">CEX</label> 
    <input name="cex" id="cex" type="number"><br>
    
</div>

    <div id="RA" style="display: none;">
            <div class="columnaizquierda">
                <label for="">PRA1</label> 
                <input name="PRA1" id="PRA1" type="number"><br>
                <label for="">PRA2</label> 
                <input name="PRA2" id="PRA2" type="number"><br>
                <label for="">PRA3</label> 
                <input name="PRA3" id="PRA3" type="number"><br>
                <label for="">PRA4</label> 
                <input name="PRA4" id="PRA4" type="number"><br>
                <label for="">PRA5</label> 
                <input name="PRA5" id="PRA5" type="number"><br>
            </div>
            <div class="columnaderecha">
                <label for="">RA1</label> 
                <input name="RA1" id="RA1" type="number"><br>
                <label for="">RA2</label> 
                <input name="RA2" id="RA2" type="number"><br>
                <label for="">RA3</label> 
                <input name="RA3" id="RA3" type="number"><br>
                <label for="">RA4</label> 
                <input name="RA4" id="RA4" type="number"><br>
                <label for="">RA5</label> 
                <input name="RA5" id="RA5" type="number"><br>
                <label for="">Total</label> 
                <input name="TotalMF" id="TotalMF" type="number"><br>

    </div>
    </div>

    
    <input type="button" class="calcular" value="Calcular" onclick="calcularP()"> 
    <input type="submit" class="guardar" name="Guardar"> 
    <input type="button" class="nuevo" value="Nuevo" onclick="sereseteolapagina()">
    
    


            </form>
    </select>
<script>
    $(document).ready(function() {
        $('#Selectgrupo').change(function(){
            var selectedGroup = $(this).val();
            cargarEstudiantes(selectedGroup);
        });
    });

    function cargarEstudiantes(selectedGroup) {
        $.ajax({
            type: "POST",
            url: "datos.php",
            data: { Grupo: selectedGroup },
            success: function(response) {
                $('#listaEstudiantes').html(response);
            }
        });
    }
</script>
</body>
</html>