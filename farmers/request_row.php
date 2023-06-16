<?php 
    include 'include/session.php';

	if(isset($_POST['request_id'])){
		$request_id = $_POST['request_id'];
		
		$conn = $pdo->open();
    
		$stmt = $conn->prepare("SELECT * FROM request WHERE request_id=:request_id");
		$stmt->execute(['request_id'=>$request_id]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	}
?>