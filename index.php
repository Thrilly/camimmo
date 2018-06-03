<?php
include("config.php");
session_start();

$controller = (isset($_GET['controller'])) ? $_GET["controller"] : "contact";
$action = (isset($_GET['action'])) ? $_GET["action"] : "index";
$controller .= "Controller";
$action .= "Action";

if (file_exists("controllers/$controller.php")){
  require_once("controllers/$controller.php");
  if (class_exists($controller) && method_exists($controller, $action)){
    $c = new $controller();
    $c->$action();
  }else{
    require_once("controllers/indexController.php");
    $c = new contactController();
    $c->httpErrorAction();
  }
}else{
  require_once("controllers/indexController.php");
  $c = new contactController();
  $c->httpErrorAction();
}


?>