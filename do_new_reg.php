<!--Jillian MacDonald-->
<?php
/*
file to insert a new user into my database
*/

//print r the post contents
print_r($_POST);




$sql="INSERT INTO customer
(
username,
password,
title,
forename,
surname,
email,
address,
post_code,
phone_no
)

VALUES
(
'".$_POST["username"]."',
'".$_POST["password"]."',
'".$_POST["title"]."',
'".$_POST["forename"]."',
'".$_POST["surname"]."',
'".$_POST["email"]."',
'".$_POST["address"]."',
'".$_POST["post_code"]."',
'".$_POST["phone_no"]."'
)
";

print($sql);

//connect to the database
$mysqli = new mysqli("comp-server.uhi.ac.uk", "le14008428", "14008428", "le14008428");

if ($mysqli->connect_errno) { //check connection
	print("connect failed: ".$mysqli->connect_error."\n");
	exit();
}

//execute the query
if ($mysqli->query($sql) ==true)
{
	//sucess, do something...
	print("YEY it worked!!");
} 
	else 
{
		print("Error: " .$sql ."<br>" . $mysqli->error);
}
		//go back to the index (home) page even if we don't have a login
		header("Location:index.html");

?>
