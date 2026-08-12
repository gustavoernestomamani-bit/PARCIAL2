<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$consulta = $_POST['consulta'];

$servicios = [
  "Examen de vista - Bs 50",
  "Armazón clásico - Bs 180",
  "Lentes de sol - Bs 120"
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cita reservada</title>
</head>
<body>

  <?php echo "<h1>Cita reservada en Óptica Mirasol</h1>"; ?>

  <?php
    echo "<p>Nombre: " . $nombre . "</p>";
    echo "<p>Correo: " . $correo . "</p>";
    echo "<p>Consulta: " . $consulta . "</p>";
  ?>

  <h2>Nuestros servicios</h2>
  <ul>
    <?php
      foreach ($servicios as $servicio) {
        echo "<li>" . $servicio . "</li>";
      }
    ?>
  </ul>

  <?php echo "<p>Te atiende Gustavo Ernesto Mamani Cutipa</p>"; ?>

</body>
</html>
