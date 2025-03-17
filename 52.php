<html>
<head></head>
<body>
<?php
$edad = 20;

if ($edad >= 18) {
    echo "Es mayor de edad.\n";
} elseif ($edad >= 13) {
    echo "Es adolescente.\n";
} else {
    echo "Es menor de edad.\n";
}
?>
</body>
</html>

Las estructuras condicionales permiten ejecutar diferentes 
bloques de código según una condición. 
En PHP, puedes usar if, elseif, else