<?php
	include 'include/session.php';

	if(isset($_POST['add'])){

		$firstname =$_POST['firstname'];
        $lastname =$_POST['lastname'];
        $phone =$_POST['phone'];
        $address =$_POST['address'];
        $email =$_POST['email'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
        $status1=$_POST['status1'];
        $types=$_POST['types'];
        $photo=$_POST['photo'];
        $date=date('y-m-d');
		

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();
  
		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email already exist.......!';
		}
		else{
               
                $password = strtoupper($lastname);
                $password = password_hash($password, PASSWORD_DEFAULT);
                $filename = $_FILES['photo']['name'];
                $now = date('Y-m-d');
                if(!empty($filename)){
                    move_uploaded_file($_FILES['photo']['tmp_name'], '../user_images/'.$filename);	
                }
			try{
                
                $stmt = $conn->prepare("INSERT INTO users (firstname,lastname,phone,email,address,gender,password,photo,status1,types,created_on) VALUES (:firstname,:lastname,:phone,:email,:address,:gender,:password,:photo,:status1,:types,:created_on)");
                $stmt->bindParam(':firstname',$firstname);
                $stmt->bindParam(':lastname',$lastname);
                $stmt->bindParam(':phone',$phone);
                $stmt->bindParam(':email',$email);
                $stmt->bindParam(':address',$address);
                $stmt->bindParam(':gender',$gender);
                $stmt->bindParam(':password',$password);
                $stmt->bindParam(':photo',$filename);
                $stmt->bindParam(':status1',$status1);
                $stmt->bindParam(':types',$types);
                $stmt->bindParam(':created_on',$now);
                $stmt->execute();
				//$stmt->execute(['name'=>$name]);
                //$stmt->execute(['created_on'=>$date]);
				$_SESSION['success'] = 'Account created successfully...!';

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

	header('location: manage-user.php');

?>