<html>
<head></head>
<body>
<?php
$frase = "Hola mundo PHP"; 
$letraBuscada = "o";
$longitud = 14;
$conteo = 0;
for ($i = 0; $i < $longitud; $i++) {
    if ($frase[$i] == $letraBuscada) {
        $conteo++;
    }
}
echo "La letra '$letraBuscada' aparece $conteo veces en la frase.\n";
?>
</body>
</html>