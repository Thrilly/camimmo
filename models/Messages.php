<?php 
require_once("Model.php"); 

class Messages extends Model{

	function getMessages(){
		return $this->query("SELECT * FROM messages m JOIN type_message tm ON m.id_type = tm.id_type WHERE m.deleted = 0");
	}

	function getMessage($id){
		return $this->query("SELECT * FROM messages m JOIN type_message tm ON m.id_type = tm.id_type WHERE id_message = ".$id)[0];
	}

	function logout(){
		unset($_SESSION["user"]);
	}

	function add($m){
		$date_add = date("Y-m-d G:i:s");
		return $this->queryS("INSERT INTO `messages` (`id_message`, `fname`, `lname`, `email`, `phone`, `id_type`, `message`, `date_add`, `deleted`) VALUES (NULL, '".$m["fname"]."', '".$m["lname"]."', '".$m["email"]."', '".$m["phone"]."', '".$m["id_type"]."', '".$m["message"]."', '".$date_add."', '0');");
	}

	/*function update($id, $m){
		$active = @($m["active"] == "on") ? 1 : 0 ;
		$query = "UPDATE `users` 
			SET `fname` = '".$m["fname"]."', 
			`lname` = '".$m["lname"]."', 
			`lname` = '".$m["lname"]."', 
			`function` = '".$m["function"]."', 
			`email` = '".$m["email"]."',";

		if (isset($m["passwd"]) && $m["passwd"] != "") {
			$query .= "`passwd` = '".$m["passwd"]."'";
		}

		$query .= "`passwd` = '".$m["passwd"]."', 
			`is_admin` = ".$m["is_admin"].", 
			`active` = ".$active." 
			WHERE `users`.`id` = ".$id;

		return $this->queryS($query);
	}*/

	function delete($id){
		return $this->queryS("UPDATE messages SET deleted = 1 WHERE id_message = ".$id);
	}

}
?>