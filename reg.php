<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$id=$_POST['id'];
$mob=$_POST['mob'];
$dob=$_POST['dob'];
$mailid=$_POST['mailid']
$dept = $_POST['dept'];
if(!empty($lname)|| !empty($lname) || !empty($id) || !empty($mob)|| !empty($dob)|| !empty($mailid) ||!empty($dept))
{
	#code...
}
else{
	echo "All field are required";
	die();
}
?>