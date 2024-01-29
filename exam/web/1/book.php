<?php
include 'conn.php';
session_start();
if($_POST)
{
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['username']=$username;
$sq="select * from login where username='$username' and password='$password'";
$q=mysqli_query($con,$sq);
if(mysqli_num_rows($q))
{
echo"
<html>
    <head>
        <title>ORDER</title>
        <link rel='stylesheet' href='mystyle.css'>
    </head>
    <body>
        <center>
        <form action='ordersuccess.php' method=post>
            <table border=1px>
                <tr rowspan=2>
                    <td colspan=2><h1 id='h1'><center>ORDER</center></h1></td>
                </tr>
                <tr>
                    <td>BOOK ID</td>
                    <td><input type='text' name='bookid' required></td>
                </tr>
                <tr>
                    <td>BOOK NAME</td>
                    <td><input type='text' name='bookname' required></td>
                </tr>
                <tr>
                    <td>AUTHOR</td>
                    <td><input type='text' name='author' required></td>
                </tr>
                <tr>
                    <td>NO.OF COPIES</td>
                    <td><select name='copies'>";
                        
                            for($i=0;$i<100;$i++)
                            {
                                echo"<option>".$i."</option>";
                            }
                        echo"
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>USERNAME</td>";
                        if($con)
                        {
                            echo"<td><input type='text' name='username' readonly value=".$username."></td>";
                        }
                    echo"
                </tr>
                <tr>
                    <td colspan=2><center><input type='submit' value='ORDER'></td>
</tr>
</table>
<br>
<a href='vieworders.php'>View your orders here</a>
</form>
<button><a href='logout.php'>LOG OUT</a></button>
</center>
</html>";
}
else{
    echo"INVALID PASSWORD OR USERNAME";
}
}
?>

