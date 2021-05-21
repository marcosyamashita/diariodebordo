<?php


include "header.php";
?>


<div>
    <form action="relatorio.php" method="POST">
    <div class="form-group form-inline row">
        <label for="example-date-input" class="col-2 col-form-label">Inicio</label>
        <div class="col-8">
            <input class="form-control" type="date" value="" id="dateInicioconsulta">
            <!-- <input class="form-control" type="time" value="" id="timeInicioconsulta"> -->
        </div>
    </div>
    <div class="form-group form-inline row">
        <label for="example-date-input" class="col-2 col-form-label">Fim</label>
        <div class="col-8">
            <input class="form-control" type="date" value="" id="dateFimconsulta">
            <!-- <input class="form-control" type="time" value="" id="timeFimconsulta"> -->

            <input type="submit" value="Emitir Relatorio">
        </div>
    </div>
    </form>
</div>


<?php

include "footer.php";

?>
