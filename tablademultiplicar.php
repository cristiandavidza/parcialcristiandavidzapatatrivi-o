<html>
<head></head>
<body>
<?php
$num = rand(1, 10);
echo "Tabla de multiplicar del $num:\n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $num * $i;
    echo "$num x $i = $resultado\n";
}
?>
</body>
</html>