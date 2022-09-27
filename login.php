<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sp00tify</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="login_Form">
    <p class="Sp00tify" method="POST">Sp00tify</p>
    <form id="login_Form" action= "process.php" method="POST">
        <p class="text">username</p>
        <input type="text" name="user_name" placeholder="username" required autofocus><br>
        <p class="text">password</p>
        <input type="password" name="password" placeholder="password" required><br>
        <input type="submit" name="login" value="log in"><br>
    </form>
    <form id="signup_Button" action="signup.php" method="POST">
        <input type="submit" name="signup" value="sign up instead"><br>
    </form>
</div>


</body>
</html>
 <html>
<body>
