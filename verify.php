<?php
	include 'include/session.php';
	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		$now=date('y-m-d');

		try{
             
			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email =:email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();


			if($row['numrows'] > 0)
			{
				if($row['status1'])
				{

					if(password_verify($password, $row['password']))
					{
						if($row['types']==0){
							$_SESSION['admin'] = $row['user_id'];
							
							   //save system logs 
							   $action="Login";
							   $user_id=$_SESSION['admin'];
							   $stmt=$conn->prepare("INSERT INTO system_logs (user_id,action1,date) VALUES (:user_id,:action1,:date)");
							   $stmt->bindParam(':action1',$action);
							   $stmt->bindParam(':user_id',$user_id);
							   $stmt->bindParam(':date',$now);
							   $stmt->execute();
						}
						elseif($row['types']==1){
							$_SESSION['farmer'] = $row['user_id'];

								//save system logs 
								$action="Login";
								$user_id=$_SESSION['farmer'];
								$stmt=$conn->prepare("INSERT INTO system_logs (user_id,action1,date) VALUES (:user_id,:action1,:date)");
								$stmt->bindParam(':action1',$action);
								$stmt->bindParam(':user_id',$user_id);
								$stmt->bindParam(':date',$now);
								$stmt->execute();
							  
						}
						elseif($row['types']==2){
							$_SESSION['supplier'] = $row['user_id'];

								//save system logs 
								$action="Login";
								$user_id=$_SESSION['supplier'];
								$stmt=$conn->prepare("INSERT INTO system_logs (user_id,action1,date) VALUES (:user_id,:action1,:date)");
								$stmt->bindParam(':action1',$action);
								$stmt->bindParam(':user_id',$user_id);
								$stmt->bindParam(':date',$now);
								$stmt->execute();
						}

					}

					else{
						$_SESSION['error'] = 'Incorrect Email Or Password...!';
					}
				}

				else{
					$_SESSION['error'] = 'Account not activated....!';
				}
			}
			else{
				$_SESSION['error'] = 'Invalid Email or password....!';
			}
            

		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Input login credentials first';
	}
     
	 
	$pdo->close();

	header('location: login.php');

?>