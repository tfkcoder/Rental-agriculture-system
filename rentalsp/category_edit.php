
<?php
	//include 'include/config.php';
    include 'include/session.php';

	if(isset($_POST['edit'])){
		$category_id=$_POST['category_id'];
		$name= $_POST['name'];

        $conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE category SET name=:name WHERE category_id=:category_id");
            //$stmt->bindParam(':name',$name);
            //$stmt->bindParam(':category_id',$category_id);
            //$stmt->execute();
			 $stmt->execute(['name'=>$name, 'category_id'=>$category_id]);
			 $_SESSION['success'] = 'Category updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit category form first';
	}

	header('location: category.php');

?>