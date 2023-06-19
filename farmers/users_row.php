<?php 
	//include 'includes/session.php';
    include 'include/session.php';

	if(isset($_POST['user_id'])){
		$user_id = $_POST['user_id'];
		
		$conn = $pdo->open();
    
		$stmt = $conn->prepare("SELECT * FROM users WHERE user_id=:user_id");
		$stmt->execute(['user_id'=>$user_id]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	}
?>