<html>
<head></head>
<body>
<?php
$palabra = "Hola";
$invertida = "";
$longitud = 4; 
for ($i = $longitud - 1; $i >= 0; $i--) {
    $invertida .= $palabra[$i];
}
echo "La palabra invertida es: $invertida.\n";
?>
</body>
</html>