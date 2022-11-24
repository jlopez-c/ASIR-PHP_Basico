<style>
        fieldset {
            border: 1px solid black;
            width: 350px;
        }

        h1 {
            margin: 0px;
        }

    </style>

<?php

echo "<h3>Agenda Virtual PHP</h3>\n";

echo    "<ol>";
echo        "<li>Mostrar los contactos</li>\n";
echo        "<li>Dar de alta nuevo contacto</li>\n";
echo        "<li>Mostrar datos de un contacto</li>\n";
echo    "</ol>\n";

?>

<form action="#" method="post">
    <p>
        Que opción eliges: 
        <input type="number" name="opcion" min="1" max="3">
        <input type="submit" value="Aceptar" name="aceptar">
    </p>

</form>

<?php
if (isset($_REQUEST["aceptar"])){

    $opcion = $_REQUEST["opcion"];

    if ($opcion == 1){
        $nombre_fichero = "contactos.txt";
        $fd = fopen($nombre_fichero, "r");

        echo    "<h2>Estos son tus contactos:</h2>";
        while(($linea=fgets($fd)) !== false) {
            
            $arrayDatos = explode("-", $linea);
        
            $nombre = $arrayDatos[0];
            $trabajo = $arrayDatos[1];
            $tlf = $arrayDatos[2];
            $direccion = $arrayDatos[3];
            $otras = $arrayDatos[4];

            echo    "<br><hr><br>";
            echo    "<b>Nombre</b>: $nombre\n";
            echo    "   <b>Trabajo</b>: $trabajo\n";
            echo    "   <b>Telefono</b>: $tlf <br>\n";
            echo    "   <b>Direccion</b>: $direccion\n";
            echo    "   <b>Otros</b>: $otras <br>\n";
            echo    "<br><hr><br>";
        
        }
        
        //No olvides cerrar el fichero
        fclose($fd);


    } else if ($opcion == 2) {
    
        echo    "<form action='#' method='get'>";
        echo    "    <fieldset>";
        echo    "        <legend><h1>Contactos</h1></legend>";
        echo    "        <p>Para guardar presione el botón</p>";
        echo    "        <p>Nombre: <input type='text' name='nombre'></p>";
        echo    "        <p>Trabajo: <input type='text' name='trabajo'></p>";
        echo    "        <p>Telefono: <input type='number' name='tlf'></p>";
        echo    "        <p>Dirección: <input type='text' name='direccion'></p>";
        echo    "        <p>Otras: <input type='text' name='otras'></p>";
        echo    "    </fieldset>";
        echo    "    <p>";
        echo    "        <input type='submit' value='Guardar!' name='guardar'>";
        echo    "        <input type='reset' value='Reset'>";
        echo    "    </p>";
        echo    "</form>";
    
    } else if ($opcion == 3) {
        echo    "<form action='ejercicio4.php' method='get'>";
        echo    "        <p>Inserta el nombre de la persona que quieres buscar: </p>";
        echo    "        Nombre: <input type='text' name='nombre_b'>";
        echo    "        <input type='submit' value='Buscar' name='buscar'>";
        echo    "</form>";

        if(isset($_REQUEST["buscar"])){
            $nombre_fichero = "contactos.txt";
            $fd = fopen($nombre_fichero, "r");

            echo    "<h2>Estos son los contactos con el nombre introducido:</h2>";
            while(($linea=fgets($fd)) !== false) {
                
                $nombre_b = $_REQUEST["nombre_b"];

                $arrayDatos = explode("-", $linea);
            
                $nombre = $arrayDatos[0];
                $trabajo = $arrayDatos[1];
                $tlf = $arrayDatos[2];
                $direccion = $arrayDatos[3];
                $otras = $arrayDatos[4];

                if (trim($nombre) == $nombre_b ){
                    echo    "<br><hr><br>";
                    echo    "<b>Nombre</b>: $nombre\n";
                    echo    "   <b>Trabajo</b>: $trabajo\n";
                    echo    "   <b>Telefono</b>: $tlf <br>\n";
                    echo    "   <b>Direccion</b>: $direccion\n";
                    echo    "   <b>Otros</b>: $otras <br>\n";
                    echo    "<br><hr><br>";
                }
            }
            
            //No olvides cerrar el fichero
            fclose($fd);
    
        }
    }
}
?>