<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="staff_mgm";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['pass'];
$id=$_POST['id'];
$mob = $_POST['mob'];
$dob=$_POST['dob'];
$mailid=$_POST['mailid'];
$dept = $_POST['dept'];
$register_query = "INSERT INTO staff_det(`fname`, `lname`, `pass`, `id`, `mob`, `dob`, `mailid`, `dept`) VALUES ('$fname','$lname','$pass','$id','$mob','$dob','$mailid','$dept')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo("registration successful");
}else{
echo("error in registration");
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}
 
?>