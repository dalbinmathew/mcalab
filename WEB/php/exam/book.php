<?php
include 'conn.php';
if($_POST)
{
$username=$_POST['username'];
$password=$_POST['password'];
if($con)
{
    $up="SELECT * FROM login WHERE username='$username' AND password='$password'";
    $q=mysqli_query($con,$up);
    if(mysqli_num_rows($q))
    {
        echo"
        <html>
        <body>
        <form action='bookadded.php' method='post'>
        Book ID:<input type='text' name='bookid'><br>
        Book Name:<input type='text' name='bookname'><br>
        Author<input type='text' name='author'><br>
        No of copies:
        <select name='copies'>
        <option>Select an option</option>";
      
        for ($i = 1; $i <= 50; $i++) {
          echo "<option>".$i."</option>";
        }
      
    echo"</select><br>
    <input type='submit' name='submit'>
    </form>
    </body></html>";
    }
    else
    echo"invalid password or username";
}
}
?>