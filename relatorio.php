<?php

require __DIR__.'/vendor/autoload.php';

if (isset($_POST['dateInicioConsulta'] & $_POST['dateFimConsulta'])){

    $dateInicioConsulta = $_POST['dateInicioConsulta'];
    $dateFimConsulta = $_POST['dateFimConsulta'];

    $query = "SELECT * FROM atividade WHERE dateInicio BETWEEN '{$dateInicioConsulta}' AND '{$dateFimConsulta}'";
    $resultado = mysqli_query($conexao, $query);

    $printerphp =
    while ($exibe = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>{$exibe['titulo']}</td>";
        echo "<td>{$exibe['atividade']}</td>";
        echo "<td>". date('d/m/Y', strtotime($exibe['dateInicio'])). "</td>";
        echo "<td>{$exibe['timeInicio']}</th>";
        echo "<td>{$exibe['timeFim']}</th>";
        echo "<td>{$exibe['usuario']}</td>";
        echo "</tr>";
    } ?>


use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadHtml('

<h1>Relatorio de Atividades - Diario de Bordo</h1>
<br>
<br>
<div>
        <table class="table">
            <thead class="table-dark table-bordered text-center">
            <tr>
                <th>Título</th>
                <th>Atividade</th>
                <th>Data de Início</th>
                <th>Hora Inicio</th>
                <th>Hora Fim</th>
                <th>Usuário</th>
                <th colspan="2">Ações</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <?php
        
        mysqli_close($conexao);
}
        ?>
    </div>


');

$dompdf->render();

$dompdf->output();

header('Content-type: application/pdf');

echo $dompdf->output();