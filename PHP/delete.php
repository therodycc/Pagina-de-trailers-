<?php 

include("db.php");

if(isset($_GET['Id'])){
	$Id = $_GET['Id'];
	$query = "DELETE FROM pelis where Id = $Id";
	$resultado = mysqli_query($conn, $query);

	if(!$resultado){
			die("Query Failed");
	}

	header("location: Agregado.php");

}










	// include_once 'database.php';
	// if(isset($_GET['Trailers_ID'])){
	// 	$id=(int) $_GET['Trailers_ID'];
	// 	$delete=$con->prepare('DELETE FROM peliculas WHERE Trailers_ID=:id');
	// 	$delete->execute(array(
	// 		':id'=>$id
	// 	));
	// 	header('Location: agregado.php');
	// }else{
	// 	header('Location: agregado.php');
	// }
 ?>