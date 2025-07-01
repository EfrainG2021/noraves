
<h2>Generar Guía de Despacho</h2>
<form method="POST" action="generar_guia.php" class="formulario">
  <label for="pedido_id">Pedido ID:</label>
  <input type="number" name="pedido_id" required>

  <label for="vehiculo">Vehículo:</label>
  <input type="text" name="vehiculo" required>

  <label for="conductor">Conductor:</label>
  <input type="text" name="conductor" required>

  <label for="destino">Destino de Despacho:</label>
  <input type="text" name="destino" required>

  <label for="fecha_salida">Fecha y Hora de Salida:</label>
  <input type="datetime-local" name="fecha_salida" required>

  <button type="submit" class="btn-generar">Generar Guía</button>
</form>
