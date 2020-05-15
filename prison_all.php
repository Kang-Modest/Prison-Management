<?php
session_start();
?>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;

}

th, td {
    text-align: center;
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
.img{
	width:4rem;
}
</style>
<?php require("header/header2.php"); ?>

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<legend class="sansserif">Prisoner Details</legend>
<hr>

<?php
	$con = mysqli_connect("localhost","root","","dbms_prison");
	
	//mysqli_select_db($con,"_4nm16is009");
	$result = $con->query("SELECT * FROM prisoner");
?>
<table border=1 cellspacing="2" width ="30%">
<tr>
	<th>P.No</th>
	<th>Name</th>
	<th>Admit Date</th>
	<th>DOB</th>
	<th>Address</th>
	<th>Crime Committed</th>
	<th>Sex</th>
	<th>NIC</th>
	<th>Weight</th>
	<th>Height</th>
	<th>Close Relation</th>
	<th>Emergency Number</th>
	<th>Health Issues</th>
	<th>Previous P. Record</th>
	<th>Image</th>
	<th>P.Type</th>
	<th>Duration of Sentence</th>
	<th>CellNo</th>

	
	 
  
 
  <tr align = centre>
  <?php
    while($row = mysqli_fetch_array($result))
    {
	 
	 echo "<td>" . $row['P.No'] . "</td>";
	 echo "<td>" . $row['Name'] . "</td>";
	 echo "<td>" . $row['Admit Date'] . "</td>";
	 echo "<td>" . $row['DOB'] . "</td>";
	 echo "<td>" . $row['Address'] . "</td>";
	 echo "<td>" . $row['Crime Committed'] . "</td>";
	 echo "<td>" . $row['Sex'] . "</td>";
	 echo "<td>" . $row['NIC'] . "</td>";
	 echo "<td>" . $row['Weight'] . "</td>";
	 echo "<td>" . $row['Height'] . "</td>";
	 echo "<td>" . $row['Close Relation'] . "</td>";
	 echo "<td>" . $row['Emergency Number'] . "</td>";
	 echo "<td>" . $row['Health Issues'] . "</td>";
	 echo "<td>" . $row['Previous P. Record'] . "</td>";
	 echo "<td>" . $row['P.Type'] . "</td>";
	 echo "<td> <img class='img' src=". $row['Image'] ." alt=''> </td>";
	 echo "<td>" . $row['Duration of Sentence'] . "</td>";
	 echo "<td>" . $row['CellNo'] ."</td>"."</tr>";
	 
	 
 	
	
    }
  
  ?>
    
   </table>
 </body>
 </html>

