<?php 
/**
* 
*/
class Db
{
	
	public static function sql($query)
	{
		try
		{
			$bdd = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWD);
			$response = $bdd->query($query);
			return $response->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}
	}

	public static function sqls($query)
	{
		try
		{
			$bdd = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWD);
			$response = $bdd->query($query);
			return true;
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}
	}
}
?>