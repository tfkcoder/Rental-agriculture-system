<?php
	//include 'includes/session.php';
    include 'include/session.php';

	if(isset($_POST['delete'])){
		$user_id =$_POST['user_id'];
		$now=date('y-m-d');
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM users WHERE user_id =:user_id");
			$stmt->execute(['user_id'=>$user_id]);

			$_SESSION['success'] = 'User deleted successfully';

			$action="Delete user";
			$user_id=$_SESSION['admin'];
			$stmt=$conn->prepare("INSERT INTO system_logs (user_id,action1,date) VALUES (:user_id,:action1,:date)");
			$stmt->bindParam(':action1',$action);
			$stmt->bindParam(':user_id',$user_id);
			$stmt->bindParam(':date',$now);
			$stmt->execute();
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