<?php
/* COOKIES: Es un fichero que se alamacena en el ordenador del usurio que visita 
la web, con el fin de recordar datos o rastrear el comportamiento del mismo en la web*/

// Crear cookies

setcookie("micookie","valor que solo puede ser texto" );

// Cookie con expiracion  con el time para que sea de un año
setcookie("unyear","valor de mi cookies de 365 dias", time()+(60*60*24*365));

header('Location:ver_cookies.php');
?>
