<!--  -->
<html>
<head>
<title>welcome to user interface</title>
<style>
.button {
    background-color: #DC2345;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	border-radius: 12px;
	width: 250px;
	
}
.button {
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}
.button:hover {
    background-color: #8F0B24;
    color: white;
}
.sansserif {
    font-family: Arial, Helvetica, sans-serif;
	font-size: 25px;
}
</style>
<?php require("header/header1.php"); ?>

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<legend class="sansserif">Admin Portal</legend>
<hr>
<table width="20%" align="center">
<tr>
<td>
<form method="post" action="admin_php.php">
<button type="submit" class = "button">Register New Admin</button>
</form>
</td>
<td>
<form method="post" action="prisoner_php.php">
<button type="submit" class = "button">Register New Prisoner</button>
</form>
</td>
<td>
<form method="post" action="guard_php.php">
<button type="submit" class = "button">Register New Guard</button>
</form>
</td>
<tr>
<td>
 <form method="post" action="admin_all.php">
    <button type="submit" class = "button">Admins</button>
</form>
</td>
<td>
 <form method="post" action="prison_all.php">
    <button type="submit" class = "button">Prisoners</button>
</form>
</td>
<td>
 <form method="post" action="guard_all.php">
    <button type="submit" class = "button">Guards
	</button>
</form>
</td>
</tr>
<tr>
<td>
 <form method="post" action="guard_del.php">
    <button type="submit" class = "button">Delete Guard</button>
</form>
</td>

<td>
 <form method="post" action="prisoner_del.php">
    <button type="submit" class = "button">Delete Prisoner</button>
</form>
</td>
</tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require("footer.php"); ?>
</body>
</html>