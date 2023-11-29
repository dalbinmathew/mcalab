<?php
$con=mysqli_connect("localhost","root","cetmca","student");
if($con)
{
echo "connection established";
}
else
{
echo "connection failed";
}

$rno=$_POST['rno'];
$name=$_POST['name'];
$mark=$_POST['mark'];
$sq="insert into stud values('$rno','$name','$mark')";
$p=mysqli_query($con,$sq);
if($p)
{
echo "<script>alert('succesfully inserted 1 row');</script>";
}
?>
