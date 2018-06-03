<?php 
require_once("Model.php"); 

class Messages extends Model{

	function getMessages(){
		return $this->query("SELECT * FROM messages m JOIN type_message tm ON m.id_type = tm.id_type WHERE m.deleted = 0");
	}

	function getMessage($id){
		return $this->query("SELECT * FROM messages m JOIN type_message tm ON m.id_type = tm.id_type WHERE id_message = ".$id)[0];
	}

	function add($m){
		$date_add = date("Y-m-d G:i:s");
		return $this->queryS("INSERT INTO `messages` (`id_message`, `fname`, `lname`, `email`, `phone`, `id_type`, `message`, `date_add`, `deleted`) VALUES (NULL, '".$m["fname"]."', '".$m["lname"]."', '".$m["email"]."', '".$m["phone"]."', '".$m["id_type"]."', '".htmlentities($m["message"], ENT_QUOTES)."', '".$date_add."', '0');");
	}

	function delete($id){
		return $this->queryS("UPDATE messages SET deleted = 1 WHERE id_message = ".$id);
	}

}
?>