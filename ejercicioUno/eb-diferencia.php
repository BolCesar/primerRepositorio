<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $numeroA = $_GET["numeroA"];
    $numeroB = $_GET["numeroB"];
function escribirAsterisco($numeroA, $numeroB){
    while($numeroA < $numeroB){
        echo "*";
        $numeroA++;
    }
}

/*
function escribirAlmohadilla($numeroA, $numeroB){
    $diferencia=abs($numeroA-$numeroB);
    for ($i=0; $i <$diferencia ; $i++) { 
        echo "#";
    }
}*/

}
?>