<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 17/11/20
 * Time: 00:26
 */

session_start();
session_destroy();
header('Location: index.php');
exit();