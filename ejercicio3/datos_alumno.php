<?php

//print "<pre>";print_r($_REQUEST);print "</pre>";

$nombre = trim(strip_tags($_REQUEST["nombre"]));
$telefono = trim(strip_tags($_REQUEST["tlf"]));
$ensenanza = $_REQUEST["radio"];
$matricula =  $_REQUEST["matriculado"];
$tipo_dato = $_REQUEST["tipo_dato"];

if($matricula) {
    $texto = "está matriculado";
} else {
    $texto = "no está matriculado";
}

//Comprobacion para no pasasr de pantalla al dejar campos vacios.
if(!$nombre || !$telefono || !$ensenanza) {
    echo "Porfavor, introduzca todos los datos.";

} else if ($tipo_dato == "pantalla") {
    echo "El alumno <b>$nombre</b>, con teléfono <b>$telefono</b>, <b>$texto</b> en <b>$ensenanza</b>";

} else if ($tipo_dato == "archivo") {
    $nombre_archivo = "datos.txt";

    $archivo = fopen($nombre_archivo, "w");

    fwrite($archivo, "El alumno <b>$nombre</b>, con teléfono <b>$telefono</b>, <b>$texto</b> en <b>$ensenanza</b>");

    fclose($archivo);

    echo "<a href='mostrardatos.php'>Mostrar archivo</b></a>";

} else {
    echo "Algo está fallando";
}


?>