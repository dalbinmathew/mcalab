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


$sq="insert into stud values(6,'dibin',90)";
$p=mysqli_query($con,$sq);
if($p)
{
echo "<script>alert('succesfully inserted 1 row');</script>";
}
?>
