<html>
<head></head>
<body>
<?php
$num = rand(-50, 50);
if ($num > 0) {
    echo "El número $num es positivo.\n";
} elseif ($num < 0) {
    echo "El número $num es negativo.\n";
} else {
    echo "El número es cero.\n";
}
?>
</body>
</html>