<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		header('Location: formulario.php');
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

if (in_array('', $datos, true) || !filter_var($datos['correo'], FILTER_VALIDATE_EMAIL)) {
		http_response_code(422);
		exit('Por favor completa todos los campos con información válida. <a href="formulario.php">Volver al formulario</a>');
}

$datos['edad'] = filter_var($datos['edad'], FILTER_VALIDATE_INT, ['options' => ['min_range' => 18, 'max_range' => 120]]);
$datos['cantidad'] = filter_var($datos['cantidad'], FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 20]]);

if ($datos['edad'] === false || $datos['cantidad'] === false) {
		http_response_code(422);
		exit('La edad o la cantidad no son válidas. <a href="formulario.php">Volver al formulario</a>');
}

$archivo = __DIR__ . DIRECTORY_SEPARATOR . 'datos_registrados.csv';
$handle = fopen($archivo, 'a');
if ($handle === false) {
		http_response_code(500);
		exit('No se pudo guardar la compra.');
}

if (flock($handle, LOCK_EX)) {
		fputcsv($handle, $datos);
		flock($handle, LOCK_UN);
}
fclose($handle);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Compra registrada | Magic Brush</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body class="formulario-pagina">
	<main class="container py-5">
		<div class="confirmacion-compra text-center">
			<div class="confirmacion-icono">✓</div>
			<h1>¡Compra registrada!</h1>
			<p>Gracias, <?php echo htmlspecialchars($datos['nombre'], ENT_QUOTES, 'UTF-8'); ?>. Recibimos tu pedido de <strong><?php echo htmlspecialchars($datos['producto'], ENT_QUOTES, 'UTF-8'); ?></strong>.</p>
			<a href="index.html" class="btn-seleccionar d-inline-block text-decoration-none">Volver al inicio</a>
		</div>
	</main>
</body>
</html>
?>



