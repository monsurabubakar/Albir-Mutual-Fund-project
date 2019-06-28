<?php
session_start();
//mysqli_connect('localhost', 'root', '', 'albirr_investment_club');
$conn=mysqli_connect('localhost', 'root', '', 'albirr_investment_club');

$username = $_POST['myuser'];
//$password = $_POST['password'];
$query= "SELECT * FROM members WHERE member_username='$username'";

$result = mysqli_query($conn, "$query");
$total = mysqli_num_rows($result);

if ($total>0) {
	//document.location.href='logout.php'; 
}else {
	echo "<h3>username or password incorrect</h3>";
	
}




?>