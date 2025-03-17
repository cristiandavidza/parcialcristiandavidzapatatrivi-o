<html>
<head></head>
<body>
<?php
$estudiantes = [
    ["nombre" => "Ana", "edad" => 20, "calificacion" => 85],
    ["nombre" => "Carlos", "edad" => 22, "calificacion" => 90],
    ["nombre" => "Luis", "edad" => 19, "calificacion" => 78]
];
echo "Resumen de estudiantes:\n";
foreach ($estudiantes as $estudiante) {
    echo "Nombre: " . $estudiante["nombre"] . ", Edad: " . $estudiante["edad"] . ", Calificación: " . $estudiante["calificacion"] . "\n";
}
?>
</body>
</html>