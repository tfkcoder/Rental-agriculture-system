
<?php
    include 'include/session.php';

	if(isset($_POST['edit'])){
		$request_id=$_POST['request_id'];
        $types=$_POST['types'];
        $conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE request SET types=:types WHERE request_id=:request_id");
            $stmt->bindParam(':types',$types);
            $stmt->bindParam(':request_id',$request_id);
            $stmt->execute();
			 $_SESSION['success'] = ' shipped process successful...!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit request form first';
	}

	header('location: supplier.php');
?>