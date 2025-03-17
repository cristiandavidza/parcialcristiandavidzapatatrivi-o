<html>
<head></head>
<body>
<?php
$dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
$dia = 13;
$mes = 3;
$anio = 2025;
$indice = ($anio + $mes + $dia) % 7;
echo "El $dia/$mes/$anio es un " . $dias[$indice] . ".\n";
?>
</body>
</html>