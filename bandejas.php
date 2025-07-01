
<?php include('menu.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $f = fopen("bandejas.csv", "a");
  fputcsv($f, [$_POST['bloque_id'], $_POST['tipo'], $_POST['peso'], date("Y-m-d H:i:s")]);
  fclose($f);
  echo "<p>✅ Bandeja registrada.</p>";
}
?>
<h2>Registrar Bandeja</h2>
<form method="post">
  <label>ID Bloque:</label>
  <input name="bloque_id" required><br>
  <label>Tipo de pollo:</label>
  <input name="tipo" required><br>
  <label>Peso (kg):</label>
  <input name="peso" required><br>
  <button>Registrar Bandeja</button>
</form>
