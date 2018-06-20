<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];


$con=new mysqli('localhost','root','saurav1994');
mysqli_select_db($con,'weather');

$q="SELECT * FROM user where email='$email' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
$_SESSION['email']=$email;

//echo '<a href="entrance.html">CLICK HERE</a>';
header('location:http://localhost/WEATHER FORECAST/entrance.html');
}
else 
{
	//echo 'xyx';
header('location:http://localhost/WEATHER FORECAST/login.php');
}
?>