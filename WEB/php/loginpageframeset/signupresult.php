<?php
include 'conn.php';
if ($_POST)
{
$name=$_POST['name'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

if($con)
{
$rq="insert into userdetails values('$name','$age','$email','$phone','$username','$password')";
$rs=mysqli_query($con,$rq);
if($rs)
{
$res="Account created!";
}
}
}
?>

<html>
<head><title>Account created</title></head>
<body>
<center>
<h2><?php
echo "$res";
?></h2>
<a href="login.php">go to login page</a>
</center>
</body>
</html>
