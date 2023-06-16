<?php
	include 'include/session.php';
	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];

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
						}
						elseif($row['types']==1){
							$_SESSION['farmer'] = $row['user_id'];
						}
						elseif($row['types']==2){
							$_SESSION['supplier'] = $row['user_id'];
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