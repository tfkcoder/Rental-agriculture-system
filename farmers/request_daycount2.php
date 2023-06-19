<?php 
    include 'include/session.php';

	if(isset($_POST['request_id'])){
		$request_id = $_POST['request_id'];
		
		$conn = $pdo->open();
       
		$stmt = $conn->prepare("SELECT * FROM request WHERE types=:types");
		$stmt->execute(['types'=>1]);
		$row = $stmt->fetch();
        if($row['numrows'] > 0){
             
            $stmt = $conn->prepare("UPDATE request SET days_left = days WHERE request_id = :request_id");
            $stmt->bindParam('request_id', $request_id);
            $stmt->execute();

       }
        
		
	  $pdo->close();

	  echo json_encode($row);
	}
?>