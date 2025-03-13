<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login page</title>
</head>
<body>

    <div class="forms">
        <div class="login-form">
            <h3>Login</h3>
            <form class="form" action="includes/login.inc.php" method="post">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="user_password" placeholder="Password">
                <button>Sign up</button>
            </form>
        </div>
        <div class="sign-up-form">
            <h3>Sign up</h3>
            <form class="form" action="includes/signup.inc.php" method="post">
                <input type="text" name="first_name" placeholder="First name">
                <input type="text" name="last_name" placeholder="Last name">
                <input type="text" name="email" placeholder="Username">
                <input type="password" name="user_password" placeholder="Password">
                <button>Sign up</button>
            </form>
        </div>
    </div>

</body>
</html>