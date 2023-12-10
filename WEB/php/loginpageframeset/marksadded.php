<?php
include 'conn.php';
if ($_POST)
{
$ktuid=$_POST['ktuid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$semester=$_POST['semester'];
$subject=$_POST['subject'];
$series1=$_POST['series1'];
$series2=$_POST['series2'];
$assignment=$_POST['assignment'];
$attendance=$_POST['attendance'];

if($con)
{
$rq="insert into marks values('$ktuid','$fname','$lname','$semester','$subject','$series1','$series2','$assignment','$attendance')";
$rs=mysqli_query($con,$rq);
if($rs)
{
$res="Marks added Succesfully";
}
}
}
?>

<html>
<head><title>Marks Status</title></head>
<body>
<center>
<h2><?php
echo "$res";
?></h2>
</center>
</body>
</html>
