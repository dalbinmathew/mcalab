<html>
<head><title></title></head
<body>
<form action="" method="POST">
<table border=1px>
<tr>
<td>
Enter number to find factorial
</td>
<td>
<input type="number" name="fact"></input>
</td>
</tr>
<tr>
<td>
factorial
</td>
<td>
<?php
$f=1;
for ($i = $_POST['fact']; $i > 0; $i--)
{
$f *= $i;
}
echo $f
?>
</td>
</tr>
</table>
</body>
</html>
