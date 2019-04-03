<?php
	session_start();
	if(isset($_SESSION['iduser'])){
		header("Location: ./user-index.php");
		exit();
	}

	include_once '../model/db-connection.php';

?>