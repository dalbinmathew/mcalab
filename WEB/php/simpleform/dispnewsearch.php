
<?php
$con=mysqli_connect("localhost","root","cetmca","student");
/*
if($con)
{
echo "connection established <br>";
}
else
{
echo "connection failed";
}
*/

$n=$_POST['query'];
$s="select * from stud where rollno=$n";
$q=mysqli_query($con,$s);

if(mysqli_num_rows($q))
{
while($row = mysqli_fetch_assoc($q)) 
{
echo"Roll No:<input type='text' disabled value=".$row["rollno"]."> &ensp;";
echo"Name:<input type='text' disabled value=".$row["name"]."> &ensp;";
echo"Mark:<input type='text' value=".$row["mark"]."> &ensp;";
}
}
?>
