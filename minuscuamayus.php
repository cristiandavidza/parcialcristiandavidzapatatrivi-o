<html>
<head></head>
<body>
<?php
$frase = "hola";
$convertida = "";
for ($i = 0; $i < 4; $i++) { 
    if ($frase[$i] == 'a') {
        $convertida .= 'A';
    } elseif ($frase[$i] == 'b') {
        $convertida .= 'B';
    } elseif ($frase[$i] == 'c') {
        $convertida .= 'C';
    } elseif ($frase[$i] == 'd') {
        $convertida .= 'D';
    } elseif ($frase[$i] == 'e') {
        $convertida .= 'E';
    } elseif ($frase[$i] == 'h') {
        $convertida .= 'H';
    } elseif ($frase[$i] == 'l') {
        $convertida .= 'L';
    } elseif ($frase[$i] == 'o') {
        $convertida .= 'O';
    } else {
        $convertida .= $frase[$i];
    }
}
echo "La frase convertida a mayúsculas es: $convertida.\n";
?>
</body>
</html>