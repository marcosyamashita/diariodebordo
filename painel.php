<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 16/11/20
 * Time: 22:42
 */

session_start();
include('verifica_login.php');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diário De Bordo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

<h2>Olá,  <?php echo $_SESSION['usuario'];?></h2><h2><a href="logout.php">Sair</a></h2>

<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#">Diário De Bordo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Profile </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                    <a class="dropdown-item" href="#">My account</a>
                    <a class="dropdown-item" href="#">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
    <section id="tabs">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Criar Registro</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Consultar Registro</a>
                            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="true">Relatorios</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <form action="controller/adicionar-atividade.php" method="post">
                                <div class="form-group form-inline row">
                                    <label for="example-date-input" class="col-2 col-form-label">Inicio</label>
                                    <div class="col-8">
                                        <input class="form-control" type="date" value="" name="dateInicio" id="dateInicio">
                                        <input class="form-control" type="time" value="" name="timeInicio" id="timeInicio">
                                    </div>
                                </div>
                                <div class="form-group form-inline row">
                                    <label for="example-date-input" class="col-2 col-form-label">Fim</label>
                                    <div class="col-8">
                                        <input class="form-control" type="date" value="" name="dateFim" id="dateFim">
                                        <input class="form-control" type="time" value="" name="timeFim" id="timeFim">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Titulo:</label>
                                    <div class="col-8">
                                        <input class="form-control" type="text" value="" name="titulo" id="titulo" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Atividade:</label>
                                    <div class="col-8">
                                        <textarea class="form-control" name="atividade" cols="20" rows="5" required></textarea>
                                        <!--<input class="form-control" type="text" value="" id="atividade" rows="5">-->
                                    </div>
                                </div>

                                <input type="submit" value="Gravar"><input type="reset" value="Resetar">

                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

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

                                    <input type="button" value="Aplicar">

                                    <div>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Título</th>
                                                    <th>Data de Início</th>
                                                    <th>Usuário</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>titulo</td>
                                                    <td>data de inicio</td>
                                                    <td>usuario</td>
                                                    <td><button>Editar</button></td>
                                                    <td><button>Excluir</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">

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
            </div>
        </div>
    </section>
</body>

</html>

