<?php
	require("connect.php");

	$bdd->beginTransaction();
	try{
		if(isset($_POST["btnsubmit"])){
		/////////////////////////////////////////////////// INFORMACION DEL CULTOR ///////////////////////////////////////////////////
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$cedula=$_POST["cedula"];
			$profesion=$_POST["profesion"];
			$estudio=$_POST["estudio"];
			$civil=$_POST["civil"];
			$genero=$_POST["genero"];
			$activo=$_POST["activo"];
			$nacimiento=$_POST["nacimiento"];
			$estilo=$_POST["estilo"];

			if ($_POST["aprendizaje"]!=null) {
				$aprendizaje=$_POST["aprendizaje"];
			}else{
				$aprendizaje="Solo";
			}

			if ($_POST["conocimiento"]!=null) {
				$conocimiento="NO";
			}else{
				$conocimiento=$_POST["conocimiento"];
			}

			if ($_POST["condiciones"]!=null) {
				$condiciones=$_POST["condiciones"];
			}else{
				$condiciones="NO";
			}

			if ($_POST["ganancia"]!=null) {
				$ganancia=$_POST["ganancia"];
			}else{
				$ganancia=null;
			}

			if ($_POST["inicio"]!=null) { //fecha en que inicio el cultor
				$inicio=$_POST["inicio"];
			}else{
				$inicio=null;
			}

			$municipio=$_POST["municipio"];
			$parroquia=$_POST["parroquia"];
			$dir1=$_POST["dir1"];
			
			if ($_POST["dir2"]!=null) {
				$dir2=$_POST["dir2"];
			}else{
				$dir2=null;
			}

			$telefono1=$_POST["telefono1"];

			if ($_POST["telefono2"]!=null) {
				$telefono2=$_POST["telefono2"];
			}else{
				$telefono2=null;
			}

			$email=$_POST["email"];

			if ($_POST["facebook"]!=null) {
				$facebook=$_POST["facebook"];
			}else{
				$facebook=null;
			}

			if ($_POST["instagram"]!=null) {
				$instagram=$_POST["instagram"];
			}else{
				$instagram=null;
			}

			if ($_POST["twitter"]!=null) {
				$twitter=$_POST["twitter"];
			}else{
				$twitter=null;
			}


		/////////////////////////////////////////////////////////// SWITCH /////////////////////////////////////////////////////////////
			switch ($_POST["solicitud"]) {
				case 'cultor':
				//////////////////////////////////////////////////// CENSO CULTOR /////////////////////////////////////////////////////
					/////////////////// comprobar si existe la ci
					$sql="SELECT cedula FROM CENSO_PERSONAS WHERE cedula=:ci";
					$query=$bdd->prepare($sql);
					$query->bindValue(":cedu",$cedula);
					$query->execute();

					if ($query->rowCount()==0) {

						//////////////////////////////////////////// INSERT DE CENSO_PERSONA /////////////////////////////////////
						$sql="INSERT INTO CENSO_PERSONAS (PEROSNA_NOMBRE, PEROSNA_APELLIDO, CEDULA, PEROSNA_EDOCIVIL, PEROSNA_GENERO, PEROSNA_PROFESION, PEROSNA_ESTUDIO, PEROSNA_TELEFONO1, PEROSNA_TELEFONO2, PEROSNA_NACIMIENDO, MUNICIPIO_COD, PARROQUIA_COD, PEROSNA_DIRECCION1, PEROSNA_DIRECCION2, PEROSNA_ACTIVO) VALUES (:nom, :apell, :cedula, :civil, :genero, :profesion, :estudio, :tele1, :tele2, :nacimiento, :muni, :parro, :dir1, :dir2, :activo)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":nom"=>$nombre, ":apell"=>$apellido, ":cedula"=>$cedula, ":civil"=>$civil, ":genero"=>$genero, ":profesion"=>$profesion, ":estudio"=>$estudio, ":tele1"=>$telefono1, ":tele2"=>$telefono2, ":nacimiemto"=>$nacimiemto, ":muni"=>$municipio, ":parro"=>$parroquia, ":dir1"=>$dir1, ":dir2"=>$dir2, ":activo"=>$activo));

						/////////////////////////////////////////// INSERT PERSONA_EXTRA //////////////////////////////////////////
						$sql="INSERT INTO PERSONA_EXTRA (CEDULA, EXTRA_APRENDIZAJE, EXTRA_TRASMITE, EXTRA_CONDICIONES, EXTRA_GANANCIA, EXTRA_INICIO) VALUES (:cedu, :aprendizaje, :trasmite, :condiciones, :ganancia, :inicio)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":cedu"=>$cedula, ":aprendizaje"=>$aprendizaje, ":trasmite"=>$conocimiento, ":condiciones"=>$condiciones, ":ganacia"=>$ganacia, ":inicio"=>$inicio));

						////////////////////////////////////////////// INSERT REDES SOCIALES /////////////////////////////////////////
						$sql="INSERT INTO REDES (CEDULA, REDES_CORREO, REDES_TWITTER, REDES_INSTAGRAM, REDES_FACEBOOK) VALUES (:cedu, :correo, :twitter, :instagram, :facebook)";
						$query=$bdd->prepare($sql);
						$query->execute(array(":cedu"=>$cedula, ":correo"=>$email, ":twitter"=>$twitter, ":instagram"=>$instagram, ":facebook"=>$facebook));
					}else{
						$bdd->rollback();
						$error=1;
					}
					break;
				
				default:
					# code...
					break;
			}

		}else{
			$bdd->rollback();
			$error=1;
		}

	}catch(PDOException $e){
		$bdd->rollback();
		$error=1;
	}
?>