	<?php
		define('TITLE', 'Cafeegal Free Coupon ');
		include 'header.php';
	?>
	
	<br><br><br><br><br>


	<?php
	
	date_default_timezone_set("Asia/Kuala_Lumpur");
	print '<p>You have been register in since: ' .date('g:i a l F j'). '</p>';
	
	?>
	
	<p style = "font-size:30px" align = "center">You have been successfully registered.</p>
	<p style = "font-size:20px" align = "center">Click the link and log in to the website.<a href="login.php">Login</a></p>

	<center>
	<img src = "img/Coupon.jpg" id = "couponimg" alt = "coupon" width = "800px" height= "500px" >
	</center>
	
	<p style = "font-size:15px" align = "center">Free Coupon</p>
	
	<input type="button" class= "btn btn-info round pull-right" value="Print Coupon"  
	onclick="javascript:window.print()" />

<?php

    include'footer.php';
?>
	
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>