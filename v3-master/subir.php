<?php 

	require_once('config.php');

	if ($_FILES["fichero"]["type"]!="application/pdf") {
		echo ("El archivo no esta en el formato adecuado <br>");
	}

	if ($_FILES["fichero"]["error"]!=0) {
		echo ("Hay un error en el archivo <br>");
	}


	$archivoRecibido = $_FILES["fichero"]["tmp_name"];
	$destino="ficherosSubidos/carbono.pdf";

	if (move_uploaded_file($archivoRecibido, $destino)) {
		echo "Fichero grabado";
	}else{
		echo "error";
	}

	
	$nombre = $_POST["nombre"];
	$consulta =$db->  prepare("INSERT INTO document(sustancia) VALUES ('$nombre')");

	$consulta->execute();

 ?>