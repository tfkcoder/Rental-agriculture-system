<?php
	  include 'include/session.php';
    //include('include/config.php');
	
	if(isset($_POST['add'])){

		$name = $_POST['name'];
		$p_info= $_POST['p_info'];
		$category = $_POST['category'];
		$price = $_POST['price'];
        $now = date('Y-m-d');
		$filename = $_FILES['photo']['name'];

		$conn = $pdo->open();
        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM products WHERE product_id=:product_id");
		$stmt->execute(['product_id'=>$product_id]);
		$row = $stmt->fetch();
  
		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Product already exist.......!';
		}
		else{
               
                $filename = $_FILES['photo']['name'];
                $now = date('Y-m-d');
                if(!empty($filename)){
                    move_uploaded_file($_FILES['photo']['tmp_name'], '../product_images/'.$filename);	
                }
			try{
                
                $stmt = $conn->prepare("INSERT INTO  products (category_id,name,p_info,photo,price,created_on) VALUES (:category_id,:name,:p_info,:photo,:price,:created_on)");
                $stmt->bindParam(':category_id',$category);
                $stmt->bindParam(':name',$name);
                $stmt->bindParam(':p_info',$p_info);
                $stmt->bindParam(':photo',$filename);
                $stmt->bindParam(':price',$price);
                $stmt->bindParam(':created_on',$now);
                $stmt->execute();
				$_SESSION['success'] = 'Product added successfully...!';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up form form first...!';
	}

	header('location: manage-product.php');
     
    	
?>