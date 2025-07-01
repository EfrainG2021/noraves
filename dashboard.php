<?php include('menu.php'); ?>
<style>
    body { font-family: Arial, sans-serif; background-color: #f7f9fa; color: #333; }
    .container { padding: 20px; }
    h2 { margin-top: 40px; color: #2b7a78; }
    table {
        width: 100%%;
        margin: 20px 0;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    th {
        background-color: #3aafa9;
        color: white;
        padding: 10px;
    }
    td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
    .filter-form {
        background: white;
        padding: 20px;
        border-radius: 6px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        margin-bottom: 20px;
    }
    .filter-form input[type="date"] {
        padding: 6px;
        margin-right: 10px;
    }
    .filter-form input[type="submit"], .filter-form a {
        background-color: #3aafa9;
        color: white;
        text-decoration: none;
        padding: 6px 10px;
        border-radius: 4px;
        margin-right: 10px;
    }
    .filter-form a:hover, .filter-form input[type="submit"]:hover {
        background-color: #2b7a78;
    }
</style>
<div class="container">
    <h1>📊 Dashboard de Registros</h1>
    <form class="filter-form" method="get">
        <label for="fecha">Filtrar por fecha:</label>
        <input type="date" name="fecha" id="fecha" value="<?php echo date('Y-m-d'); ?>">
        <input type="submit" value="Buscar">
        <a href='exportar_diario.php?fecha=<?php echo isset($_GET['fecha']) ? $_GET['fecha'] : date('Y-m-d'); ?>'>Exportar a Excel</a>
    </form>
<?php
$fecha = isset($_GET['fecha']) ? $_GET['fecha'] : date('Y-m-d');
$archivos = ['pedidos.csv', 'bloques.csv', 'bandejas.csv', 'guias.csv'];
foreach ($archivos as $archivo) {
    $tipo = ucfirst(str_replace('.csv','',$archivo));
    echo "<h2>$tipo</h2>";
    echo "<table><tr><th>Registro</th></tr>";
    if (file_exists($archivo)) {
        $rows = file($archivo);
        $hayResultados = false;
        foreach ($rows as $r) {
            if (strpos($r, $fecha) !== false) {
                echo "<tr><td>".htmlspecialchars($r)."</td></tr>";
                $hayResultados = true;
            }
        }
        if (!$hayResultados) {
            echo "<tr><td><em>No hay registros para esta fecha.</em></td></tr>";
        }
    } else {
        echo "<tr><td><em>No se encontró el archivo $archivo.</em></td></tr>";
    }
    echo "</table>";
}
?>
</div>
