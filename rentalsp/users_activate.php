<?php
	//include 'include/config.php';
    include 'include/session.php';

	if(isset($_POST['activate'])){
		$user_id = $_POST['user_id'];
		$now=date('y-m-d');
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE users SET status1=:status1 WHERE user_id=:user_id");
			$stmt->execute(['status1'=>1, 'user_id'=>$user_id]);
			$_SESSION['success'] = 'User activated successfully';


			$action="Activate user:";
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
		$_SESSION['error'] = 'Select user to activate first';
	}

	header('location: manage-user.php');
?>