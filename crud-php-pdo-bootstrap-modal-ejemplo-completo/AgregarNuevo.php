<?php
session_start();
include_once('dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO videojuegos (id, nombre, genero, plataforma, valor) VALUES (:id_vid, :nombre_vid, :genero_pro, :plataforma_vid, :valor_vid)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':id_vid' => $_POST['id_vid'] , ':nombre_vid' => $_POST['nombre_vid'] , ':genero_vid' => $_POST['genero_vid'], ':plataforma_vid' => $_POST['plataforma_vid'], ':precio_vid' => $_POST['precio_vid'])) ) ? 'videojuego guardado correctamente' : 'Algo salió mal. No se puede agregar miembro';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: index.php');
	
?>