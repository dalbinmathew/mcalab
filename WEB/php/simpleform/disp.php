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

$s="select * from stud";
$q=mysqli_query($con,$s);

if(mysqli_num_rows($q))
{
echo
"<table border=1px><th>Roll No</th><th>Name</th><th>Mark</th>";
while($row=mysqli_fetch_assoc($q))
{
echo"<tr>";
echo"<td>".$row["rollno"]."</td>";
echo"<td>".$row["name"]."</td>";
echo"<td>".$row["mark"]."</td>";
echo"</tr>";
}
echo"</table>";
}

?>
