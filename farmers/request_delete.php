<?php
    include 'include/session.php';

	if(isset($_POST['delete'])){
		$request_id =$_POST['request_id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM request WHERE request_id =:request_id");
			 $stmt->execute(['request_id'=>$request_id]);

			$_SESSION['success'] = 'Request deleted successfully...!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select request to delete first';
	}

	header('location: request.php');
	
?>