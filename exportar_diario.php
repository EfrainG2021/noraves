<?php
$fecha = isset($_GET['fecha']) ? $_GET['fecha'] : date('Y-m-d');
$archivos = ['pedidos.csv', 'bloques.csv', 'bandejas.csv', 'guias.csv'];

header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename="registros_'.$fecha.'.csv"');

$out = fopen('php://output', 'w');
fputcsv($out, ['Tipo', 'Registro']);

foreach ($archivos as $archivo) {
    if (file_exists($archivo)) {
        $rows = file($archivo);
        foreach ($rows as $r) {
            if (strpos($r, $fecha) !== false) {
                fputcsv($out, [ucfirst(str_replace('.csv','',$archivo)), $r]);
            }
        }
    }
}
fclose($out);
?>
