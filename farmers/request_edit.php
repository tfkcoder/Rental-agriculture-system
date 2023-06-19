
<?php
	//include 'include/config.php';
    include 'include/session.php';

	if(isset($_POST['edit'])){
		$request_id=$_POST['request_id'];
		$equipment= $_POST['equipment'];
        $quantity =$_POST['quantity'];
        $days=$_POST['days'];
		$now=date('y-m-d');

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
              
			$action="Update request";
			$user_id=$_SESSION['farmer'];
			$stmt=$conn->prepare("INSERT INTO system_logs (user_id,action1,date) VALUES (:user_id,:action1,:date)");
			$stmt->bindParam(':action1',$action);
			$stmt->bindParam(':user_id',$user_id);
			$stmt->bindParam(':date',$now);
			$stmt->execute();

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