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

<h2>Olá,  <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</a></h2>;
