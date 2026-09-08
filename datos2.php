<?php
$nombre = htmlspecialchars($_POST['nombre'] ?? 'cliente', ENT_QUOTES, 'UTF-8');
$producto = htmlspecialchars($_POST['producto'] ?? 'tu producto', ENT_QUOTES, 'UTF-8');
$cantidad = htmlspecialchars($_POST['cantidad'] ?? '1', ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gracias por tu compra | Magic Brush</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<style>
		.confirmacion-pagina {
			min-height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 2rem 1rem;
			background: linear-gradient(135deg, #fff5f8 0%, #ffe0eb 50%, #ffb6c9 100%);
		}

		.confirmacion-tarjeta {
			width: min(100%, 650px);
			padding: clamp(2rem, 6vw, 4rem);
			text-align: center;
			background: rgba(255, 255, 255, 0.94);
			border: 1px solid rgba(212, 75, 128, 0.15);
			border-radius: 2rem;
			box-shadow: 0 20px 55px rgba(212, 75, 128, 0.2);
			animation: aparecer 0.7s ease both;
		}

		.confirmacion-icono {
			width: 86px;
			height: 86px;
			display: grid;
			place-items: center;
			margin: 0 auto 1.5rem;
			border-radius: 50%;
			background: linear-gradient(135deg, #d44b80, #ff6f9f);
			color: white;
			font-size: 2.6rem;
		}

		.confirmacion-titulo {
			color: #d44b80;
			font-weight: 700;
			font-size: clamp(2rem, 6vw, 3.4rem);
			margin-bottom: 1rem;
		}

		.confirmacion-texto {
			color: #666;
			font-size: 1.1rem;
			line-height: 1.7;
		}

		.resumen-pedido {
			margin: 1.5rem 0 2rem;
			padding: 1rem;
			border-radius: 1rem;
			background: #fff5f8;
			color: #4d2a3a;
		}

		.resumen-pedido strong {
			color: #d44b80;
		}

		.btn-confirmacion {
			display: inline-block;
			padding: 0.85rem 1.7rem;
			border-radius: 50px;
			background: linear-gradient(135deg, #d44b80, #ff6f9f);
			color: white;
			font-weight: 600;
			text-decoration: none;
			transition: transform 0.25s ease, box-shadow 0.25s ease;
		}

		.btn-confirmacion:hover {
			color: white;
			transform: translateY(-3px);
			box-shadow: 0 8px 20px rgba(212, 75, 128, 0.3);
		}

		@keyframes aparecer {
			from { opacity: 0; transform: translateY(25px); }
			to { opacity: 1; transform: translateY(0); }
		}
	</style>
</head>
<body>
	<main class="confirmacion-pagina">
		<section class="confirmacion-tarjeta">
			<div class="confirmacion-icono" aria-hidden="true">✓</div>
			<p class="text-pink fw-semibold mb-2">MAGIC BRUSH</p>
			<h1 class="confirmacion-titulo">¡Gracias por tu compra!</h1>
			<p class="confirmacion-texto">
				Hola, <strong><?php echo $nombre; ?></strong>. Recibimos tu pedido y pronto nos pondremos en contacto contigo para confirmar los detalles.
			</p>
			<div class="resumen-pedido">
				Producto: <strong><?php echo $producto; ?></strong><br>
				Cantidad: <strong><?php echo $cantidad; ?></strong>
			</div>
			<a class="btn-confirmacion" href="index.html">Volver al inicio</a>
			<a class="btn-confirmacion ms-2" href="compras.html">Seguir comprando</a>
		</section>
	</main>
</body>
</html>



