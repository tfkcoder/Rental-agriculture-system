<?php
    include 'include/session.php';

	if(isset($_POST['edit'])){

		$user_id = $_POST['user_id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
        $status1=$_POST['status1'];
        $types=$_POST['types'];
		$now=date('y-m-d');

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM users WHERE user_id=:user_id");
		$stmt->execute(['user_id'=>$user_id]);
		$row = $stmt->fetch();

		if($password == $row['password']){
			$password = $row['password'];
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
		}

		try{
			$stmt = $conn->prepare("UPDATE users SET email=:email, password=:password, firstname=:firstname, lastname=:lastname, address=:address, phone=:phone ,status1=:status1,types=:types WHERE user_id=:user_id");
			$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'address'=>$address, 'phone'=>$phone,'status1'=>$status1, 'types'=>$types, 'user_id'=>$user_id]);
			$_SESSION['success'] = 'User updated successfully';

			$action="Edit user";
			$user_id=$_SESSION['admin'];
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
		$_SESSION['error'] = 'Fill up edit user form first';
	}
	header('location: manage-user.php');

?>