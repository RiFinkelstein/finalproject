<?php
session_start();
if(!isset($_SESSION["success"])){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>Main</title>
    </head>
    <body>
    <?php include 'sidebar.php'?>
        <div class="main">
            <h2>Main page</h2>
            <p>Thanks for logging in and registering</p>
            <p>Feel free to add your own recipes and look at the calendar for recipes for certain holidays.</p>
        <?php
        if(isset($_SESSION['success'])): ?>
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        <?php endif ?>
        <!-- if the user logs in print information about the user  -->
        <?php if(isset($_SESSION['username'])): ?>
            <button onclick="location.href='main.php'">Logout</button>
        <?php endif ?>
        </div>
    </body>
</html>