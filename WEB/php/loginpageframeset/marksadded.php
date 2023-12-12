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
$assignment1=$_POST['assignment1'];
$assignment2=$_POST['assignment2'];
$attendance=$_POST['attendance'];
$at = 0;
switch (true) {
  case $attendance>=90:
    $at += 8;
    break;
  case $attendance>=80:
    $at += 7;
    break;
  case $attendance>=75:
    $at += 6;
    break;
  case $attendance<75:
    $at += 0;
    break;
  default:
}
$internal= (($series1 + $series2) * (0.2)) + (($assignment1 + $assignment2)/(2)) + $at;
if($con)
{
$rq="insert into marks values('$ktuid','$fname','$lname','$semester','$subject','$series1','$series2','$assignment1','$assignment2','$attendance','$internal')";
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
