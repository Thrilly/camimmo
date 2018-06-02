<?php 
require_once("Model.php"); 

class User extends Model{

	function login($login, $passwd = ""){
		$user = $this->query("SELECT * FROM users WHERE login = '".$login."' AND passwd = '".md5($passwd)."'");
		if ($user) {
			$_SESSION["user"] = $user[0];
			return true;
		}
		return false;
	}

	function getUsers(){
		return $this->query("SELECT * FROM users WHERE deleted = 0");
	}

	function getUser($id){
		return $this->query("SELECT * FROM users WHERE id = ".$id)[0];
	}

	function logout(){
		unset($_SESSION["user"]);
	}

	function add($u){
		$active = ($u["active"] == "on") ? 1 : 0 ;
		return $this->queryS("INSERT INTO `users` (`id`, `login`, `fname`, `lname`, `function`, `email`, `passwd`, `is_admin`, `active`, `deleted`)
		 VALUES (NULL, '".$u["login"]."', '".$u["fname"]."', '".$u["lname"]."', '".$u["function"]."', '".$u["email"]."', MD5('".$u["passwd"]."'), '".$u["is_admin"]."', '".$active."', '0');");
	}

	function update($id, $u){
		$active = @($u["active"] == "on") ? 1 : 0 ;
		$query = "UPDATE `users` 
			SET `login` = '".$u["login"]."', 
			`fname` = '".$u["fname"]."', 
			`lname` = '".$u["lname"]."', 
			`function` = '".$u["function"]."', 
			`email` = '".$u["email"]."',";

		if (isset($u["passwd"]) && $u["passwd"] != "") {
			$query .= "`passwd` = '".$u["passwd"]."'";
		}

		$query .= "`passwd` = '".$u["passwd"]."', 
			`is_admin` = ".$u["is_admin"].", 
			`active` = ".$active." 
			WHERE `users`.`id` = ".$id;

		return $this->queryS($query);
	}

	function delete($id){
		return $this->queryS("UPDATE users SET deleted = 1 WHERE id = ".$id);
	}

	static function getLoggedUser(){
		if (isset($_SESSION["user"])) {
			return $_SESSION["user"];
		}
		return false;
	}
}
?>