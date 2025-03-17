<html>
<head></head>
<body>
<?php
$num = rand(100, 1000);
$saldo = $num;
$operaciones = ["consultar", "depositar", "retirar"];
$opcion = $operaciones[rand(0, 2)];
$monto = rand(10, 500);
if ($opcion == "consultar") {
    echo "Tu saldo actual es: $saldo.\n";
} elseif ($opcion == "depositar") {
    $saldo += $monto;
    echo "Has depositado $monto. Tu nuevo saldo es: $saldo.\n";
} elseif ($opcion == "retirar") {
    if ($monto <= $saldo) {
        $saldo -= $monto;
        echo "Has retirado $monto. Tu nuevo saldo es: $saldo.\n";
    } else {
        echo "No tienes suficiente saldo para retirar $monto.\n";
    }
} else {
    echo "Opción no válida.\n";
}
?>
</body>
</html>