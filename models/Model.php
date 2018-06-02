<?php 
require_once("Db.php"); 

class Model
{
	function __construct(){}

	public function query($query)
	{
		return Db::sql($query);
	}

    public function queryS($query)
    {
        return Db::sqls($query);
    }
}
?>