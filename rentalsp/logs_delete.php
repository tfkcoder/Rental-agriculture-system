<?php
    include 'include/session.php';

	if(isset($_POST['delete'])){
		$logs_id =$_POST['logs_id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM system_logs WHERE logs_id =:logs_id");
			$stmt->execute(['logs_id'=>$logs_id]);

			$_SESSION['success'] = 'logs deleted successfully..!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select logs to delete first';
	}

	header('location: system_logs.php');
	
?>