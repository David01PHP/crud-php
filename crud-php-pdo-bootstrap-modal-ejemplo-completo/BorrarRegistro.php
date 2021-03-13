<?php
	session_start();
	include_once('dbconect.php');

	if(isset($_GET['borrar'])){

		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id_vid'];
			
			$sql = "DELETE FROM videojuegos WHERE id_vid = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'videojuego Borrado' : 'Hubo un error al borrar videojuego';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar conexión
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Seleccionar miembro para eliminar primero';
	}

	header('location: index.php');

?>