<?php
session_start();
header("location:index.php");
include 'conn.php';
$rcode=$_POST['rcode'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$q="SELECT * FROM tab WHERE rcode='$rcode' && name='$name' && email='$email' && mobile='$mobile'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO tab(rcode,name,email,mobile) VALUES('$rcode','$name','$email','$mobile)";
	mysqli_query($con,$qy);
}
?>