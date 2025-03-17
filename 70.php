<html>
<head></head>
<body>
<?php
$palabra = "programacion"; 
$vocales = 0;

// Contar vocales
for ($i = 0; $i < 11; $i++) { 
    if ($palabra[$i] == 'a' || $palabra[$i] == 'e' || $palabra[$i] == 'i' || $palabra[$i] == 'o' || $palabra[$i] == 'u') {
        $vocales++;
    }
}

echo "La palabra '$palabra' tiene $vocales vocales.\n";
?>
</body>
</html>
Para contar las vocales, puedes recorrer la palabra y verificar cada letra.