<html>
<head></head>
<body>
<?php
$pares = 0;
$impares = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}
echo "Hay $pares números pares y $impares números impares entre 1 y 100.\n";
?>
</body>
</html>