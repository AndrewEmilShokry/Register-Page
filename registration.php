<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Register</h2>
        </div>
        <form action="registration.php" method="post">
            <?php include('errors.php') ?>
            <div>
                <label>Username</label>
                <input type="text" name="username" required>
            </div>    
            <div>
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="password">Paswsword</label>
                <input type="password" name="password_1" required>
            </div>
            <div>
                <label for="password">Confrim Paswsword</label>
                <input type="password" name="password_2" required>
            </div>

            <button type="submit" name="reg_user">Submit</button>
            <p> Already a user <a href="login.php"><b>Log in<b></a></p>
        </form>
            

    </div>
   
</body>
</html>