

<?php
$email = $_POST['email'];
$password = $_POST['password'];
//new mysqli
//mysqli_connect
$con=new mysqli('localhost','root','saurav1994');
mysqli_select_db($con,'weather');

$q= "INSERT INTO users (email,password) values('$email','$password')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>INSERTION</title>
 </head>
 <body background="images/blur.jpeg">
  <h1>WEATHER FORECASTING</h1>
  <p><?php 
      if ($status==1) 
      {
       echo "Sign up successfull"; ?>
        <h2> Login to continue...</h2> <a href="entrance.html"> Click here </a>
        <?php
      }
       else 
       {
       echo "signup failed"; ?>
       <h2>register again ?</h2> <a href="signup.html"> Click here</a>
       <?php
   	 }
      ?>
  </p>

</body>
</html>
