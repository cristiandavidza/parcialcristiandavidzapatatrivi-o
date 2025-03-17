<html>
<head></head>
<body>
<?php
$num = rand(1, 100);
if ($num >= 18) {
    echo "Tienes $num años, eres mayor de edad.\n";
} else {
    echo "Tienes $num años, eres menor de edad.\n";
}
?>
</body>
</html>