<html>
<head></head>
<body>
<?php
$num = rand(1, 10);
$intento = 7;
if ($intento == $num) {
    echo "¡Correcto! El número era $num.\n";
} else {
    echo "Incorrecto. El número era $num.\n";
}
?>
</body>
</html>