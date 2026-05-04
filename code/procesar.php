<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $asunto = htmlspecialchars($_POST['asunto']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

   
    echo "<h1>Mensaje Recibido</h1>";
    echo "<p><strong>De:</strong> " . $nombre . " (" . $correo . ")</p>";
    echo "<p><strong>Asunto:</strong> " . $asunto . "</p>";
    echo "<p><strong>Mensaje:</strong> " . $mensaje . "</p>";
    
} else {
    echo "Acceso denegado. Debes enviar el formulario primero.";
}
?>