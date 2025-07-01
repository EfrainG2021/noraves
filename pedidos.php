
<?php include('menu.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $f = fopen("pedidos.csv", "a");
  fputcsv($f, [$_POST['cliente'], $_POST['observaciones'], date("Y-m-d H:i:s")]);
  fclose($f);
  echo "<p>✅ Pedido registrado.</p>";
}
?>
<h2>Registrar Pedido</h2>
<form method="post">
  <label>Cliente:</label>
  <input name="cliente" required><br>
  <label>Observaciones:</label>
  <textarea name="observaciones"></textarea><br>
  <button>Registrar</button>
</form>
