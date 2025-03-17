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
Para verificar si una palabra es un palíndromo 
(es decir, que se lee igual al derecho y al revés), 
puedes invertir la palabra y compararla con la original. 
Esto se puede hacer manualmente sin funciones avanzadas.