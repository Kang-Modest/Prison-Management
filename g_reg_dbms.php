<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['noinput'];
     $name = $_POST['nameinput']; 
	 $d_date = $_POST['date'];
	 $add = $_POST['addinput'];
	 $at_date = $_POST['a_date'];
	 $sex = $_POST['gender'];
	 $b = $_POST['b_no'];
	 $g = $_POST['shift'];
	 $p = $_POST['password'];

	 $query1 = "select GuardNo from guard";

	 $result1 = mysqli_query($con,$query1);
	 foreach ($result1 as $key => $value) {
		 if ($no == $key) {
			 echo "<script> alert('Guard No already exists')</script>";
			 return;
		 }
	 }

	 $query= "insert into guard values ('$no','$name','$d_date','$add','$at_date','$sex','$b','$g', '$p')";
	//  print_r($query);
	//  return
	 
	 $result = mysqli_query($con,$query);
	 echo "Guard Successfully Registered";
	 }
	 
	
	 
?>