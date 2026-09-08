<style>
	.datos-recibidos {
		max-width: 620px;
		margin: 30px auto;
		padding: 24px;
		background: #ffffff;
		border-radius: 20px;
		box-shadow: 0 10px 30px rgba(212, 75, 128, 0.15);
		font-family: Arial, sans-serif;
	}

	.datos-recibidos h2 {
		margin: 0 0 18px;
		color: #d44b80;
		text-align: center;
	}

	.dato-recibido {
		display: flex;
		justify-content: space-between;
		gap: 20px;
		padding: 12px 0;
		border-bottom: 1px solid #f3d5e1;
		color: #4d2a3a;
	}

	.dato-recibido:last-child {
		border-bottom: 0;
	}

	.dato-recibido strong {
		color: #d44b80;
	}
</style>

<?php 

$a = $_POST ["nombre"];

$b = $_POST ["apellido"];

$c = $_POST ["telefono"];

$d = $_POST ["correo"];

$e = $_POST ["edad"];

$f = $_POST ["sexo"];

$g = $_POST ["tipo_de_piel"];

$h = $_POST ["direccion"];

$producto = $_POST ["producto"] ?? "";
$cantidad = $_POST ["cantidad"] ?? "";
$metodo_de_pago = $_POST ["metodo_de_pago"] ?? "";

$nombre_seguro = htmlspecialchars($a, ENT_QUOTES, "UTF-8");
$producto_seguro = htmlspecialchars($producto, ENT_QUOTES, "UTF-8");
$cantidad_segura = htmlspecialchars($cantidad, ENT_QUOTES, "UTF-8");
$metodo_seguro = htmlspecialchars($metodo_de_pago, ENT_QUOTES, "UTF-8");

?>

<section class="datos-recibidos">
	<h2>Datos de tu pedido</h2>
	<div class="dato-recibido"><span>Nombre</span><strong><?php echo htmlspecialchars($a, ENT_QUOTES, "UTF-8"); ?></strong></div>
	<div class="dato-recibido"><span>Apellido</span><strong><?php echo htmlspecialchars($b, ENT_QUOTES, "UTF-8"); ?></strong></div>
	<div class="dato-recibido"><span>Teléfono</span><strong><?php echo htmlspecialchars($c, ENT_QUOTES, "UTF-8"); ?></strong></div>
	<div class="dato-recibido"><span>Correo</span><strong><?php echo htmlspecialchars($d, ENT_QUOTES, "UTF-8"); ?></strong></div>
	<div class="dato-recibido"><span>Edad</span><strong><?php echo htmlspecialchars($e, ENT_QUOTES, "UTF-8"); ?></strong></div>
	<div class="dato-recibido"><span>Sexo</span><strong><?php echo htmlspecialchars($f, ENT_QUOTES, "UTF-8"); ?></strong></div>
	<div class="dato-recibido"><span>Tipo de piel</span><strong><?php echo htmlspecialchars($g, ENT_QUOTES, "UTF-8"); ?></strong></div>
	<div class="dato-recibido"><span>Dirección</span><strong><?php echo htmlspecialchars($h, ENT_QUOTES, "UTF-8"); ?></strong></div>
</section>

<style>
	body {
		margin: 0;
		font-family: Arial, sans-serif;
		background: linear-gradient(135deg, #fff5f8, #ffb6c9);
		color: #4d2a3a;
	}

	.confirmacion {
		max-width: 620px;
		margin: 40px auto;
		padding: 35px;
		text-align: center;
		background: white;
		border-radius: 24px;
		box-shadow: 0 12px 35px rgba(212, 75, 128, 0.2);
	}

	.confirmacion h1 { color: #d44b80; }
	.confirmacion .check {
		display: inline-grid;
		place-items: center;
		width: 70px;
		height: 70px;
		border-radius: 50%;
		background: #d44b80;
		color: white;
		font-size: 2rem;
	}

	.resumen {
		margin: 20px 0;
		padding: 16px;
		background: #fff5f8;
		border-radius: 12px;
	}

	.boton {
		display: inline-block;
		padding: 12px 22px;
		border-radius: 25px;
		background: #d44b80;
		color: white;
		text-decoration: none;
	}
</style>

<section class="confirmacion">
	<div class="check">✓</div>
	<h1>¡Gracias por tu compra!</h1>
	<p>Hola, <strong><?php echo $nombre_seguro; ?></strong>. Recibimos correctamente tu pedido.</p>
	<div class="resumen">
		<strong>Producto:</strong> <?php echo $producto_seguro; ?><br>
		<strong>Cantidad:</strong> <?php echo $cantidad_segura; ?><br>
		<strong>Método de pago:</strong> <?php echo $metodo_seguro; ?>
	</div>
	<a class="boton" href="index.html">Volver al inicio</a>
</section>
?>