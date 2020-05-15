<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['noinput'];
     $name = $_POST['nameinput']; 
	 $add = $_POST['addinput'];
     $crime = $_POST['crimeinput']; 
	 $sex = $_POST['gender'];
	 $t = $_POST['type'];
	 $at_date = $_POST['a_date'];
	 $d_date = $_POST['date'];
	 $c = $_POST['c_no'];
	 $d = $_POST['d_imp'];
	 $n = $_POST['nic'];
	 $w = $_POST['weight'];
	 $h = $_POST['height'];
	 $r = $_POST['relation'];
	 $e = $_POST['emergency'];
	 $i = $_POST['health'];
	 $p = $_POST['previous'];


	 $target_dir = "assets/uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploaded = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		
        $uploaded = 1;
    } else {
		echo ".";
	echo "<script> window.location = 'prisoner_php.php?notimg'</script>";
		
		$uploaded = 0;
		return;
    }
}
if(!$_FILES["fileToUpload"]["tmp_name"]){

	echo "<script> window.location = 'prisoner_php.php?noimg'</script>";
	return;
}
// Check if file already exists
if (file_exists($target_file)) {
	
	$uploaded = 0;
	echo "<script> window.location = 'prisoner_php.php?notexit'</script>";
	return;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
	$uploaded = 0;
	echo "<script> window.location = 'prisoner_php.php?largefile'</script>";

	return;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	$uploaded = 0;
	echo "<script> window.location = 'prisoner_php.php?notimg'</script>";

	return;
}
// Check if $uploaded is set to 0 by an error
if ($uploaded == 0) {
	echo "<script> window.location = 'prisoner_php.php?err'</script>";

	return;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		
    } else {
	echo "<script> window.location = 'prisoner_php.php?err'</script>";

		return;
    }
}

	 $img = $target_file;

	//  if(!preg_match('/2376[0-9]{8}$\/', $e)){
	// 	 echo "Invalid input for emergency number";
	// 	 return;
	//  }
	 
	 $query= "insert into prisoner values ('$no','$name','$at_date','$d_date','$add','$crime','$sex','$n' ,'$w' , '$h','$r' ,  '$e', '$i','$p', '$img', '$t','$d','$c')";
	 $result = mysqli_query($con,$query);
	echo "<script> window.location = 'prisoner_php.php?success'</script>";

	 }
	
	 
?>