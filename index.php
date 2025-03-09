<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

    <div class="forms">
        <div class="sign-up">
            <h3>Sign up</h3>
            <form action="includes/formhandler.inc.php" method="post">
                <input type="text" name="email" placeholder="Username">
                <input type="password" name="user_password" placeholder="Password">
                <button>Sign up</button>
            </form>
        </div>
        <div class="delete">
            <h3>Delete</h3>
            <form action="includes/userdelete.inc.php" method="post">
                <input type="text" name="email" placeholder="Username">
                <input type="password" name="user_password" placeholder="Password">
                <button>Delete</button>
            </form>
        </div>
    </div>

</body>
</html>