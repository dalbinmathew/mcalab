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
            $re="SELECT * FROM book WHERE bookid='$bookid'";
            $req=mysqli_query($con,$re);
            if(mysqli_num_rows($req))
            {
                $row=mysqli_fetch_assoc($req);
                echo "Book Details:<br> Book ID:<input type='text' readonly value=".$row['bookid'].">";
            }
        }
    }
}
?>

