<?php
$productos = [
    'Pinceles de maquillaje',
    'Labiales profesionales',
    'Delineadores precision',
    'Rubor profesional',
    'Iluminador brillante',
    'Kit completo de maquillaje'
];
$metodos_pago = ['Tarjeta debito o credito', 'Transferencia bancaria', 'Pago contra entrega'];
$tipos_piel = ['Normal', 'Seca', 'Grasa', 'Mixta', 'Sensible'];
$sexos = ['Femenino', 'Masculino', 'Prefiero no decirlo'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de compra - Magic Brush</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light py-3 formulario-nav">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="index.html">✦ Magic Brush</a>
            <a class="btn btn-light btn-sm text-pink" href="index.html">Inicio</a>
        </div>
    </nav>

    <main>
        <section class="formulario-seccion formulario-pagina" id="formulario-compra">
            <div class="container formulario-contenedor">
                <div class="formulario-encabezado">
                    <span class="formulario-etiqueta">✦ Compra con estilo</span>
                    <h1>Completa tu pedido</h1>
                    <p>Escribe tus datos y selecciona el producto que quieres recibir.</p>
                </div>

                <form class="formulario-compra formulario-php" method="post" action="datos.php">
                    <div class="formulario-bloque">
                        <div class="bloque-titulo"><span>01</span><h2>Datos personales</h2></div>
                        <div class="formulario-campos">
                            <div class="col-md-6"><label for="nombre">Nombre</label><input type="text" id="nombre" name="nombre" required></div>
                            <div class="col-md-6"><label for="apellido">Apellido</label><input type="text" id="apellido" name="apellido" required></div>
                            <div class="col-md-6"><label for="telefono">Teléfono</label><input type="tel" id="telefono" name="telefono" required></div>
                            <div class="col-md-6"><label for="correo">Correo electrónico</label><input type="email" id="correo" name="correo" required></div>
                            <div class="col-md-6"><label for="edad">Edad</label><input type="number" id="edad" name="edad" min="1" max="120" required></div>
                            <div class="col-md-6"><label for="sexo">Sexo</label><select id="sexo" name="sexo" required><option value="">Selecciona</option><?php foreach ($sexos as $sexo): ?><option value="<?= htmlspecialchars($sexo) ?>"><?= htmlspecialchars($sexo) ?></option><?php endforeach; ?></select></div>
                            <div class="col-12"><label for="direccion">Dirección de entrega</label><input type="text" id="direccion" name="direccion" required></div>
                            <div class="col-12"><label for="tipo_de_piel">Tipo de piel</label><select id="tipo_de_piel" name="tipo_de_piel" required><option value="">Selecciona</option><?php foreach ($tipos_piel as $tipo): ?><option value="<?= htmlspecialchars($tipo) ?>"><?= htmlspecialchars($tipo) ?></option><?php endforeach; ?></select></div>
                        </div>
                    </div>

                    <div class="formulario-bloque">
                        <div class="bloque-titulo"><span>02</span><h2>Datos de la compra</h2></div>
                        <div class="formulario-campos">
                            <div class="col-md-8"><label for="producto">Producto</label><select id="producto" name="producto" required><option value="">Selecciona</option><?php foreach ($productos as $producto): ?><option value="<?= htmlspecialchars($producto) ?>"><?= htmlspecialchars($producto) ?></option><?php endforeach; ?></select></div>
                            <div class="col-md-4"><label for="cantidad">Cantidad</label><input type="number" id="cantidad" name="cantidad" min="1" max="20" value="1" required></div>
                            <div class="col-12"><label for="metodo_de_pago">Método de pago</label><select id="metodo_de_pago" name="metodo_de_pago" required><option value="">Selecciona</option><?php foreach ($metodos_pago as $metodo): ?><option value="<?= htmlspecialchars($metodo) ?>"><?= htmlspecialchars($metodo) ?></option><?php endforeach; ?></select></div>
                        </div>
                    </div>

                    <button type="submit" class="btn-enviar-formulario">Guardar y enviar pedido <span>→</span></button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
