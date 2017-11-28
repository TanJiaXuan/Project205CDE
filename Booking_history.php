
		<?php
			define('TITLE', 'Cafeegal Booking History ');
				include 'header.php';

		?>
		
    <body>
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	
	<?php
		$dbc = mysqli_connect('localhost','root','');
			
		mysqli_select_db($dbc,'cafeegal');
 
		$query = 'SELECT * FROM booking ORDER BY bookID DESC';
				
		print"<div class=\"container;\">
		
		<table class=\"table table-striped;\" >
		
		<thead>
			<tr>
			  <th>Booking ID</th>
			  <th>Booking Name</th>
			  <th>Booking Phone No</th>
			  <th>Booking Date</th>
			  <th>Booking Time</th>
			  <th>Booking Pax</th>
			  <th>Time Reserve</th>
			  <th></th>
			</tr>
		</thead>";
		  
			if ($result = mysqli_query($dbc,$query)){
				while($row = mysqli_fetch_array($result)){
					print"<tr>";
						print "<td>".$row['bookID']."</td>";
						print "<td>".$row['Busername']."</td>";
						print "<td>".$row['Bhpno']."</td>";
						print "<td>".$row['BDate']."</td>";
						print "<td>".$row['BTime']."</td>";
						print "<td>".$row['BPerson']."</td>";
						print "<td>".$row['booktime']."</td>";
					print "</tr>";
				}
			}
				
			print "</table>	";
		
			print "</div>";
				
			mysqli_close($dbc);
		?>
		  
		
		<?php

    include'footer.php';
?>
	
	</body>