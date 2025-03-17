<html>
<head></head>
<body>
<?php
$num = rand(5, 15);
$fib1 = 0;
$fib2 = 1;
echo "Serie de Fibonacci hasta $num términos: $fib1, $fib2";
for ($i = 2; $i < $num; $i++) {
    $fib3 = $fib1 + $fib2;
    echo ", $fib3";
    $fib1 = $fib2;
    $fib2 = $fib3;
}
echo ".\n";
?>
</body>
</html>