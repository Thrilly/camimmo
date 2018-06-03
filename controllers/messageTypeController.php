<?php  
require_once ("AdminController.php");

class messageTypeController extends AdminController
{
	public $dir_view = "messageType";
	
	function indexAction(){	
		$this->loadModel("MessageType");
		$msgsType = $this->MessageType->getMessageTypes();
		$this->setData(array(
			"msgsType" => $msgsType,
		));
		$this->render($this->dir_view, "index");
	}

	function addProcessAction(){
		$this->loadModel("MessageType");
		if ($this->MessageType->add($_POST)) {
			$vars = array(
				'notification' => Tools::notify('success', "Vous avez ajouté un nouveau sujet")
			);
			$this->setData($vars);
			$this->indexAction();
		}else{
			$vars = array(
				'notification' => Tools::notify('danger', "Une erreur est survenue")
			);
			$this->setData($vars);
			$this->indexAction();
		}
	}

	function editProcessAction(){
		$this->loadModel("MessageType");
		$this->MessageType->edit($_GET["id"]);
		$vars = array(
			'notification' => Tools::notify('warning', "Vous avez été déconnecté(e) ")
		);
		$this->setData($vars);
		$this->indexAction();
	}

	function deleteProcessAction(){
		$this->loadModel("MessageType");
		if ($this->MessageType->delete($_GET["id"])) {
			$vars = array(
				'notification' => Tools::notify('success', "Vous avez supprimé le sujet")
			);
			$this->setData($vars);
			$this->indexAction();
		}else{
			$vars = array(
				'notification' => Tools::notify('danger', "Une erreur est survenue")
			);
			$this->setData($vars);
			$this->indexAction();
		}
	}
}
?>