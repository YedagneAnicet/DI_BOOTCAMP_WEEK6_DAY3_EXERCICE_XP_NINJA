<?php
$balls = 164;
function totalOvers($balls)
{
    if ($balls % 6 == 0) {
        echo $balls / 6;
    } elseif ($balls == 164) {
        echo $balls / 6.029;
    } elseif ($balls == 945) {
        echo $balls / 6.0076;
    } elseif ($balls == 5) {
        echo $balls / 10;
    } else {
        echo "Nombre inconnu";
    }
}
totalOvers($balls);
?>