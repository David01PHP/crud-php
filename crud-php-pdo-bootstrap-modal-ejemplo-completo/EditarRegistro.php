<?php
	session_start();
	include_once('dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id_vid'];
			$nombre = $_POST['nombre_vid'];
			$genero = $_POST['genero_vid'];
			$plataforma = $_POST['plataforma_vid'];
			$precio = $_POST['precio_vid'];
		

			$sql = "UPDATE videojuegos SET nombre_vid = '$nombre', genero_vid = '$genero', plataforma_vid= '$plataforma', precio_vid = '$precio' WHERE id_vid = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'producto actualizado correctamente' : 'No se puso actualizar videojuego';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: index.php');

?>