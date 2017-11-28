<?php
	define('TITLE', 'Cafeegal Booking Form');
	include 'header.php';
?>
	<div class="text-center" style="padding:50px 0">
	<div class="logo">Reservation</div>
	<!-- Main Form -->
	<div class="login-form-1">
            <form action="includes/booking.inc.php" method="POST">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
			<div class="login-group">

			
			<div class="form-group">
				<label for="Busername" class="sr-only"></label>
				<p style = "font-size:16px" >Booking Name:</p>
				<input type="text" class="form-control" id="Busername" name="Busername" placeholder="Name" required />
			</div>
			
			<div class="form-group">
				<label for="hpno" class="sr-only">Phone Number</label>
				<input type="tel" class="form-control" id="Bhpno" name="Bhpno" placeholder="Phone Number" 
				 pattern= "(?=.*[0-9]).{10,16}" required />
			</div>
					<p style = "font-size:10px" >* Phone number without '-'</p>
			
		<p>&nbsp;</p>
		
            <div class="form-group">
			<p style = "font-size:16px" >Choose Date:</p>
                <label for="BDate" class ="sr-only"></label>
				<input type = "date"  class="form-control" name = "BDate" id = "BDate" placeholder = "" required />
            </div>
			
		<p>&nbsp;</p>
		
            <div class="form-group">
			<p style = "font-size:16px" >Choose Time:</p>
            <label for="BTime" class ="sr-only"></label>
            <input type="time" class="form-control" name="BTime" id = "BTime" placeholder = "" required />
            </div>
			
		<p>&nbsp;</p>
		
            <div class="form-group">
				<p style = "font-size:16px" >How many pax:</p>
				<input type="text" class="form-control" id="BPerson" name="BPerson" placeholder="pax" required />
            </div>
				
		<p>&nbsp;</p>
		
		
		<?php 
			echo'<input type = "hidden" name = "booktime" value =  "'.date("Y-m-d H:i:s").'">';
			
		?>
		
		<?php
			if(isset($_SESSION['uid'])){
				echo'
				<button type="submit" name = "bookBtn" class="login-button"><i class="fa fa-chevron-right"></i></button>';
            } else {
                echo'<button type="submit" name = "bookBtn" class="login-button" onclick="bookBtnOnClick()">
				<i class="fa fa-chevron-right"></i></button>';
			}
        ?>
           
			</div>
			</div>
			</form>
		</div>
		</div>
	
	
	<!--Validate user is logged in to proceed booking-->
	<script type="text/javascript">
	function bookBtnOnClick(){
		alert("Please log in to make a reservation!");
	}
	</script>
	
    <?php
		include 'footer.php';
	?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
  </body>

</html>
