<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sp00tify</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="signup_Form">
    <form id="signup_Form" action="process.php" method="POST">
        <p class="Sp00tify">Sp00tify</p>
        <p class="text">enter username</p>
        <input type="text" name="user_name" placeholder="username *" required autofocus><br>
        <p class="text">enter first name</p>
        <input type="text" name="first_name" placeholder="first name *" required><br>
        <p class="text">enter last name</p>
        <input type="text" name="last_name" placeholder="last name *" required><br>
        <p class="text">enter email</p>
        <input type="email" name="email" placeholder="email *" required><br>
        <p class="text">confirm email</p>
        <input type="email" name="email2" placeholder="confirm email *" required><br>
        <p class="text">enter password</p>
        <input type="password" name="password" placeholder="password *" required><br>
        <p class="text">confirm password</p>
        <input type="password" name="password2" placeholder="confirm password *" required><br>
        <input type="submit" name="signup" value="sign up"><br>
        
    </form>
    <form id="login_Button" action="login.php" method="POST">
        <input type="submit" name="login" value="log in instead"><br>
    </form>

</div>


</body>
</html>
 <html>
<body>
