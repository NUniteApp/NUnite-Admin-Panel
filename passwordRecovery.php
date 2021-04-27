<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NUnite Password Recovery</title>
    <link rel="stylesheet" type="text/css" href="styles/recovery.css">
</head>
<body>

<br>
<br>
<br>

<form class="passwordRecovery" method="post">
    <div class="logo">
        <img src="images/NUnite_Logo.png" alt="NUnite Logo" width="130" height="150">
    </div>

    <div class="passwordRecoveryForm">
        <br>
        <h1>Password Recovery</h1>
        <p style="text-decoration: unset">We will send you an email to reset your password!</p>
        <br>
        <h1>University Email</h1>
        <input type="email" placeholder="Email" name="email" required>
        <br>
        <br>
        <br>
        <h1>Username</h1>
        <input type="text" placeholder="Username" name="username" required>
        <p> <a href="usernameRecovery.php">Forgot Username?</p>
        <br>
        <br>
        <br>
        <br>
        <button type="submit"> <a style="color: black" href="recoveryConfirmation.php">Send Email</a></button>
        <p> <a href="login.php">Return To Login</a></p>
    </div>
</form>

</body>
</html>
