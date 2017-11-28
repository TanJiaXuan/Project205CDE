<!-- Footer -->
    <footer>
	<aside class="banner">
      <div class="container">
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="home.php">Home</a>
          </li>
		  <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="menu.php">Menu</a>
          </li>
		    <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="booking.php">Booking </a>
          </li>
 
		    <?php
                if(isset($_SESSION['uid'])){
					echo'<li class="footer-menu-divider list-inline-item">&sdot;</li>
						<li class="list-inline-item">
						<a href="Booking_history.php">Booking History</a></li>
						</li>';
					echo'<li class="footer-menu-divider list-inline-item">&sdot;</li>
						<li class="list-inline-item">';
					echo'<form action="includes/logout.inc.php" method="post">
							<button class="btn-sm btn-warning navbar-btn" type="submit" name="logoutBtn">Logout</button>
                         </form>
						 </li>';
                } else {
					echo'<li class="footer-menu-divider list-inline-item">&sdot;</li>
						<li class="list-inline-item">
						<a href="register.php">Register</a></li>
						</li>';
					echo'<li class="footer-menu-divider list-inline-item">&sdot;</li>
						<li class="list-inline-item">
						<a href="login.php">Login</a></li>
						</li>';
                            }
            ?>
        </ul>
        <p class="copyright text-muted small">Copyright &copy; Cafeegal 2017. All Rights Reserved</p>
      </div>
	 </aside>
    </footer>
	
