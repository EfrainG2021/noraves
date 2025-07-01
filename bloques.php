
<?php include('menu.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $f = fopen("bloques.csv", "a");
  fputcsv($f, [$_POST['pedido_id'], $_POST['cant'], $_POST['peso'], $_POST['observaciones'], date("Y-m-d H:i:s")]);
  fclose($f);
  echo "<p>✅ Bloque registrado.</p>";
}
?>
<h2>Registrar Bloque de Pesaje</h2>
<form method="post">
  <label>Pedido ID:</label>
  <input name="pedido_id" required><br>
  <label>Cant. Bandejas:</label>
  <input name="cant" required><br>
  <label>Peso Total (kg):</label>
  <input name="peso" required><br>
  <label>Observaciones:</label>
  <textarea name="observaciones"></textarea><br>
  <button>Registrar Bloque</button>
</form>
