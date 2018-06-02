<?php  
require_once ("FrontController.php");

class contactController extends FrontController
{
	public $dir_view = "contact";
	
	function indexAction(){	
		$this->render($this->dir_view, "index");
	}

	function confirmAction(){	
		$this->loadModel("Messages");
		if ($this->Messages->add($_POST)) {
			$vars = array("message" => "<br><span class='glyphicon glyphicon-check'></span><br>Votre message à été envoyé avec succès<br><br>");
		}else{
			$vars = array("message" => "<br><span class='glyphicon glyphicon-remove-sign'></span><br>Une erreur est survenue, veuillez réessayer plus tard<br><br>");
		}
		// $vars = array("message" => "Votre message à été envoyé avec succès");

		$this->setData($vars);
		$this->render($this->dir_view, "confirm");
	}

	function httpErrorAction(){	
		$this->render($this->dir_view, "httperror");
	}

}
?>