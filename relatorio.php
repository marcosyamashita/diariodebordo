<?php

require __DIR__.'/vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadHtml('<b>Olá Mundo</b>');

$dompdf->render();

$dompdf->output();

header('Content-type: application/pdf');

echo $dompdf->output();