<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 08/01/21
 * Time: 02:40
 */

include "header.php";
?>


<div>

    <div class="form-group form-inline row">
        <label for="example-date-input" class="col-2 col-form-label">Inicio</label>
        <div class="col-8">
            <input class="form-control" type="date" value="" id="dateInicioconsulta">
            <input class="form-control" type="time" value="" id="timeInicioconsulta">
        </div>
    </div>
    <div class="form-group form-inline row">
        <label for="example-date-input" class="col-2 col-form-label">Fim</label>
        <div class="col-8">
            <input class="form-control" type="date" value="" id="dateFimconsulta">
            <input class="form-control" type="time" value="" id="timeFimconsulta">

            <input type="button" value="Emitir Relatorio">
        </div>
    </div>

</div>


<?php

include "footer.php";

?>
