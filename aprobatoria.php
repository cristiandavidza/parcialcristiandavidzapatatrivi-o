<html>
<head></head>
<body>
<?php
$num = rand(0, 100);
if ($num >= 60) {
    echo "Tu calificación es $num: Aprobatoria.\n";
} else {
    echo "Tu calificación es $num: Reprobatoria.\n";
}
?>
</body>
</html>