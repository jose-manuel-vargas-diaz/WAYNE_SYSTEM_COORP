<?php
$nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8') : '';
$correo = isset($_POST['correo']) ? htmlspecialchars($_POST['correo'], ENT_QUOTES, 'UTF-8') : '';
$mensaje = isset($_POST['mensaje']) ? htmlspecialchars($_POST['mensaje'], ENT_QUOTES, 'UTF-8') : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
</head>
<body>
  <h1>Datos recibidos</h1>
  <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
  <p><strong>Correo:</strong> <?php echo $correo; ?></p>
  <p><strong>Mensaje:</strong> <?php echo nl2br($mensaje); ?></p>
</body>
</html>
