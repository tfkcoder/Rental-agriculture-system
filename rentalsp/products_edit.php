<?php
	include 'include/session.php';
	
	if(isset($_POST['edit'])){
		$product_id = $_POST['product_id'];
		$name = $_POST['name'];
		$category = $_POST['category'];
		$price = $_POST['price'];
		$p_info = $_POST['p_info'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE products SET name=:name,  category_id=:category, price=:price, p_info=:p_info WHERE product_id=:product_id");
			$stmt->execute(['name'=>$name,  'category'=>$category, 'price'=>$price, 'p_info'=>$p_info, 'product_id'=>$product_id]);
			$_SESSION['success'] = 'Product updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit product form first';
	}

	header('location: manage-product.php');
?>