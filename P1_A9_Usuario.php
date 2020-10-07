<?php

include_once('P1_A9 _Config.php');
include_once('P1_A9 - BD_Coneccion.php');


	class Usuario{
		public $id;
		public $nombre;
		public $edad;

		function __construct(){}
	

	//Guardar informacion
	 /*function save(){

		try {
			$dbconnection = new DBConnection ();

			$sql="INSERT INTO cusuario (nombre,edad) VALUES (:nombre,:edad)";

			$statement=$dbConnection->conexion->prepare($sql);

			$statement->bindParam(":nombre", $this->nombre , PDO::PARAM_STR);

			$statement->bindParam(":edad", $this->edad , PDO::PARAM_INT);

			$statement->execute();
			return true;
		}

		catch(PDOEXCEPTIO $e){
			echo"Error al intentar: ". $e->getMessage();
			return false;
		}
	}*/

	function save(){

		try {
			$dbconnection = new DBConnection();

			if($this->id){
			$sql="UPDATE cusuario set nombre = : nombre,edad=:edad WHERE id=id";

			$statement=$dbconnection->conexion->prepare($sql);

			$statement->bindParam(":nombre", $this->nombre , PDO::PARAM_STR);

			$statement->bindParam(":edad", $this->edad , PDO::PARAM_INT);
			$statement->execute();
		}else{

			$sql="INSERT INTO cusuario (nombre,edad) VALUES (:nombre,:edad)";

			$statement=$dbconnection->conexion->prepare($sql);

			$statement->bindParam(":nombre", $this->nombre ,PDO::PARAM_STR);

			$statement->bindParam(":edad", $this->edad ,PDO::PARAM_INT);
			$statement->execute();
			$this->id=intval($dbconnection->conexion->LastInsertid());

		}

			$dbconnection->CierraConecion();
			return true;
		}

		catch(PDOEXCEPTIO $e){
			echo"Error al intentar: ". $e->getMessage();
			return false;
		}
	}

	public static function buscarUsuario($id){

		try{
			$dbconnection = new DBConnection();

			$sql ="SELECT * FROM cusuario WHERE id=id";
			$statement=$dbconnection->conexion->prepare($sql);
			$statement->execute([":id"=>$id]);
			$rows=$statement->fetchAll();

			$mUsuario=null;
			foreach ($rows as $row ) {

		// Almacenar objeto en valores
				$mUsuario= new Usuario();
				$mUsuario->id=$row["id"];
				$mUsuario->nombre=$row["nombre"];
				$mUsuario->edad=$row["edad"];
				
			}


			$dbconnection->CierraConecion();
			return $mUsuario;
		}

		catch(PDOException $e){
			echo"Error al intentar: ". $e->getMessage();
			return null;
		}


	} 

public static function all($id){

		try{
			$dbconnection = new DBConnection();

			$sql ="SELECT * FROM cusuario WHERE id=id";
			$statement = $dbconnection ->conexion->prepare($sql);
			$statement->execute([":id"=>$id]);
			$rows=$statement->fetchAll();

			$Usuarios=[];

			//opcion 1
			foreach ($rows as $row ) {
		// Almacenar objeto en valores
			$mUsuario= new Usuario();
			$mUsuario->id=intval($row["id"]);
			$mUsuario->nombre=$row["nombre"];
				$mUsuario->edad=intval($row["edad"]);	}
				array_push($Usuarios, $mUsuario);

			//Opcion 2
			//$mUsuario=$statement->fetchObject('Usuario')
			$dbconnection->CierraConecion();

			return $Usuarios;
		}

		catch(PDOException $e){
			echo"Error al intentar: ". $e->getMessage();
			return null;
		}


	} 

	public function delete (){

		try{

			$dbconnection=new DBConnection();
			$sql="DELETE FROM cusuario WHERE  id=id";
			$statement->bindParam(":id,$this->id, PDO::PARAM_INT");
			$statement->execute();
			$dbconnection->CierraConecion();


			}

		catch(PDOException $e){
			echo "Error al eliminar: ".$e->getMessage();
			exit;
		}
	}

	

}

?>



