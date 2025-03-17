<html>
<head></head>
<body>
<?php
$mensaje = "Hola";

function saludar() {
    global $mensaje; 
    echo $mensaje . ", mundo.\n";
}

saludar();
?>

</body>
</html>
Una variable global en PHP está disponible en todos los ámbitos del script.
 Las variables definidas fuera de una función no son accesibles dentro de ella,
 a menos que se declaren como globales con la palabra clave global.