<?php
$host="localhost";
$user="root";
$password="";
$db="attendance";

$con = mysqli_connect($host,$user,$password,$db);

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$id=$_POST['ID'];
	$dob=$_POST['dob'];
	$doj=$_POST['doj'];
	$gender=$_POST['gender'];
	$ccode=$_POST['Country Code'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$email=$_POST['email'];
  	$password=$_POST['password'];
 	$designation=$_POST['designation'];

 	$query = "INSERT INTO employee_details(emp_id, emp_name, emp_password,emp_designation,emp_email,emp_dob,emp_address,emp_dateofjoining,total_present,total_absent,total_leave,total_workingdays,emp_gender) 
  			  VALUES('$id', '$name', '$password','designation','email','dob','address','doj','0','0','0','0','gender')";
  	mysqli_query($db, $query);
  }
  ?>
