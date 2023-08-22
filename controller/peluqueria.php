<?php
public class peluqueria 
{
$mi_primera_variable = "Todo el servicio de peluqueria";
echo '<h1>'.$mi_primera_variable.'</h1>';/* Para mostrar el contenido */
$num1=26;
$num2=24;
echo 'Suma: '.$num1.'+'. $num2.'='. ($num1+$num2);

$year =2019;

echo $year++;
$edad = 55;
echo ($edad+=5)."<br>"."<br>";

//VARIABLES DEL SERVIDOR 

echo $_SERVER['SERVER_ADDR'];

}



?>