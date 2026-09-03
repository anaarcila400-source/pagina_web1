<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de compra | Magic Brush</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  </head>
  <body class="formulario-pagina">
    <nav class="navbar navbar-expand-lg py-3 formulario-nav">
      <div class="container">
        <a class="navbar-brand fw-bold text-white" href="index.html">✦ Magic Brush</a>
        <a class="btn btn-outline-light btn-sm" href="compras.html#productos">Ver productos</a>
      </div>
    </nav>

    <main class="container py-5">
      <div class="formulario-encabezado text-center text-white mb-4">
        <p class="text-uppercase small fw-bold mb-2">Compra fácil y segura</p>
        <h1 class="fw-bold">Completa tu pedido</h1>
        <p class="mb-0">Déjanos tus datos personales y elige tu producto favorito.</p>
      </div>

      <form class="formulario-compra" method="post" action="datos.php">
        <section>
          <h2>Datos personales</h2>
          <div class="row g-3">
            <div class="col-md-6"><label for="nombre">Nombre</label><input type="text" id="nombre" name="nombre" maxlength="80" required></div>
            <div class="col-md-6"><label for="apellido">Apellido</label><input type="text" id="apellido" name="apellido" maxlength="80" required></div>
            <div class="col-md-6"><label for="telefono">Teléfono</label><input type="tel" id="telefono" name="telefono" maxlength="25" required></div>
            <div class="col-md-6"><label for="correo">Correo electrónico</label><input type="email" id="correo" name="correo" maxlength="120" required></div>
            <div class="col-md-4"><label for="edad">Edad</label><input type="number" id="edad" name="edad" min="1" max="120" required></div>
            <div class="col-md-4"><label for="sexo">Sexo</label><select id="sexo" name="sexo" required><option value="">Selecciona</option><option>Femenino</option><option>Masculino</option><option>Prefiero no decirlo</option></select></div>
            <div class="col-md-4"><label for="tipo_de_piel">Tipo de piel</label><select id="tipo_de_piel" name="tipo_de_piel" required><option value="">Selecciona</option><option>Normal</option><option>Seca</option><option>Mixta</option><option>Grasa</option><option>Sensible</option></select></div>
            <div class="col-12"><label for="direccion">Dirección de entrega</label><input type="text" id="direccion" name="direccion" maxlength="180" required></div>
          </div>
        </section>

        <section>
          <h2>Datos de la compra</h2>
          <div class="row g-3">
            <div class="col-md-8"><label for="producto">Producto</label><select id="producto" name="producto" required><option value="">Selecciona un producto</option><option>Pinceles de maquillaje</option><option>Paleta de Sombras 48</option><option>Base Profesional</option><option>Labiales Profesionales</option><option>Delineadores Precisión</option><option>Kit Completo Iniciante</option><option>Corrector de Ojeras</option><option>Rubor Profesional</option><option>Bronceador Luxe</option><option>Iluminador Brillante</option><option>Spray Fijador 24H</option><option>Removedor Premium</option></select></div>
            <div class="col-md-4"><label for="cantidad">Cantidad</label><input type="number" id="cantidad" name="cantidad" min="1" max="20" value="1" required></div>
            <div class="col-12"><label for="metodo_de_pago">Método de pago</label><select id="metodo_de_pago" name="metodo_de_pago" required><option value="">Selecciona un método</option><option>Tarjeta débito o crédito</option><option>Transferencia bancaria</option><option>Pago contra entrega</option></select></div>
          </div>
        </section>

        <button type="submit" class="btn-seleccionar mt-4">Confirmar compra</button>
      </form>
    </main>
  </body>
</html>
