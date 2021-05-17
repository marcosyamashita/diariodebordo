<?php

include "header.php";


?>


<div></div>
    <form method="post">
        <div class="form-group form-inline row">
            <label for="example-date-input" class="col-2 col-form-label">Inicio</label>
                <input class="form-control" type="date" value="" name="dateInicioConsulta" id="dateInicioConsulta">
                <input class="" type="submit" value="Aplicar">
        </div>

        <?php

        if (isset($_POST['dateInicioConsulta'])){

        $dateInicioConsulta = $_POST['dateInicioConsulta'];

        $query = "SELECT * FROM atividade where dateInicio = '{$dateInicioConsulta}'";
        $resultado = mysqli_query($conexao, $query);


        ?>
    </form>

    <div>
        <table class="table">
            <thead class="table-dark table-bordered text-center">
            <tr>
                <th>Título</th>
                <th>Atividade</th>
                <th>Data de Início</th>
                <th>Usuário</th>
                <th colspan="2">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php
            //Exibe resultados da tabela
            while ($exibe = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>{$exibe['titulo']}</td>";
                echo "<td>{$exibe['atividade']}</td>";
                echo "<td>". date('d/m/Y', strtotime($exibe['dateInicio'])). "</td>";
                echo "<td>{$exibe['usuario']}</td>";
                echo "<td class='text-center'><form action='controller/editar-atividade.php' method='post'><button type='submit' name='id_atividade' value='{$exibe['id_atividade']}'>Editar</button></form></td>";
                echo "<td class='text-center'><form action='controller/excluir-atividade.php' method='post'><button type='submit'>Excluir</button></form></td>";
                echo "</tr>";
            } ?>
            </tbody>
        </table>
        <?php

        mysqli_close($conexao);
        }
        ?>
    </div>

</div>


<?php

include "footer.php";

?>