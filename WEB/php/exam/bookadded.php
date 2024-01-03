<?php
include('conn.php');
if($_POST)
{
    $bookid=$_POST['bookid'];
    $bookname=$_POST['bookname'];
    $author=$_POST['author'];
    $copies=$_POST['copies'];
    if($con)
    {
        $in="INSERT INTO book VALUES('$bookid','$bookname','$author','$copies')";
        $q=mysqli_query($con,$in);
        if($q)
        {
            echo "Order added successfully";
        }
    }
}
?>