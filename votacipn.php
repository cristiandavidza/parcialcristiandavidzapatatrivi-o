<html>
<head></head>
<body>
<?php
$candidatos = ["Ana", "Luis"];
$num = rand(0, 1);
$voto = $candidatos[$num];
$votosAna = 0;
$votosLuis = 0;

if ($voto == "Ana") {
    $votosAna++;
} elseif ($voto == "Luis") {
    $votosLuis++;
}
echo "Resultados de la votación:\n";
echo "Ana: $votosAna votos\n";
echo "Luis: $votosLuis votos\n";
?>
</body>
</html>