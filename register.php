<?php
		define('TITLE', 'Cafeegal Register Form ');
		include 'header.php';
?>


	<!-- REGISTRATION FORM -->
	<div class="text-center" style="padding:50px 0">
	<div class="logo">Register</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form action= "includes/register.inc.php" method ="POST" >
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Username" 
						 required />
					</div>
					<p style = "font-size:10px" >* Example: abcdef123</p>
					<div class="form-group">
						<label for="email" class="sr-only">Email</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="E-mail" 
						pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required />
					</div>
					<p style = "font-size:10px" >* Example: abc@gmail.com</p>
					<div class="form-group">
						<label for="hpno" class="sr-only">Phone Number</label>
						<input type="tel" class="form-control" id="hpno" name="hpno" placeholder="Phone Number" 
						 pattern= "(?=.*[0-9]).{10,16}" required />
					</div>
					<p style = "font-size:10px" >* Phone number without '-'</p>
					<div class="form-group">
						<label for="pwd" class="sr-only">Password</label>
						<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" 
						 pattern= "(?=.*[0-9]).{6,18}" required />
					</div>
					<div class="form-group">
						<label for="cfmPwd" class="sr-only">Password Confirm</label>
						<input type="password" class="form-control" id="cfmPwd" name="cfmPwd" placeholder="Confirm Password" 
						 onchange="chckPwdMatch();" required />
					</div>
					<div id="divCheckPasswordMatch"></div>
					<p style = "font-size:10px" >* Must at least 6 characters and only accept in numuric from 1-9</p>
					
				</div>
				<button type="submit" name = "registerBtn" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			
			<div class="etc-login-form">
				<p>Already have an account? <a href="login.php">Login here</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
	</div>
	
	<script type="text/javascript">

        function chckPwdMatch() {
            var password = $("#pwd").val();
            var confirmPassword = $("#cfmPwd").val();
            if (password != confirmPassword)
                $("#divCheckPasswordMatch").html("Passwords do not match!");
            else
                $("#divCheckPasswordMatch").html("Passwords match.");
        }
        $(document).ready(function () {
           $("#pwd, #cfmPwd").keyup(chckPwdMatch);
        });
     </script>
 
 
	<?php
		include 'footer.php';
	?>
	
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>