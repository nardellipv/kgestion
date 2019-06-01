<?php 
Header('Access-Control-Allow-Origin: *');
include 'funciones.php';

$id = $_GET["id"];


if($id){

		$blog = "select *
			from blogs 
			where id=$id";
		
		echo htmlspecialchars(getSQL(html_entity_decode($blog)));

}else{

		$blog = "select *
			from blogs 
			order by created_at DESC";
		
		echo getSQL($blog);

}

?>