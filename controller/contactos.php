<?php
$destinatario = 'amdera696@gmail.com';
$nombre = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$header =  "Solicito un servicio con los siguientes datos:";

$mensaje_completo = "Hola, yo " . $nombre . ". Tengo el siguiente comentario: " . $comments;

try {
    if (mail($destinatario, "Solicitud de Servicio de",$mensaje_completo, $header)) {
        echo "<script>alert('Mensaje enviado correctamente');</script>";
        echo "<script>setTimeout(\"location.href='../view/contactosform.html'\", 5000);</script>";
    } else {
        throw new Exception('Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.');
    }
} catch (Exception $e) {
    echo "<script>alert('Error al enviar el mensaje: " . $e->getMessage() . "');</script>";
    echo "<script>setTimeout(\"location.href='../view/contactosform.html'\", 5000);</script>";
}
?>