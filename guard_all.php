<html>
	
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #DC2345;
    color: white;
}
.sansserif {
    font-family: Arial, Helvetica, sans-serif;
	font-size: 25px;
}
</style>
<?php require("header/header2.php"); ?>

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<legend class="sansserif">Guard Details</legend>
<hr>
<?php
	$con = mysqli_connect("localhost","root","","dbms_prison");
	
	//mysqli_select_db($con,"_4nm16is009");
	$result = $con->query("SELECT * FROM guard");
?>
<table border=1 cellspacing="2" width ="30%">
<tr>
	<th>GuardNo</th>
	<th>Guard Name</th>
	<th>DOB</th>
	<th>Address</th>
	<th>Start Date</th>
	<th>Sex</th>
	<th>Assigned Block</th>
	<th>Shift</th>
	<th>Password</th>

  
 
  <tr align = centre>
  <?php
    while($row = mysqli_fetch_array($result))
    {
	 echo "<td>" . $row['GuardNo'] . "</td>";
	 echo "<td>" . $row['Guard Name'] . "</td>";
	 echo "<td>" . $row['DOB'] . "</td>";
	 echo "<td>" . $row['Address'] . "</td>";
	 echo "<td>" . $row['Start Date'] . "</td>";
	 echo "<td>" . $row['Sex'] . "</td>";
	 echo "<td>" . $row['Assigned Block'] . "</td>";
	 echo "<td>" . $row['Shift'] . "</td>";
	 echo "<td>" . $row['Password'] ."</td>"."</tr>";
    }
  
  ?>
    
   </table>
 </body>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require("footer.php"); ?>
 </html>
