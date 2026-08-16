<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedido recibido en Juguería La Naranja</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Pedido recibido en Juguería La Naranja</h1>

  <?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $jugo = $_POST['jugo'];

    echo '<p>Nombre: ' . $nombre . '</p>';
    echo '<p>Correo: ' . $correo . '</p>';
    echo '<p>Qué jugo querés: ' . $jugo . '</p>';

    $carta = [
      'Jugo de naranja - Bs 8',
      'Licuado de plátano - Bs 10',
      'Vitamina completa - Bs 15'
    ];

    echo '<p>Carta de la juguería:</p>';
    echo '<ul>';
    foreach ($carta as $item) {
      echo '<li>' . $item . '</li>';
    }
    echo '</ul>';

    echo '<p>Te atiende José Manuel Vargas Diaz</p>';
  ?>
</body>
</html>
