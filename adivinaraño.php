<html>
<head></head>
<body>
<?php
$edad = rand(1, 100);
$añoActual = date("Y");
$añoNacimiento = $añoActual - $edad;
echo "Edad generada aleatoriamente: $edad años\n";
echo "Si tienes $edad años, naciste aproximadamente en el año $añoNacimiento.\n";
?>
</body>
</html>
