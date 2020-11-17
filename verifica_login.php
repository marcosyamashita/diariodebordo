<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 16/11/20
 * Time: 22:40
 */

if(!$_SESSION['usuario']) {
    header('Location: index.php');
    exit();
}
