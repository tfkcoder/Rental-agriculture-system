<?php
	include '../include/config.php';
	session_start();

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		 header('location: ../login.php');
		//header('location: admin.php');
		exit();
	}

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(['user_id'=>$_SESSION['admin']]);
	$admin = $stmt->fetch();

	$pdo->close();

?>