<?php
include "conn.php";
if($_POST)
{
    $bookname=$_POST['bookname'];
    if($con)
    {
        $se="SELECT * FROM bookdetails WHERE bookname='$bookname'";
        $q=mysqli_query($con,$se);
        if(mysqli_num_rows($q))
        {
            echo"<html>
            <head><title>RESULT</title></head>
            <body>
            <center>
            <table border=1px>
                <tr rowspan=2>
                    <td><center>BOOK DETAILS</center></td>
</tr>
<tr>
<td>
<table border=1px>
<tr>
<th>BOOK ID</th>
<th>BOOK NAME</th>
<th>AUTHOR</th>
<th>PAGES</th>
</tr>
<tr>";
            while($row=mysqli_fetch_assoc($q))
            {
                echo"<td><input type='text' readonly value=".$row['bookid']."></td>
                <td><input type='text' readonly value=".$row['bookname']."></td>
                <td><input type='text' readonly value=".$row['author']."></td>
                <td><input type='text' readonly value=".$row['pages']."></td>";
            }
        
        echo"
        </tr>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </center>
        </body>
        </html>";
        }
        else{
            echo"No such book";
        }
    }
}
?>