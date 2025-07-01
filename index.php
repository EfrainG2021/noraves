
<?php include('menu.php'); ?>
<h2>📋 Resumen del Día</h2>
<?php
function mostrarCSV($archivo, $titulos) {
  if (!file_exists($archivo)) return;
  echo "<h3>" . ucfirst(str_replace(".csv", "", $archivo)) . "</h3><table><tr>";
  foreach ($titulos as $titulo) echo "<th>$titulo</th>";
  echo "</tr>";
  foreach (array_reverse(file($archivo)) as $linea) {
    $datos = str_getcsv($linea);
    if (strpos($datos[count($datos)-1], date('Y-m-d')) !== false) {
      echo "<tr>";
      foreach ($datos as $dato) echo "<td>" . htmlspecialchars($dato) . "</td>";
      echo "</tr>";
    }
  }
  echo "</table>";
}
mostrarCSV("pedidos.csv", ["Cliente", "Obs", "Fecha"]);
mostrarCSV("bloques.csv", ["Pedido", "Cant", "Peso", "Obs", "Fecha"]);
mostrarCSV("bandejas.csv", ["Bloque", "Tipo", "Peso", "Fecha"]);
mostrarCSV("guias.csv", ["Pedido", "Vehículo", "Conductor", "Fecha"]);
?>
