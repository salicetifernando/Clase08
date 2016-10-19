<?php
include_once "vehiculo.php";
$dato = $_POST["dato"];

switch ($dato) {
	case 'alta':
	$v = new Vehiculo($_POST["patente"],$_POST["fecha"]);

		echo "<table>
					<tr> PATENTE </tr>
					<tr> FECHA </tr>
					<td>".$v->GetPatente()."</td>
					<td>".$v->GetFecha()."</td> 


			 </table>";
		break;
	
	default:
		echo "OPAAAAAA";
		break;
}



?>