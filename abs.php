<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="staff_mgm";
try
{
	$conn = mysqli_connect($servername, $username,$password,$dbname);
	echo("successful in connection");
}
catch(MySQLi_Sql_Exception $ex)
{
	echo("error in connection");
}
if(isset($_POST['submit']))	
{
	$id1=$_POST['id'];
	$date1=$_POST['date'];
	$sts1=$_POST['sts'];
	$register_query = "INSERT INTO staff_att(`id`, `Sts`, `date`) VALUES ('$id1','$sts1','$date1')";
	try
	{
			$register_result = mysqli_query($conn, $register_query);
			if($register_result)
			{
					if(mysqli_affected_rows($conn)>0)
					{
						echo("registration successful");
					}
					else
					{	
					echo("error in registration");
					}
			}
	}
	catch(Exception $ex)
	{
		echo("error".$ex->getMessage());
	}
}
?>