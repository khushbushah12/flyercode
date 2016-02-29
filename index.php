<?php
session_start();

//require the general classes
require("classes/loader.php");
require("classes/basecontroller.php");
require("classes/basemodel.php");

require("classes/menu.php");
//require the model classes
require("models/home.php");
require("models/Database.php");
require("controllers/category.php");
require("controllers/addcart.php");
//require the controller classes
require("controllers/home.php");
define("url", "http://localhost-khushbu/khushbu/ecommerce/category/");
define("url1", "http://localhost-khushbu/khushbu/ecommerce/");
$loader = new Loader($_GET);
$controller = $loader->CreateController();
$controller->ExecuteAction();

?>