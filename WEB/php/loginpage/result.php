<?php
include 'conn.php';
if ($_POST)
{
$username=$_POST['username'];
$password=$_POST['password'];
if($con)
{
$sq="select * from userdetails where username='$username' and password='$password'";
$q=mysqli_query($con,$sq);
if(mysqli_num_rows($q))
{
$row = mysqli_fetch_assoc($q);
echo"You are logged in";
}
else
{
echo"Invalid username or password<br><br>";
echo"<a href='signup.php'>Sign-Up</a>";
}
}
}
?>
