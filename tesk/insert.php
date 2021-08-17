<?php 
error_reporting(E_ALL &~ E_NOTICE);
include"conn.php";

if(isset($_POST['submit']))
{
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$phone = $_POST['phone'];
	$designation = $_POST['designation'];
	$gender = $_POST['gender'];
	$hobby = $_POST['arry'];
	$implode = implode(",",$hobby);

	mysqli_query($conn,"INSERT INTO `user_info` VALUES('','$first_name','$last_name','$email','$dob','$phone','$designation','$gender','$implode')");

	header("location:form.php?msg=Insert Successfully");

}
?>