<html>
<head></head>
<body>
<?php
$correo = "cristia@correo.com";
$valido = false;
for ($i = 0; $i < 17; $i++) {
    if ($correo[$i] == '@') {
        $valido = true;
    }
    if ($correo[$i] == '.' && $valido) {
        echo "El correo '$correo' es válido.\n";
        $valido = false;
    }
}
if (!$valido) {
    echo "El correo '$correo' no es válido.\n";
}
?>

</body>
</html>