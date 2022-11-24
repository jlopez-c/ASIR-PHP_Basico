<?php
//Dados Jugador 1
$j1_1=rand(1,6);
$j1_2=rand(1,6);
$j1_3=rand(1,6);
$j1_4=rand(1,6);
$j1_5=rand(1,6);

$total1= $j1_1 + $j1_2 + $j1_3 + $j1_4 + $j1_5;


//Dados Jugador 2
$j2_1=rand(1,6);
$j2_2=rand(1,6);
$j2_3=rand(1,6);
$j2_4=rand(1,6);
$j2_5=rand(1,6);

$total2 = $j2_1 + $j2_2 + $j2_3 + $j2_4 + $j2_5;


echo    "<h2>Jugador 1</h2>\n";
echo    "<img src='img/$j1_1.jpg' width='90px'>\n";
echo    "<img src='img/$j1_2.jpg' width='90px'>\n";
echo    "<img src='img/$j1_3.jpg' width='90px'>\n";
echo    "<img src='img/$j1_4.jpg' width='90px'>\n";
echo    "<img src='img/$j1_5.jpg' width='90px'>\n";

echo    "<br>\n";

echo    "<h2>Jugador 1</h2>\n";
echo    "<img src='img/$j2_1.jpg' width='90px'>\n";
echo    "<img src='img/$j2_2.jpg' width='90px'>\n";
echo    "<img src='img/$j2_3.jpg' width='90px'>\n";
echo    "<img src='img/$j2_4.jpg' width='90px'>\n";
echo    "<img src='img/$j2_5.jpg' width='90px'>\n";

if($total1 > $total2) {
    echo "<p>En conjunto, ha ganado el Jugador1</p>\n";
} elseif($total1 == $total2) {
    echo "<p>Empate</p>\n";
} else {
    echo "<p>En conjunto, ha ganado el Jugador2</p>\n";
}

?>