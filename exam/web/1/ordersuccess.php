<?php
include 'conn.php';
if($_POST)
{
    $bookid=$_POST['bookid'];
    $bookname=$_POST['bookname'];
    $author=$_POST['author'];
    $copies=$_POST['copies'];
    $username=$_POST['username'];
    if($con)
    {
        $in="INSERT INTO book VALUES('$bookid','$bookname','$author','$copies','$username')";
        $query=mysqli_query($con,$in);
        if($query)
        {
            echo"<head>
            <title>ORDER SUCCESS</title>
            </head>
            <center>Order Successfull
            <br><br>
            <a href='vieworders.php'>View your orders here</a><br><br>
            <button><a href='logout.php'>LOG OUT</a></button>
            </center>";
            
        }
        else{
            echo"Error";
        }
    }
}
?>