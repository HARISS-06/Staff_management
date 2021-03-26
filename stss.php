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
	$sql = "SELECT * FROM time_table WHERE id='$id1'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
  // output data of each row
  	while($row = $result->fetch_assoc()) {
    echo "<br> id: ". $row["id"]. "moday: ". $row["monday(9 to 10)"]. " " . $row["tuesday(9 to 10)"] . "<br>";
  }
} else {
  echo "0 results";
}
}
?>