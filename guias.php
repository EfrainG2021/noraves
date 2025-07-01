
<?php include('menu.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $f = fopen("guias.csv", "a");
  fputcsv($f, [$_POST['pedido_id'], $_POST['vehiculo'], $_POST['conductor'], date("Y-m-d H:i:s")]);
  fclose($f);
  echo "<p>✅ Guía generada.</p>";
}
?>
<h2>Generar Guía</h2>
<form method="post">
  <label>Pedido ID:</label>
  <input name="pedido_id" required><br>
  <label>Vehículo:</label>
  <input name="vehiculo" required><br>
  <label>Conductor:</label>
  <input name="conductor" required><br>
  <button>Generar Guía</button>
</form>
