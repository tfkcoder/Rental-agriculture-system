<?php
	include 'include/session.php';

	if(isset($_POST['send'])){

		$equipment =$_POST['equipment'];
        $quantity =$_POST['quantity'];
        $days =$_POST['days'];
        $status1 =$_POST['status1'];
        $types =$_POST['types'];
        $date=date('y-m-d');
		

		$conn = $pdo->open();
		
			try{
                
                $stmt = $conn->prepare("INSERT INTO request (equipment,quantity,days,status1,types,created_on) VALUES (:equipment,:quantity,:days,:status1,:types,:created_on)");
                $stmt->bindParam(':equipment',$equipment);
                $stmt->bindParam(':quantity',$quantity);
                $stmt->bindParam(':days',$days);
                $stmt->bindParam(':status1',$status1);
                $stmt->bindParam(':types',$types);
                $stmt->bindParam(':created_on',$date);
                $stmt->execute();

				$_SESSION['success'] = 'Request sent successfully...!';

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