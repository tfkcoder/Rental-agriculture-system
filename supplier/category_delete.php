<?php
	include 'include/session.php';
    
	if(isset($_POST['delete'])){
		$category_id = $_POST['category_id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM category WHERE category_id=:category_id");
			$stmt->execute(['category_id'=>$category_id]);

			$_SESSION['success'] = 'Category deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select category to delete first';
	}

	header('location: category.php');
	
?>