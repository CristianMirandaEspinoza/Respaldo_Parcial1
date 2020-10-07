<?php

include_once('P1_A9 _Config.php');


class DBConnection{
	
	public $conexion;

	function __construct(){

	try{
		$this->conexion = new PDO(
			"mysql:host=".BDConfig::$DBSERVER.";dbname=".BDConfig::$DBNAME,BDConfig::$DBUSER,
				BDConfig::$DBPASSWORD
		) ;	
		$this->conexion->setAttribute(
			PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION
		);

	}

	catch(PDOException $e ) {
		echo "error al conectar con BD:".$e->getmesage ();
		exit;
	}
}

	public function CierraConecion (){
		$this->conexion=null;
	}

	}

?>



