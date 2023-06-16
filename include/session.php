<?php
	include 'include/config.php';
	session_start();

   if(isset($_SESSION['admin'])){
		header('location:  rentalsp/admin.php');
		exit();
	}
	if(isset($_SESSION['supplier'])){
		header('location:  supplier/supplier.php');
		exit();
	}
	if(isset($_SESSION['farmer'])){
		header('location:  farmers/farmer.php');
		exit();
	}
	if(isset($_SESSION['user'])){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM users WHERE user_id=:user_id");
			$stmt->execute(['user_id'=>$_SESSION['user']]);
			$user = $stmt->fetch();
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
	}
?>