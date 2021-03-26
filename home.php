<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	body
	{
  background-image: url("kec.png");
  background-repeat: no-repeat;
  background-position: right top;
  margin-right: 200px;
  background-attachment: fixed;
		background-color:blanchedalmond;
	}
	.f1{
		font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		font-size: 40px;
	}
	.f2{
		font-style: italic;
		font-size: 80;
	}
	
</style>
</head>
<body>
	<h1><br>Hello <?php echo $_SESSION['fname']; ?></h1>
	<form action="abs.php">
		&nbsp; ID:
		<input type="number" value="id" name="ID">
		Select date:&nbsp;&nbsp;&nbsp;<input type="date" id="Select" name="Select" value="2021-03-26" min="2021-01-01" max="2021-12-31">
		Status:<input type="text" value="P for Present or A for Absent" name="sts">
		<input type="submit">
		<input type="reset">		
</form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>