<html>
<head></head>
<body>
<?php
$palabra = "programacion"; 
$longitud = 11; 
$vocales = 0;
for ($i = 0; $i < $longitud; $i++) {
    if ($palabra[$i] == 'a' || $palabra[$i] == 'e' || $palabra[$i] == 'i' || $palabra[$i] == 'o' || $palabra[$i] == 'u') {
        $vocales++;
    }
}
echo "La palabra '$palabra' tiene $vocales vocales.\n";
?>
</body>
</html>