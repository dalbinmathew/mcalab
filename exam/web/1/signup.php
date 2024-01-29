<html>
    <head>
        <title>SIGN-UP</title>
        <link rel='stylesheet' href='mystyle.css'>
        <script>
            function validateform()
            {
            email=document.forms.myform.email.value;
            if(!email.includes('@')){
                alert('email must contain @');
                return false;
            }
        }
        </script>
    </head>
    <body>
    <body>
        <center>
        <form name='myform' action='signupresult.php' onsubmit='return validateform()' method=post>
            <table border=1px>
                <tr rowspan=2>
                    <td colspan=2><h1 id='h1'><center>SIGN-UP</center></h1></td>
                </tr>
                <tr>
                    <td>NAME</td>
                    <td><input type='text' name='name' required></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td><input type='text' name='email' required></td>
                </tr>
                <tr>
                    <td>USERNAME</td>
                    <td><input type='text' name='username' required></td>
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td><input type='password' name='password' required></td>
                </tr>
                <tr>
                    <td>RETYPE PASSWORD</td>
                    <td><input type='password' name='repassword' required></td>
                </tr>
                <tr>
                    <td colspan=2><center><input type='submit' value='SIGN-UP'></td>
</tr>
</table>
<br>
<a href='login.php'>Login Here</a>
</form>
</center>
</html>