<html>
<head></head>
<body>
<?php
$num = rand(1900, 2100);
if (($num % 4 == 0 && $num % 100 != 0) || ($num % 400 == 0)) {
    echo "El año $num es bisiesto.\n";
} else {
    echo "El año $num no es bisiesto.\n";
}
?>
</body>
</html>