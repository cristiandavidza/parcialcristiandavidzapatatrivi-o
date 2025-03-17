<html>
<head></head>
<body>
<?php
$num = rand(1, 10);
$factorial = 1;
for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}
echo "El factorial de $num es: $factorial.\n";
?>
</body>
</html>