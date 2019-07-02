<?php

/**
 * Nạp file từ MVC đến index
 */

 include_once 'mvc/route.php';
 include_once 'mvc/controllers/EmployeeController.php';
 include_once 'mvc/models/Database.php';
 include_once 'mvc/models/EmployeeModel.php';

 $app = new \MVC\Route;

 $app->run();
?>