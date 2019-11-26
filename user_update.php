<!DOCTYPE html>
<?php
include("_config.php");
	
//if the customer details are not in the session
if(isset($_SESSION['Customer_ID'])==false){
	//this person is not logged in
	exit();
}

?>

<html>
  <head><img src="img/header.png"  alt="header and logo"/></head>
	<meta charset="UTF-8">
    <title>Edit Your Account</title>
	<body>    
	
		<div style="text-align:left">
		<div class="nav"> <a class="active" href="index.html">Home</a>
		</div>
		
	<h1>Edit Your Account</h1>
		<form method="POST" action="do_user_update.php">
			<div class="field">
				<label for="username" >User Name:</label>
				<input type="text"  name="username" required
				 value="<?php print($_SESSION['Username']);?>">
			</div>
			
			<div class="field">
				<label for="password">Password:</label>
				<input type="password" name="password" required
				value="<?php print($_SESSION['Password']);?>" >
			</div>
			
			<div class="field">
				<label for="title">Title:</label>
				<input type="title" name="title"
				value="<?php print($_SESSION['Title']);?>" >
			</div>
			
			<div class="field">
				<label for="forename">Forename:</label>
				<input type="text" name="forename"
				value="<?php print($_SESSION['Forename']);?>">
			</div>
			
			<div class="field">
				<label for="surname">Surname:</label>
				<input type="text" name="surname"/
				value="<?php print($_SESSION['Surname']);?>">
			</div>
			
			<div class="field">
				<label for="email">Email:</label>
				<input type="email" name="email" required
				value="<?php print($_SESSION['Email']);?>">
			</div>
			
			<div class="field">
				<label for="address">Address:</label>
				<input type="text" name="address"
				value="<?php print($_SESSION['Address']);?>"></br>
			</div>
			
			<div class="field">
				<label for="post_code">Post Code:</label>
				<input type="text" name="post_code"
				value="<?php print($_SESSION['Post_Code']);?>"/>
			</div>
			
			<div class="field">
				<label for="phone_no">Phone No:</label>
				<input type="text" name="phone_no"
				value="<?php print($_SESSION['Phone_No']);?>"/>
			</div>	
			

			<input type="submit" name="update" value="Update" />
		</form>
		

		
	</body>
</html>