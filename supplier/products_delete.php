<?php
	include 'include/session.php';
    //include 'include/config.php';

	if(isset($_POST['delete'])){
	    $product_id = $_POST['product_id'];
		
	   $conn = $pdo->open();

	   try{
			$stmt = $conn->prepare("DELETE FROM products WHERE product_id=:product_id");
			$stmt->execute(['product_id'=>$product_id]);
			$_SESSION['success'] = 'Product deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select product to delete first';
	}

	header('location: manage-product.php');
	
?>