
<?php
	//include 'include/config.php';
    include 'include/session.php';

	if(isset($_POST['edit'])){
		$request_id=$_POST['request_id'];
		$equipment= $_POST['equipment'];
        $quantity =$_POST['quantity'];
        $days=$_POST['days'];

        $conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE request SET equipment=:equipment,quantity=:quantity,days=:days WHERE request_id=:request_id");
            $stmt->bindParam(':equipment',$equipment);
            $stmt->bindParam(':request_id',$request_id);
            $stmt->bindParam(':quantity',$quantity);
            $stmt->bindParam(':days',$days);
            $stmt->execute();
			 //$stmt->execute(['name'=>$name, 'category_id'=>$category_id]);

			 $_SESSION['success'] = 'Request updated successfully..!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit category form first';
	}

	header('location: request.php');

?>