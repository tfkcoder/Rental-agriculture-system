<?php 
	include 'include/session.php';

	if(isset($_POST['product_id'])){
		$product_id = $_POST['product_id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, products.product_id AS prodid, products.name AS prodname, category.name AS catname FROM products LEFT JOIN category ON category.category_id=products.category_id WHERE products.product_id=:product_id");
		$stmt->execute(['product_id'=>$product_id]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	}
?>
