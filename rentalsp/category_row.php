<?php 
	include 'include/session.php';

	if(isset($_POST['category_id'])){
		$category_id = $_POST['category_id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM category WHERE category_id=:category_id");
		$stmt->execute(['category_id'=>$category_id]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	}
?>