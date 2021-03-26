<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pass = $_POST['pass'];
$id = $_POST['id'];
$mob = $_POST['mob'];
$dob = $_POST['dob'];
$mailid = $_POST['mailid'];
$dept = $_POST['dept'];
if (($lname)|| !empty($lname)|| !empty($pass) || !empty($id) || !empty($mob)|| !empty($dob)|| !empty($mailid) ||!empty($dept)) {
 $host = "localhost";
    $dbfname = "root";
    $dbPass = "";
    $dbname = "staff_mgm";
    $conn = new mysqli($host, $dbfname, $dbPass, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT mailid From staff_det Where mailid = ? Limit 1";
     $INSERT = "INSERT Into staff_det (fname,lname,pass,id,mob,dob,mailid,dept) values(?,?,?, ?, ?, ?, ?, ?)";
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $mailid);
     $stmt->execute();
     $stmt->bind_result($mailid);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssiiiss",$fname,$lname,$pass,$id,$mob,$dob,$mailid,$dept);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>