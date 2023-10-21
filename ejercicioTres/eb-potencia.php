<?php  
$numeroA;
$numeroB;


function potencia(int $numeroA, int $numeroB){
    $resultado=1;
for($i=0; $i <$numeroB; $i++){ 
    $resultado*=$numeroA;
}
echo $resultado;
}




?>