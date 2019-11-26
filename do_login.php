<?php	/*check for valid login details */
include("_config.php");
debug($_REQUEST);
$username=$_POST['username'];	$password=$_POST['password'];
$sql="SELECT COUNT(customer_id) AS matches FROM customer
	WHERE username='$username'
	AND password='$password'";
print($sql);

//execute the query
$res=$mysqli->query($sql);
if ($res) {
	//the query didn't fail, YAY!!
	$row = $res->fetch_assoc(); //fetch the result row
	$matches=$row['matches']; //fetch the matches value
	debug($matches);
	if($matches>0) {
		//we have a valid login
		print("<br/>Matches found: $matches");
		//create new query to get the customer record
		$sql="SELECT * FROM customer WHERE username='$username' AND password='$password'";
		print($sql);
		//execute and get the result from the query
		$cust_res=$mysqli->query($sql);
		//get the row from out result set_error_handler
		if ($cust_res) {
			$row = $cust_res->fetch_assoc(); //fetch the row
			$_SESSION=$row; //save the row to the session so it doesn't get lost
		}else{
			print('cust_res thing no worki!!');			
		}
		//go back to the index (home) page even if we don't have a login
		header("Location:index.html");
		
	}
} else {
	//query error
	print("Error: ". $sql . "<br>" . $mysqli ->error);
}
?>
