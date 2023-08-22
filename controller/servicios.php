<?php
echo "<h1>Conoce nuestros servicios y obten uno de ellos</h1>";

//Numero ingresa por la url 
if(isset($_GET{'numero'})){
    $numero =(int)$_GET{'numero'};
}
else{
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del $numero</h1>";

$contador = 0;
while($contador<=10){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}


?>