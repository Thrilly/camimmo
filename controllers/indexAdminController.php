<?php  
require_once ("AdminController.php");

class indexAdminController extends AdminController
{
	public $dir_view = "indexAdmin";
	
	function indexAction(){	
		$this->loadModel("Messages");
		$msgs = $this->Messages->getMessages();
		$this->setData(array(
			"msgs" => $msgs,
		));
		$this->render($this->dir_view, "index");
	}

	function httpErrorAction(){	
		$this->render($this->dir_view, "httperror");
	}

	function loginAction(){
		$this->render($this->dir_view, "login");
	}

	function loginProcessAction(){
		$this->loadModel("User");
		$l = $_POST["login"];

		if (isset($_POST["password"])) {
			$p = $_POST["password"];
		}else{
			$p = "";
		}
		if ($this->User->login($l, $p)) {
			$vars = array(
				'notification' => Tools::notify('success', "Vous êtes connecté(e) avec le compte <i>$l</i>")
			);
			$this->setData($vars);
			$this->indexAction();
		}else{
			$vars = array(
				'notification' => Tools::notify('danger', "Mauvais login ou mot de passe")
			);
			$this->setData($vars);
			$this->loginAction();
		}
	}

	function logoutProcessAction(){
		$this->loadModel("User");
		$this->User->logout();
		$vars = array(
			'notification' => Tools::notify('warning', "Vous avez été déconnecté(e) ")
		);
		$this->setData($vars);
		$this->loginAction();
	}
}
?>