<!DOCTYPE html>

<html lang="en">

<style>
table {
	margin: auto;
	background-color: #888C1B;
	color: white;
	width: 100vw;
}
table, th, td {
	border: 1px solid black;
	text-align: center;
	width: 35em;	
}

th {
	background-color: #465725;
</style>
<head>
  <title>Blue Jay Bad & Breakfast</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mystyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">Home</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="about.html">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="rooms.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Rooms
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="glasgow.html">Glasgow Room</a>
          <a class="dropdown-item" href="edinburgh.html">Edinburgh Room</a>
          <a class="dropdown-item" href="aberdeen.html">Aberdeen Room</a>
		  <a class="dropdown-item" href="dundee.html">Dundee Room</a>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
    </ul>
  </div>
  
   <form class="form-inline" align="right">
    <a href="login.html" class="btn btn-sm btn-light" type="button">Login</a>
  </form>  
  
</nav>



<div class="container">
<!--	<img class="img-fluid" src="img/logo.png" alt="logo">       -->
	<div class="jumbotron">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<h1><span>Blue Jay</span> Bed & Breakfast</h1><br><br>
				<p>Set in the beautiful Scottish Highland Town of Oban,<br> The Blue Jay Guest House has welcomed visitors to Oban<br> for the past 10 years.</p>
			</div>
			<div class="col-lg-4 col-md-12"><img class="img-fluid img-thumbnail" src="img/exterior.png" alt="picture of exterior"> 
			</div>
		</div>
	</div>
	
	
	
	
	<div class="subcontainer">
		<form action="bookingsys.php" method="post">
				<div class="row">
					<div class="form1 text-center" align="center">
						<div class="row">
						<?php
						//first you should connect to database, use mysqli_connect function
						$con=mysqli_connect("localhost", "root", "", "mydatabase")
						or die('could not connect to MySQL');


						$query = "SELECT * FROM bookingswebsite";
						$result = mysqli_query($con,$query)
						or die ('could not execute query');

						echo "<table>
						<tr>
						<th>First Name</th>
						<th>Second Name</th>
						<th>Room</th>
						<th>Nights</th>
						</tr>";

						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
								{
								echo 
									"<tr>
										<td>".$row['FirstName']."</td>
										<td>".$row['SecondName']."</td>
										<td>".$row['Room']."</td>
										<td>".$row['Nights']."</td>
									</tr>";	
								}			
							}
						echo "</table>";
						?>
						
						</div>
					</div>
				</div>
		</form>
	</div>
</div>
		


<footer>
		<div class="col-md-12 copy">
			<p class="text-center">&copy; Copyright 2021 - Aleksandra Renz.  All rights reserved.</p>
		</div>
</footer>
	


</body>
</html>


