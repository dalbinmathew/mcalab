<?php
session_start();
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

include 'conn.php';

$se = "SELECT * FROM book WHERE username='$username'";
$query = mysqli_query($con, $se);
?>

<html>
<head>
    <title>My Orders</title>
    <link rel='stylesheet' href='mystyle.css'>
</head>
<body>
    <center>
        <table border="1px">
            <tr>
                <td colspan="2"><h1 id='h1'><center>MY ORDERS</center></h1></td>
            </tr>
            <tr>
                <td>USERNAME</td>
                <td><input type='text' name='username' readonly value="<?php echo $username; ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <table border="1px">
                        <tr>
                            <th>BOOK ID</th>
                            <th>BOOK NAME</th>
                            <th>AUTHOR</th>
                            <th>NO.OF COPIES</th>
                        </tr>
                        <?php
                        if(mysqli_num_rows($query) > 0) {
                            while($row = mysqli_fetch_assoc($query)) {
                                echo "
                                <tr>
                                    <td><input type='text' name='bookid' readonly value='".$row['bookid']."'></td>
                                    <td><input type='text' name='bookname' readonly value='".$row['bookname']."'></td>
                                    <td><input type='text' name='author' readonly value='".$row['author']."'></td>
                                    <td><input type='text' name='copies' readonly value='".$row['copies']."'></td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No orders found</td></tr>";
                        }
                        ?>
                    </table>
                </td>
            </tr>
        </table>
        <br>
        <button><a href='logout.php'>LOG OUT</a></button>
    </center>
</body>
</html>
