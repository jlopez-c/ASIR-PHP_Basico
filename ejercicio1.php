<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        form fieldset{
            background-color: #e6e6ff;
            border: solid #8686ff 3px;
        }

        form fieldset legend{
            background-color: white;
            border: solid #8686ff 2px;
        }

        input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
        }

    </style>

</head>
<body>

    <form name="form" action="ejercicio1.php" method="get">
        <fieldset>
            <legend>Formulario</legend>
            <p>Escriba el alto y ancho (0 < numeros &le; 100) y mostraré un rectángulo de ese tamaño.</p>
            <p><b>Ancho: </b><input type="number" name="ancho" min="0" max="10" step="none"> </p>
            <p><b>Alto: </b><input type="number" name="alto" min="0" max="10"> </p>
            <p>
                <input type="submit" value="Dibujar" name="dibujar">
                <input type="reset" value="Borrar">
            </p>
        </fieldset>
    </form>
<?php
if(isset($_REQUEST["dibujar"])) {

    if(isset($_REQUEST["ancho"]))
        $ancho = trim(strip_tags($_REQUEST["ancho"]));
    if(isset($_REQUEST["alto"]))
        $alto = trim(strip_tags($_REQUEST["alto"]));

    print   "<p>Ancho: $ancho</p>\n";
    print   "<p>Alto: $alto</p>\n";
    print   "<br>\n";

    for($i=0; $i < $alto; $i++){
        for($j=0; $j < $ancho; $j++){
            print   " * ";
        }
        print   "<br>\n";
    }
}

?>

    
</body>
</html>