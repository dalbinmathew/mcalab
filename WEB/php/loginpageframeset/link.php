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
echo "<html>";
echo "<head><title>FUNCTIONS</title><head>";
echo "<frameset cols='20%, 80%'>";
echo "<frame name='nav' src='nav.php'/>";
echo "<frame name='main' src='welcome.php'/>";
echo "</frameset>";
}
else
{
echo"Invalid username or password<br><br>";
echo"<a href='signup.php'>Sign-Up</a>";
}
}
}
?>
