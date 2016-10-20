<?php
/**
 * Created by PhpStorm.
 * User: charles-nicolas
 * Date: 20/10/16
 * Time: 01:13
 */

session_start();
session_destroy();
header('Location: TP1.php');
?>