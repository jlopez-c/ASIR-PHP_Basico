<?php

$nombre_archivo = "datos.txt";

$archivo = fopen($nombre_archivo, "r");

while (!feof($archivo)) {
    $lectura = fgets($archivo);
    echo $lectura."<br>";
}

fclose($archivo);

?>