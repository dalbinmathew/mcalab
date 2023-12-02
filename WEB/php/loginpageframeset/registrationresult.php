<?php
include 'conn.php';
if ($_POST)
{
$name=$_POST['name'];
$ktuid=$_POST['ktuid'];
$semester=$_POST['semester'];
$rollno=$_POST['rollno'];
$gender=$_POST['gender'];

if($con)
{
$rq="insert into studentregistration values('$name','$ktuid','$semester','$rollno','$gender')";
$rs=mysqli_query($con,$rq);
if($rs)
{
$res="Registered Successfully!";
}
}
}
?>

<html>
<head><title>Registration Status</title></head>
<body>
<center>
<h2><?php
echo "$res";
?></h2>
<a href='login'>Go to login page</a>
</center>
</body>
</html>
