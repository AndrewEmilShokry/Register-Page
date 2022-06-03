<?php

session_start();

if(isset($_SESSION['username'])){
    $_SESSION['msg'] = "you must log in first to view this page";
    header("location : login.php");
}

if(isset($_GET['logout'])){
    session_destory();
    unset($_SESSION['username']);
    header("location : login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>This is the homepage</h1>

    <?php
    if(isset($_SESSION['success'])) : ?>
     <div>
        <h3>
            <?php
            echo $_SESSION['succees'];
            unset($_SESSION['success']);
            ?>
        </h3>    
     </div>
    <?php endif ?>

    <?php if(isset($_SESSION['username'])) : ?>
        <h3>Welcome <strong> <?php echo $_SESSION['username']; ?></strong></h3>

        <button><a href="index.php?logout='1'"></a></button>
    
    <?php endif ?>  
</body>

</html>
