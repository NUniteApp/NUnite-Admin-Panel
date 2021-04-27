<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NUnite Username Recovery</title>
    <link rel="stylesheet" type="text/css" href="styles/recovery.css">
</head>
<body>

<br>
<br>
<br>

<form class="usernameRecovery" method="post">
    <div class="logo">
        <img src="images/NUnite_Logo.png" alt="NUnite Logo" width="130" height="150">
    </div>

    <div class="usernameRecoveryForm">
        <br>
        <h1>Username Recovery</h1>
        <p style="text-decoration: unset">We will send you an email to reset your username!</p>
        <br>
        <h1>University Email</h1>
        <input type="email" placeholder="Email" name="email" required>
        <br>
        <br>
        <br>
        <h1>Password</h1>
        <input type="password" placeholder="Password" name="password" required>
        <p> <a href="passwordRecovery.php">Forgot Password?</p>
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
