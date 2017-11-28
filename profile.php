<?php
  define('TITLE', 'Cafeegal Edit Profile');
  include 'header.php';
?>


           <div class="text-center" style="padding:50px 0">
	<div class="logo">Edit Profile</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form action= "includes/editProfile.inc.php" method ="POST" >
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
						<label for="hpno" class="sr-only">Phone Number</label>
						<input type="tel" class="form-control" id="hpno" name="hpno" placeholder="Phone Number" 
						 pattern= "(?=.*[0-9]).{10,16}" required />
					</div>
					<p style = "font-size:10px" >* Phone number without '-'</p>

				</div>
				<button type="submit" name = "updateBtn" class="login-button"><i class="fa fa-chevron-right"></i></button>
				<input type="hidden" name="cuid" id="cuid" value="<?php echo $_SESSION['uid'];?>"/>
			</div>
			
		</form>
	</div>
	<!-- end:Main Form -->
	</div>
	
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php
    include'footer.php';
?>