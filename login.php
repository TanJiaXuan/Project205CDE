	<?php
		define('TITLE', 'Cafeegal Home ');
		include 'header.php';
	?>
	
<br><br><br><br>

	<!-- Where all the magic happens -->
	<!-- LOGIN FORM -->
	<div class="text-center" style="padding:50px 0">
		<div class="logo">Login</div>
		<!-- Main Form -->
		<div class="login-form-1">
			<form action= "includes/login.inc.php" method = "post">
				<div class="login-form-main-message"></div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="Email" required />
						 <div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="pwd" class="sr-only">Password</label>
							<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required />
						 <div class="help-block with-errors"></div>
						</div>
					</div>
					<button type="submit" class="login-button" name = "loginBtn"><i class="fa fa-chevron-right"></i></button>
				</div>
				<div class="etc-login-form">
					<p>new user? <a href="register.php">create new account</a></p>
				</div>
			</form>
		</div>
	<!-- end:Main Form -->
	</div>

	 <img src = "img/welcome.gif" alt = "welcome" width = "400px" height= "350px" align= "bottom">
	 <img src = "img/coffee.webp" alt = "welcome" width = "200px" height= "200px">
<?php

    include'footer.php';
?>
	
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>