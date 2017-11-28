<?php
	
	if(isset($_POST['registerBtn'])){
		
		include'dbh.inc.php';
		
		$username= mysqli_real_escape_string($conn,$_POST['username']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$hpno = mysqli_real_escape_string($conn,$_POST['hpno']);
		$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
		
			//Check if input characters are valid
			if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
				header("Location: ../register.php?register=invalidusername");
				exit();	
			}
			else{
				//Check if email is valid
				if(!filter_var($email,FILTER_VALIDATE_EMAIL )){
					header("Location: ../register.php?register=invalidemail");
					exit();	
				}
				else{
					//Check phone valid
					if (!preg_match('/^0\d{9}$/', $hpno)){
							header("Location: ../register.php?register=invalidphoneno");
							exit();
						}
					else{
	
						//Check if password valid
						if (empty($_POST['pwd'])){
						header("Location:../register.php?error=pwd");
						exit();
						}
						else{						
							$sql = "SELECT * FROM users WHERE uid='$uid'";
							$result = mysqli_query($conn, $sql);
							$resultCheck = mysqli_num_rows($result);
					
							if($resultCheck > 0){
								header("Location: ../register.php?register=usertaken");
								exit();	
							}						
							else{
								//Insert the user into the database
								$sql = "INSERT INTO users(username,pwd,email,hpno) 
								VALUES ('$username','$pwd','$email','$hpno');";
								mysqli_query($conn,$sql);

								header("Location: ../freeCoupon.php?register=success");
								exit();
							}
						}		
					}
				}
			}
		}
	else {
		header("Location: ../register.php ?register=fail");
		exit();
	}
?>
</body>
</html>