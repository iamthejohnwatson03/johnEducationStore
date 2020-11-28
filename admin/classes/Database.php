<?php

/**
 * 
 */
class Database
{
	
	public $con;
	public function connect(){
		$this->con = new Mysqli("w1h4cr5sb73o944p.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "wv9r44h48fawzx5f", "z1d5zygsa9ofznzk", "w097q6whh3wvphvp");
		return $this->con;
	}
}

?>

