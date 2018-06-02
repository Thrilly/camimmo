<?php  

	class AdminController {

		public $vars = array();

		function __construct(){
		}

		public function setData($datas){
			$this->vars = array_merge($this->vars, $datas);
		}

		public function render($dir, $view){
			$this->loadModel("User");
			$user = User::getLoggedUser();

			extract($this->vars);
			require(ROOT_DIR."/views/inc/front/_header.php");
			require(ROOT_DIR."/views/inc/front/_scripts.php");
			if ($user) {
				require(ROOT_DIR."/views/$dir/$view.php");
			}else{
				require(ROOT_DIR."/views/indexAdmin/login.php");
			}
			require(ROOT_DIR."/views/inc/front/_footer.php");
			
		}

		public function loadModel($name){
			require_once(ROOT_DIR."/models/$name.php");
			$this->$name = new $name();
		}
	}
?>