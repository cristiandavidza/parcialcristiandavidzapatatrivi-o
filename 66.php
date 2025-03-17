<html>
<head></head>
<body>
<?php
$estudiantes = [
    ["nombre" => "Ana", "edad" => 20, "calificacion" => 90],
    ["nombre" => "Luis", "edad" => 22, "calificacion" => 85]
];
foreach ($estudiantes as $estudiante) {
    echo "Nombre: " . $estudiante["nombre"] . ", Edad: " . $estudiante["edad"] . ", Calificación: " . $estudiante["calificacion"] . "\n";
}
?>
</body>
</html>
Podrías usar un arreglo asociativo para almacenar datos de estudiantes,
 como nombres, edades y calificaciones.