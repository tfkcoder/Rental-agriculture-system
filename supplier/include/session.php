<?php
	include '../include/config.php';
	session_start();

	if(!isset($_SESSION['supplier']) || trim($_SESSION['supplier']) == ''){
		 header('location: ../login.php');
		exit();
	}

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(['user_id'=>$_SESSION['supplier']]);
	$admin = $stmt->fetch();

	$pdo->close();

?>