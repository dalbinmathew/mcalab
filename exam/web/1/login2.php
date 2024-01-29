<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="mystyle2.css">
</head>
<body>
    <div class="container">
        <form action="book.php" method="post" class="login-form">
            <h1>Login</h1>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <p>No account? <a href="signup.php">Sign up here</a></p>
        </form>
    </div>
</body>
</html>
