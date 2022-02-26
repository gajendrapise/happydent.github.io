<?php
session_start();
header("location:appointment.php");
include 'conn.php';
$app=$_POST['app'];
$q="SELECT * FROM linn WHERE appoinment='$app'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO linn(appoinment) VALUES('$app')";
	mysqli_query($con,$qy);
}
?>