<?php
include 'conn.php';
if($_POST)
{
    $bookid=$_POST['bookid'];
    $bookname=$_POST['bookname'];
    $author=$_POST['author'];
    $pages=$_POST['pages'];
    if($con)
    {
        $in="INSERT INTO bookdetails VALUES('','$bookname','$author','$pages')";
        $q=mysqli_query($con,$in);
        if($q)
        {
            echo"<html>
            <head><title>BOOK ADDED</title></head>
            <body>
            <center><h2>Book Added Successfully</h2>
            <br>
            <a href='search.php'>Search Books</a>
            <br><br>
            <a href='register.php'>Add another Book</a>
            </center>
            </body>
            </html>";
        }
    }
}
?>