<link href="style.css" rel="stylesheet" type="text/css"/>
<?php
    require 'dbConnect.php';
    session_start();
    $title = stripslashes($_REQUEST['title']);
    $title = mysqli_real_escape_string($conn, $title);
    //$description = stripslashes($_REQUEST['description']);
    //$description = mysqli_real_escape_string($conn, $description);
    $ingredients = stripslashes($_REQUEST['ingredients']);
    $ingredients = mysqli_real_escape_string($conn, $ingredients);
    $instructions = stripslashes($_REQUEST['instructions']);
    $instructions = mysqli_real_escape_string($conn, $instructions);

    if(isset($_POST['submit'])){
        $title= $_POST['title'];
        echo "Title: " .$title . "<br />";
        //$description = $_POST['description'];
        //echo "Description: " .$description . "<br />";
        $ingredients = $_POST['ingredients'];
        echo "Ingredients: " .$ingredients . "<br />";
        $instructions = $_POST['instructions'];
        echo "Instructions: ".$instructions."<br />";
    }
    $query    = "INSERT INTO recipeTable(title,ingredients,instructions) VALUES ('$title', '$ingredients','$instructions')";
    $result   = mysqli_query($conn, $query);
    echo "Your recipe was added - check it out on the database.";
    ?>
    <p><button onclick="location.href='main.php'">Main</button></p>
