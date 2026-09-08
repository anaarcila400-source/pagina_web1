<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: formulario.html');
    exit;
}

$campos = [
    'nombre', 'apellido', 'telefono', 'correo', 'edad', 'sexo',
    'direccion', 'tipo_de_piel', 'producto', 'cantidad', 'metodo_de_pago'
];
$datos = [];

foreach ($campos as $campo) {
    $datos[$campo] = trim((string) ($_POST[$campo] ?? ''));
}

if (in_array('', $datos, true)) {
    exit('Faltan datos. <a href="formulario.php">Volver al formulario</a>');
}

$archivo = __DIR__ . DIRECTORY_SEPARATOR . 'datos_registrados.csv';
$archivoCsv = fopen($archivo, 'a');

if ($archivoCsv === false) {
    exit('No se pudo guardar la información. Revisa los permisos de la carpeta.');
}

fputcsv($archivoCsv, $datos);
fclose($archivoCsv);


?>
