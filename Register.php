<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto The Explorer</title>
    <link rel="icon" href="Style/Image/RKS.png">
    <link rel="stylesheet" href="Style/CSS/register.css">
</head>
<body>
    <div class="container">
        <div class="register-box">
            <h2>Register</h2>
            <form action="System/Proses_Register.php" method="POST">
                <div class="input-box">
                    <input type="text" name="username" id="username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <input type="email" name="email" id="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="password" required>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <input type="password" name="confirmPassword" id="confirmPassword" required>
                    <label>Confirm Password</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-link">
                    <a href="Login.php">Already have an account? Login</a>
                </div>
            </form>
        </div>

    </div>

</body>
</html>