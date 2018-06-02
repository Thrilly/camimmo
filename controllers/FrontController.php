<?php  

	class FrontController {

		public $vars = array();

		function __construct(){
		}

		public function setData($datas){
			$this->vars = array_merge($this->vars, $datas);
		}

		public function render($dir, $view){
			extract($this->vars);
			require(ROOT_DIR."/views/inc/front/_header.php");
			require(ROOT_DIR."/views/$dir/$view.php");
			require(ROOT_DIR."/views/inc/front/_scripts.php");
			require(ROOT_DIR."/views/inc/front/_footer.php");

		}

		public function loadModel($name){
			require_once(ROOT_DIR."/models/$name.php");
			$this->$name = new $name();
		}
	}
?>