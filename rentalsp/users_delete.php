<?php
	//include 'includes/session.php';
    include 'include/session.php';

	if(isset($_POST['delete'])){
		$user_id =$_POST['user_id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM users WHERE user_id =:user_id");
			$stmt->execute(['user_id'=>$user_id]);

			$_SESSION['success'] = 'User deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select user to delete first';
	}

	header('location: manage-user.php');
	
?>