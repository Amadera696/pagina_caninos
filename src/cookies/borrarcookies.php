<?php

if(isset($_COOKIE['micookie']))
{
    unset($_COOKIE['micookie']);
    setcookie('micookie','',time()-100);
}
//para borrarr una cookie hay que caducarla, las cookies se guardan en el equipo

header('Location:ver_cookies.php');
