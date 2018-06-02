<?php  
require_once ("AdminController.php");

class userController extends AdminController
{
	public $dir_view = "user";
	
	function indexAction(){	
		$this->loadModel("User");
		$users = $this->User->getUsers();
		$vars = array('users' => $users);
		$this->setData($vars);

		$this->render($this->dir_view, "index");
	}

	function addAction(){	
		$this->loadModel("User");
		$users = $this->User->getUsers();
		$vars = array('users' => $users);
		$this->setData($vars);

		$this->render($this->dir_view, "add");
	}

	function editAction(){	
		$this->loadModel("User");
		$user = $this->User->getUser($_GET["id"]);
		$vars = array('user' => $user);
		$this->setData($vars);

		$this->render($this->dir_view, "edit");
	}

	function addProcessAction(){	
		$this->loadModel("User");
		$vars = array('notification' => Tools::notify('success', "L'utilisateur à été ajouté"));
		$this->setData($vars);
		if ($this->User->add($_POST)) {
			$this->indexAction();
		}
	}

	function editProcessAction(){	
		$this->loadModel("User");

		if ($this->User->update($_GET["id"], $_POST)) {
			$this->indexAction();
		}
	}

	function deleteProcessAction(){	
		$this->loadModel("User");

		if ($this->User->delete($_GET["id"])) {
			$this->indexAction();
		}
	}
}
?>