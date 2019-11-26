<!DOCTYPE html>
<html>
  <head><img src="img/header.png"  alt="header and logo"/></head>
	<meta charset="UTF-8">
    <title>Browse</title>
	<style>
		a:link
		{
			color: black;
		}
		a:hover
		{
			color: blue;
		}
		a:active
		{
			color: blue;
		}
		
		home
		{
			float:left;
			text-align:left;
			margin:1.0em;
		}
		log in
		{
			float:right;
			text-align:right;
			margin:1.0em;
		}
		.container li 
		{
			float:left;
			text-align:center;
			margin:0.4em;
		}

		.container img 
		{
			display:block;
			height:300px;
			width:400px;
			background-color:#D3D3D3
		}
		ul
		{ 
			list-style-type: none; 
		}

		
	</style>
	<body>
	
	
		<div style="text-align:right">
		<div class="nav"><a class="active" href="login.html">Log In</a>
		</div>
		
		<div style="text-align:right">
		<div class="nav"><a class="active" href="register.html"><h4>Create An Account</a></h4>
		
		<div style="text-align:right">
		<div class="nav"><a class="active" href="basket.html"><h4>Basket</a></h4>
		</div>
		
		<div style="text-align:left">
		<div class="nav"> <a class="active" href="index.html">Home</a>
		</div>
	
		<div style="text-align:center">
		<div class="search">
		<form action="./action.html"> <input placeholder="search.." name="search" type="text"> 
			<br>
			</br>
			<button type="submit"> <i class="search"></i>Search</button>
        </form>
		</div>
	
		<article>
		<h1>Available Cars</h1>
		<?php
		  
$con=mysqli_connect("comp-server.uhi.ac.uk","le14008428","14008428","le14008428");
// Check connection
if (mysqli_connect_errno())
{
print "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM car");

print "<table border='1'>
<tr>
<th>CarID</th>
<th>Make</th>
<th>Model</th>
<th>Year</th>
<th>Colour</th>
<th>Cost</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
print "<tr>";
print "<td>" . $row['Car_ID'] . "</td>";
print "<td>" . $row['Make'] . "</td>";
print "<td>" . $row['Model'] . "</td>";
print "<td>" . $row['Year'] . "</td>";
print "<td>" . $row['Colour'] . "</td>";
print "<td>" . $row['Cost'] . "</td>";

print "</tr>";
}
print "</table>";


mysqli_close($con);

?>


		
		<body bgcolor="#b3c3f4">

	<body>
</html>
	
	