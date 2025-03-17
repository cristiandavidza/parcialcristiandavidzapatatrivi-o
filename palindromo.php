<html>
<head></head>
<body>
<?php
$palabra = "ana";
$invertida = "";
$longitud = 3;
for ($i = $longitud - 1; $i >= 0; $i--) {
    $invertida .= $palabra[$i];
}
if ($palabra == $invertida) {
    echo "La palabra '$palabra' es un palíndromo.\n";
} else {
    echo "La palabra '$palabra' no es un palíndromo.\n";
}
?>
</body>
</html>