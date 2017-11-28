<?php
	
	if(isset($_POST['updateBtn'])){
		
		include 'dbh.inc.php';
		
			$username= mysqli_real_escape_string($conn,$_POST['username']);
			$hpno = mysqli_real_escape_string($conn,$_POST['hpno']);
			$cuid = mysqli_real_escape_string($conn,$_POST['cuid']);
		
			//Check if input characters are valid
				
				$sql = "SELECT * FROM users WHERE username='$username'";
				$result = mysqli_query($conn, $sql);

						//Edit user data
						//mysqli_free_result($conn);
						$sql = "UPDATE users SET username='$username', hpno='$hpno' WHERE uid='$cuid'";
						mysqli_query($conn,$sql);
						
						header("Location: ../login.php?updateprofile=success");
						session_start();
						session_unset();
						session_destroy();
						exit();	
					
	}
		
	else {
		header("Location: ../profile.php?register=fail");
		exit();
	}
?>
</body>
</html>