

<?php
    session_start();
?>

<?php

$isAdmin = false;

if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin')
{
	$isAdmin = true;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
          <?php
              if(defined('TITLE')) {
                  echo TITLE;
              } else {
                  echo 'Cafeegal - A cafe website and make reservation';
              }
          ?>
        </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
	    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">
	
	<!--login-->
	<link href="css/loginregister.css" rel="stylesheet">


	<!-- All the files that are required -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href = "css/loginregister.css" rel = "stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	</head>
	
    
	<body>
	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
	  <img src = "img/logo.png" alt = "logo" width = "50px" height= "50px">
        <a class="navbar-brand" href="home.php" style="font-family: oblique">Cafeegal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>	
			
			<li class="nav-item">
              <a class="nav-link" href="menu.php">Menu</a>
            </li>
			
            <li class="nav-item">
              <a class="nav-link" href="booking.php">Booking</a>
            </li>
						
             <!--li><a href="register.php"></span>&nbsp; Register</a></li>
             <li><a href="login.php"></span>&nbsp; Login</a></li-->
			

                          <?php
								if(isset($_SESSION['uid']) && $isAdmin == false){
								
									echo
									'<li class="nav-item">
									<a class="nav-link" href="profile.php"> Update profile</a></li>
									</li>';
									echo'<li class="nav-item">';
									echo'<a class = "nav-link" >Welcome, ' .$_SESSION['username']. '!</>';
									echo'</li>';
									echo'<form action="includes/logout.inc.php" method="post">
										  <button class="btn-sm btn-warning navbar-btn" type="submit" name="logoutBtn">Logout</button>
									  </form>';
								}								
								elseif( (isset($_SESSION['uid'])) && $isAdmin == true){				
									
									echo
									'<li class="nav-item">
									<a class="nav-link" href="profile.php"> Update profile</a></li>
									</li>';
									echo
									'<li class="nav-item">
									<a class="nav-link" href="Booking_history.php"> Booking History</a></li>
									</li>';
									echo
									'<li class="nav-item">
									<a class = "nav-link" >Welcome, ' .$_SESSION['username']. '!</>
									</li>';
									echo
									'<form action="includes/logout.inc.php" method="post">
										  <button class="btn-sm btn-warning navbar-btn" type="submit" name="logoutBtn">Logout</button>
									  </form>';
								}
								else {
									echo'<li class="nav-item">
									<a class="nav-link" href="register.php"> Register</a></li>
										<a class="nav-link" href="login.php">Login</a></li>
										</li>';
								}
                          ?>
            </ul>
		  
        </div>
      </div>
    </nav>
	
</body>
