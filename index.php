<?php
session_start();
error_reporting(E_ALL);
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once "./mvc/core/App.php";
require_once "./mvc/core/Controller.php";
require_once "./mvc/core/DB.php";
$myApp = new App();
?>