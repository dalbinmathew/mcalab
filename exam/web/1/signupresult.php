<?php
include 'conn.php';
if($_POST)
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    
    if($con)
    {
        if($password==$repassword)
        {
            $in="INSERT INTO login VALUES('$name','$email','$username','$password')";
            $query=mysqli_query($con,$in);
            if($query)
            {
                echo"
                <head>
            <title>ACCOUNT CREATED SUCCESSFULLY</title>
            <center>Account Created Successfully
                <br>
                <a href='login.php'>Go to login page</a></center>";
            }
            else
            {
                echo"Error";
            }
        }
        else{
            echo"Passwords Mismatch";
        }
    }
}