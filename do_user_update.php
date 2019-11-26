<?php
include("_config.php");
/*file to update the user*/

$username=$_POST['username'];
$password=$_POST['password'];
$forename=$_POST['forename'];
$surname=$_POST['surname'];
$title=$_POST['title'];
$email=$_POST['email'];
$address=$_POST['address'];
$post_code=$_POST['post_code'];
$phone_no=$_POST['phone_no'];
$id=$_SESSION['Customer_ID'];

$sql="UPDATE customer SET
username ='".$username."',
password ='".$password."',
forename ='".$forename."',
surname ='".$surname."',
title ='".$title."',
email ='".$email."',
address ='".$address."',
post_code ='".$post_code."',
phone_no ='".$phone_no."'
WHERE Customer_ID =".$id;


print($sql);

//execute the query
	if ($mysqli->query($sql) == true)	{
		$sql="SELECT * FROM customer WHERE email='$email' AND password='$password'";

//execute the query and get the result from the query
	$cust_res=$mysqli->query($sql);
			
//get the row from our result set
	if ($cust_res)	{
		$row = $cust_res->fetch_assoc(); //fetch the row
		$_SESSION=$row; //save the row to the session so it doesn't get lost
	}
	//go back to the index(home)page even if we don't have a login
	header("Location:index.html");
} else{
	print("Error: " .$sql. "<br>" .$mysqli->error);
}	
?>


		



