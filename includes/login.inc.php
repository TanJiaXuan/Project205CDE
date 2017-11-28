<?php

session_start();
		
		include 'dbh.inc.php';
		
		$username = mysqli_real_escape_string($conn,$_POST['email']);
		$pwd= mysqli_real_escape_string($conn,$_POST['pwd']);
		

		$_SESSION['username'] = $username; 
		$sql = "SELECT * FROM users WHERE email = '".$username."' AND pwd = '".$pwd."';";
		$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0){
					
				while($row = mysqli_fetch_assoc($result))
				{
					$_SESSION['uid'] = $row['uid'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['pwd'] = $row['pwd'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['hpno'] = $row['hpno'];
					$_SESSION['role'] = $row['role'];
						
					header("Location: http://localhost/Project-Modern Web/startbootstrap-landing-page-gh-pages/home.php?login= success");
					exit();
				}
			}
			else
			{
				header("Location: ../login.php?login=iserror");
				exit();
			}			
?>