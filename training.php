<?php

$con = mysqli_connect("localhost1234","root","","training");
$roll=5;
$first_name="shubham";
$last_name="tiwari";

$sql="DELETE FROM student where roll_no=$roll;

if($con->query($sql)===TRUE){
	echo "deleted record successfully";
}else{
	echo "error:".$sql.<br>.$con->error;
}
?>

