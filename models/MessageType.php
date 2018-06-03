<?php 
require_once("Model.php"); 

class MessageType extends Model{

	function getMessageTypes(){
		return $this->query("SELECT * FROM type_message tm ");
	}

	function getMessage($id){
		return $this->query("SELECT * FROM type_message tm WHERE id_type = ".$id)[0];
	}

	function add($m){
		return $this->queryS("INSERT INTO `type_message` (`id_type`, `type`) VALUES (NULL, '".$m["type"]."');");
	}

	function delete($id){
		return $this->queryS("DELETE FROM type_message WHERE id_type = ".$id);
	}

}
?>