
<?php
    include 'include/session.php';

	if(isset($_POST['edit'])){
		$request_id=$_POST['request_id'];
        $types=$_POST['types'];
        $status1=$_POST['status1'];
        $conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE request SET types=:types,status1=:status1 WHERE request_id=:request_id");
            $stmt->bindParam(':types',$types);
            $stmt->bindParam(':status1',$status1);
            $stmt->bindParam(':request_id',$request_id);
            $stmt->execute();
			 $_SESSION['success'] = ' Request updated successful...!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit request form first';
	}

	header('location: request.php');
?>