<?php
include 'conn.php';
if ($_POST)
{
$ktuid=$_POST['ktuid'];
$semester=$_POST['semester'];
$subject=$_POST['subject'];
$series1=$_POST['series1'];
$series2=$_POST['series2'];
$assignment=$_POST['assignment'];
$attendance=$_POST['attendance'];

if($con)
{
$up="update marks set series1='$series1', series2='$series2', assignment='$assignment', attendance='$attendance' where ktuid='$ktuid' AND subject='$subject'";
$upq=mysqli_query($con,$up);
if($upq)
{
$res="Marks updated Succesfully";
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
