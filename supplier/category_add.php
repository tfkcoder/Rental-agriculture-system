<?php
	include 'include/session.php';

	if(isset($_POST['add'])){

		$name = $_POST['name'];
        $date=date('y-m-d');
		
		 //remove backslashes , stream data remove htm special characters
		 for($i=0; $i<strlen($name); $i++){
			$name =stripslashes($name);
			//$name =trim($name);
			$name=strip_tags($name);
		    }
		   echo $name;
		   $name=htmlspecialchars($name);

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM category WHERE name=:name");
		$stmt->execute(['name'=> $name]);
		$row = $stmt->fetch();
  
		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Category already exist';
		}
		else{
			try{
                
                $stmt = $conn->prepare("INSERT INTO category (name,created_on) VALUES (:name,:date)");
                $stmt->bindParam(':name',$name);
                $stmt->bindParam(':date',$date);
                $stmt->execute();
				//$stmt->execute(['name'=>$name]);
                //$stmt->execute(['created_on'=>$date]);
				$_SESSION['success'] = 'Category added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up category form first';
	}

	header('location: category.php');

?>