<?php
if(isset($_POST['Grupo'])) {
    $grupoSeleccionado = $_POST['Grupo'];

    $conect = mysqli_connect('localhost', 'root', '', '5b_informatica');
    $sql = mysqli_query($conect, "SELECT * FROM estudiantes WHERE id_grupo = '$grupoSeleccionado'");

    $htmlEstudiantes = "<label style='display: block; text-align: center; font-family: 'Poppins', cursive;'>Estudiantes:</label>
    <select id='#listaEstudiantes' name='listaEstudiantes' class='custom-select'>";
    while ($datos = mysqli_fetch_array($sql)) {
        $htmlEstudiantes .= '<option value="'.$datos['id_estudiantes'].'">'.$datos['primer_nombre'].' '.$datos['primer_apellido'].'</option>';
    }

    echo $htmlEstudiantes;
} else {
    $cadena."</select>";
}
?>