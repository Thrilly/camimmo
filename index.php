<?php
include("config.php");
session_start();

if ((isset($_GET['controller']) && isset($_GET['action']))) {
  $controller = $_GET["controller"];  
  $action = $_GET["action"];  
} else {
  $controller = "contact";
  $action = "index";
}
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