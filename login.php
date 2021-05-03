<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NUnite Admin Login</title>
    <link rel="stylesheet" type="text/css" href="styles/login.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>

<br>
<br>
<br>
<br>

<div class="login">
    <div class="logo">
        <img src="images/NUnite_Logo.png" alt="NUnite Logo" width="220" height="260">
    </div>
    <br>
    <br>
    <br>
    <div class="loginform">
        <input id="email" type="text" placeholder="Email" name="email" required>
        <p> <a href="usernameRecovery.php">Forgot Email?</a></p>
        <br>
        <br>
        <input id="password" type="password" placeholder="Password" name="password" required>
        <p> <a href="passwordRecovery.php">Forgot Password?</a></p>
        <br>
        <br>
        <br>
        <br>
        <button onclick="login()">Sign In</button>
    </div>
</div>

    <script >
        const login = async () => {
            let email = document.getElementById("email").value ;
            let password = document.getElementById("password").value;

            let data = {
                user_email: email,
                password: password
            }

            let resLogin = await axios.post('https://nunite.xyz/assessment-backend/api/admin_login', data);

            console.log(resLogin.data);

            if(resLogin.data.status === 200) {
                window.location.href = "dashboard.php"
            }

            if(resLogin.data.status === 401) {
                alert("Sorry, You Don't Have Access To The NUnite Admin Panel!");
            }
        }
    </script>

</body>
</html>
