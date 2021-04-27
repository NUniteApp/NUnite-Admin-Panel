<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NUnite Admin Login</title>
    <link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body>

<br>
<br>
<br>
<br>

<form class="login" method="post">
    <div class="logo">
        <img src="images/NUnite_Logo.png" alt="NUnite Logo" width="220" height="260">
    </div>
    <br>
    <br>
    <br>
    <div class="loginform">
        <input type="text" placeholder="Username" name="username" required>
        <p> <a href="usernameRecovery.php">Forgot Username?</a></p>
        <br>
        <br>
        <input type="password" placeholder="Password" name="password" required>
        <p> <a href="passwordRecovery.php">Forgot Password?</p>
        <br>
        <br>
        <br>
        <br>
        <button type="submit"> <a style="color: black" href="dashboard.php">Sign In</a></button>
    </div>
</form>

</body>
</html>
