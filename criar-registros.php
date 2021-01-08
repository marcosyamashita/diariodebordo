<?php

include "header.php";

?>


<div class="row">
    <form class="form-group" action="controller/adicionar-atividade.php" method="post">
        <div class="form-group form-inline row">
            <label for="example-date-input" class="col-2 col-form-label">Inicio</label>
            <div class="col-10 row">
                <input class="form-control" type="date" value="" name="dateInicio" id="dateInicio">
                <input class="form-control" type="time" value="" name="timeInicio" id="timeInicio">
            </div>
        </div>
        <div class="form-group form-inline row">
            <label for="example-date-input" class="col-2 col-form-label">Fim</label>
            <div class="col-10 row">
                <input class="form-control" type="date" value="" name="dateFim" id="dateFim">
                <input class="form-control" type="time" value="" name="timeFim" id="timeFim">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Titulo:</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" name="titulo" id="titulo" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Atividade:</label>
            <div class="col-10">
                <textarea class="form-control" name="atividade" cols="20" rows="5" required></textarea>
                <!--<input class="form-control" type="text" value="" id="atividade" rows="5">-->
            </div>
        </div>
        <div class="form-group row">
            <input type="submit" value="Gravar"><input type="reset" value="Resetar">
        </div>
        <br>

    </form>




<?php

include "footer.php";

?>
