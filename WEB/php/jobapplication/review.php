<html>
<head><title>Your Details</title></head>
<body bgcolor="lightblue">
<center>
<br><br><br>


<table border=1px padding=40px width=600px>
<tr rowspan=2>
<td colspan=2><center><h1>Your Details</h1></center></td></tr>


<tr>
<td width=250px>Name</td>
<td><?php echo $_POST['name']; ?></td>
</tr>

<tr>
<td width=250px>Age</td>
<td><?php echo $_POST['age']; ?></td>
</tr>

<tr>
<td width=250px>Email</td>
<td><?php echo $_POST['email']; ?></td>
</tr>

<tr>
<td width=250px>Languages Known</td>
<td>
<?php
$name = $_POST['language'];

foreach ($name as $language)
{ 
    echo $language."<br>";
}
?>
</td>
</tr>

<tr>
<td width=250px>Phone number</td>
<td>
 <table border=1px>
 <tr>
 <th>Home</th>
 <th>Office</th>
 </tr>
 <tr>
 <td><?php echo $_POST['homenumber']; ?></input></td>
 <td><?php echo $_POST['officenumber']; ?></input></td>
 </tr>
 </table>
</td>
</tr>




</table>
</center>
</body>
</html>

