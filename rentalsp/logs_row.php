<?php 
    include 'include/session.php';

	if(isset($_POST['logs_id'])){
		$logs_id = $_POST['logs_id'];
		
		$conn = $pdo->open();
    
		$stmt = $conn->prepare("SELECT * FROM system_logs WHERE logs_id=:logs_id");
		$stmt->execute(['logs_id'=>$logs_id]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	}
?>