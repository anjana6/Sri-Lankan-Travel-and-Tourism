<?php
$con = mysqli_connect("localhost","root","","Travel");

if(isset($_REQUEST['submit'])){
	$Name = $_REQUEST['name'];
	$Email = $_REQUEST['email'];
	$Nationality = $_REQUEST['nationality'];
	$Interest = $_REQUEST['interest'];
	$Message = $_REQUEST['message'];
	
	$insert_details = "insert into details values('".$Name"','".$Email"','".$Nationality"','".$Interest"','".$Message"')";
	mysqli_query($con,$insert_details);
}

?>