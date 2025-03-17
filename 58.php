<html>
<head></head>
<body>
<?php
echo "Introduce tu nombre: ";
$nombre = trim(fgets(STDIN));

echo "Hola, $nombre.\n";
?>
</body>
</html>
En entornos de consola, se usa fgets(STDIN) para leer entradas del usuario.