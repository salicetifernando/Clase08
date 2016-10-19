<?php
include_once "AccesoDatos.php";
class Vehiculo
{
	private $_patente;
	private $_fecha;
	/*
	 function __construct($patente, $fecha)
	 {
	 	$this->_patente = $patente;
	 	$this->_fecha = $fecha;
	 }
	*/
	 public function __construct($patente=NULL)
	{
		if($patente != NULL){
			$obj = Vehiculo::TraerUnVehiculo($patente);
			
			$this->_patente = $patente;
	 		$this->_fecha = $fecha;
		}
	}

	 public function GetPatente()
	 {
	 	return $this->_patente;
	 }
	 public function GetFecha()
	 {
	 	return $this->_fecha;
	 }

	 static function TraerUnVehiculo($patente)
	 {
	 	$objAccesoDatos = new AccesoDatos::dameUnObjetoAcceso();
	 	$consulta =$objAccesoDato->RetornarConsulta("select * from vehiculo where patente = :patente");
		$consulta->bindValue(':patente', $patente, PDO::PARAM_INT);
		$consulta->execute();
		$vehiculoBuscado= $consulta->fetchObject('vehiculo');
		return $vehiculoBuscado;	
	 }
	 static function InsertarVehiculo($v)
	 {
	 	$objAccesoDatos = new AccesoDatos::dameUnObjetoAcceso();
	 	$consulta =$objetoAccesoDato->RetornarConsulta("insert into vehiculo values('".$v->GetPatente()."'),('".$v->GetFecha()."')");
		//$consulta->bindValue(':patente', $patente, PDO::PARAM_INT);
		$consulta->execute();
		//$vehiculoBuscado= $consulta->fetchObject('vehiculo');
		//return $vehiculoBuscado;	
	 }

}
?>