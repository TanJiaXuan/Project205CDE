<?php

	if(isset($_POST['bookBtn'])){

	include 'dbh.inc.php';

	
	
		$Busername =  mysqli_real_escape_string($conn,$_POST['Busername']);
		$Bhpno =  mysqli_real_escape_string($conn,$_POST['Bhpno']);
		$BDate =  mysqli_real_escape_string($conn,$_POST['BDate']);
		$BTime =  mysqli_real_escape_string($conn,$_POST['BTime']);
		$BPerson =  mysqli_real_escape_string($conn,$_POST['BPerson']);
		$booktime = mysqli_real_escape_string($conn,$_POST['booktime']);
		
			//Check if input characters are valid
			if(!preg_match("/^[a-zA-Z0-9]*$/", $Busername)){
				header("Location: ../booking.php?error=username");
				exit();	
			}
			else{
				if (!preg_match('/^0\d{9}$/', $Bhpno)){
					header("Location: ../booking.php?error=phoneno");
					exit();
				}
				else{
					if (empty($_POST['BDate'])){
						header("Location:../booking.php?error=date");
						exit();
					}
					else{
						if (empty($_POST['BTime'])){
							header("Location:../booking.php?error=time");
							exit();
						}
						else{
							if (empty($_POST['BPerson'])){
							header("Location:../booking.php?error=pax");
							exit();
							}
							else{

								$sql = "SELECT * FROM booking WHERE bookID='$bookID'";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);
					
								if($resultCheck > 0){
									header("Location: ../booking.php?error=Bid");
									exit();	
								}		
								else{
									$sql="INSERT INTO booking (Busername, Bhpno, BDate, BTime, BPerson, booktime)
									VALUES ('$Busername', '$Bhpno', '$BDate', '$BTime', '$BPerson','$booktime');";
									//mysqli_free_result($result);
									mysqli_query($conn,$sql);
		
									header("Location: ../booking.php?booking=success");
									exit();
								}
							}
						}
					}
				}
			}
		
	}
	else{
		
		header("Location: ../booking.php?book=fail");
		exit();
	}
?>
