	<?php
		define('TITLE', 'Cafeegal Menu ');
		include 'header.php';
	?>

	  <!-- Header -->
    <header class="intro-header">
      <div class="container">
        <div class="intro-message">
          <h1>DESSERT, SPAGHETTi & DRINK</h1>
          <h5>Viewing for the menu</h5>
          <hr class="intro-divider">
          <ul class="list-inline intro-social-buttons">
            <li class="list-inline-item">
              <a href="menu.php" class="btn btn-secondary btn-lg">
			  <i class="fa fa-spoon"></i>
                <span class="network-name"><label for="our-popup-1">Spaghetti</label></span>
              </a> 
            </li>
			<li class="list-inline-item">
              <a href="menu.php" class="btn btn-secondary btn-lg">
                <i class="fa fa-birthday-cake"></i>
                <span class="network-name"><label for="our-popup-2"> Cake</label></span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="menu.php" class="btn btn-secondary btn-lg">
                <i class="fa fa-coffee"></i>
                <span class="network-name"><label for="our-popup-3"> Drink</label></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
	
	 <!-- Menu -->
	<span>
		<input type="checkbox" id="our-popup-1" class="smoosh" /><!-- click the button straight pop til the certain part of menu -->
		<label for="our-popup-1" class="overlay"></label>
   
		<!-- the popup starts here -->
		<div class="overlay-dialogue" align="center">
		<p><h2 align ="center">Spaghetti</h2></p>
		<table width="1200" border="0" align="center" >
			<tr>
				<td width="25%"><img src="img/menu1.jpg"alt="Carbonara Unagi Spaghetti" height="200" width="200" border="0" /><p>Carbonara Unagi Spaghetti (RM20.80) </p></td>
				<td width="25%"><img src="img/menu2.jpg"alt="Gamberi Arrabiata Spaghetti " height="200" width="200" border="0" /><p>Gamberi Arrabiata Spaghetti (RM18.80)</p></td>
				<td width="25%"><img src="img/menu3.jpg"alt="Seafood Pesto Pasta" height="200" width="200" border="" /><p>Seafood Pesto Pasta (RM20.00)</p></td>
				<td width="25%"><img src="img/menu4.jpg"alt="Seafood Aglio Olio Pasta" height="200" width="200" border="0" /><p>Seafood Aglio Olio Pasta (RM20.00)</p></td>
			</tr>
		</table>
		</div>
	</span>
	
	<p>&nbsp;</p>

	<span>
		<input type="checkbox" id="our-popup-2" class="smoosh" /><!-- click the button straight pop til the certain part of menu -->
		<label for="our-popup-2" class="overlay"></label>
   
		<!-- the popup starts here -->
		<div class="overlay-dialogue" align="center">
		<p><h2 align ="center">Cake</h2></p>
		<table width="1200" border="0" align="center" >
			<tr>
				<td width="25%"><img src="img/menu5.jpg"alt=" Salted Caramel Bania" height="200" width="200" border="0" /><p>Salted Caramel Bania (Rm 14.00) </p></td>		
				<td width="25%"><img src="img/menu6.jpg"alt="Mix Fruit Cake Tart" height="200" width="200" border="0" /><p>Mix Fruit Cake Tart (RM15.00)</p></td>
				<td width="25%"><img src="img/menu7.jpg"alt="Mango Cake Tart" height="200" width="200" border="" /><p>Mango Cake Tart (RM10.00)</p></td>
				<td width="25%"><img src="img/menu8.jpg"alt="Macha Tiramisu " height="200" width="200" border="0" /><p>Macha Tiramisu (RM10.00)</p></td>
			</tr>
		</table>
	
		<table width="1000" border="0" align="center" >
			<tr>
				<td width="33%" align= "center"><img src="img/menu9.jpg"alt=" Mango Cheese Cake" height="200" width="200" border="0" /><p>Mango Cheese Cake (Rm 12.00) </p></td>
				<td width="33%" align= "center"><img src="img/menu10.jpg"alt="Citron Blueberry" height="200" width="200" border="0" /><p>Citron Blueberry (RM15.00)</p></td>
				<td width="33%" align= "center"><img src="img/menu11.jpg"alt="Blueberry Calpis" height="200" width="200" border="" /><p>Blueberry Calpis (RM10.00)</p></td>
			</tr>
		</table>
		</div>
	</span>

	<p>&nbsp;</p>
	
	<span>
		<input type="checkbox" id="our-popup-3" class="smoosh" /><!-- click the button straight pop til the certain part of menu -->
		<label for="our-popup-3" class="overlay"></label>
   
		<!-- the popup starts here -->
		<div class="overlay-dialogue" align="center">
		<p><h2 align ="center">Drink</h2></p>
		<table width="1200" border="0" align="center" >
			<tr>
				<td width="25%"><img src="img/menu12.jpg"alt="Brewed coffee" height="200" width="200" border="0" /><p>Brewed coffee (RM12.00) </p></td>
				<td width="25%"><img src="img/menu13.jpg"alt="Military Latte" height="200" width="200" border="0" /><p>Military Latte (RM13.00)</p></td>
				<td width="25%"><img src="img/menu14.jpg"alt="Crème Brûlee Latte" height="200" width="200" border="" /><p>Crème Brûlee Latte (RM15.00)</p></td>
				<td width="25%"><img src="img/menu15.jpg"alt="Cafe Mocha" height="200" width="200" border="0" /><p>Cafe Mocha (RM12.00)</p></td>
			</tr>
		</table>
		</div>
	</span>
	
	
    <?php
		include 'footer.php';
	?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>