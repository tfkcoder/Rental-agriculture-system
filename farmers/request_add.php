<?php
	include 'include/session.php';

	if(isset($_POST['send'])){

		$equipment =$_POST['equipment'];
        $quantity =$_POST['quantity'];
        $user_id =$_SESSION['farmer'];
        $days =$_POST['days'];
        $status1 =$_POST['status1'];
        $types =$_POST['types'];
        $date=date('y-m-d');
    
		$conn = $pdo->open();

	
			try{
                
                $stmt = $conn->prepare("INSERT INTO request (user_id,equipment,quantity,days,days_left,status1,types,created_on) VALUES (:user_id,:equipment,:quantity,:days,:days_left,:status1,:types,:created_on)");
                $stmt->bindParam(':user_id',$user_id);
                $stmt->bindParam(':equipment',$equipment);
                $stmt->bindParam(':quantity',$quantity);
                $stmt->bindParam(':days',$days);
                $stmt->bindParam(':days_left', $days);
                $stmt->bindParam(':status1',$status1);
                $stmt->bindParam(':types',$types);
                $stmt->bindParam(':created_on',$date);
                $stmt->execute();

				$_SESSION['success'] = 'Request sent successfully...!';

                $action="Add request";
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
		}
        else{
            $_SESSION['error'] = 'Request sent failure...!';
        }

		 $pdo->close();
	
	  header('location: request.php');

?>