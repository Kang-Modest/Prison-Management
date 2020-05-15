<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['noinput'];
    $query= "delete from prisoner where P.No = '$no'";
	$result = mysqli_query($con,$query);
	echo "Prisoner Successfully Deleted";
	echo "<script> window.location = 'prisoner_del.php?success'</script>";
	}
?>
