<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>User Recipes</title>
</head>
<body>
    <div class="main">
        <h2>Recipes Page</h2>
        <?php
    include 'dbConnect.php';
    $sql = "SELECT * FROM `recipeTable`;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo '<span style="font-size: 40px; color: #000080; font-weight: bold;">', $row['title']."<br>".'</span>';
            echo '<span style="font-size: 30px; color: #FFFFFF; font-weight: normal;">', $row['ingredients']."<br>". '</span>';
            echo '<span style="font-size: 30px; color: #000000; font-weight: medium;">', $row['instructions']."<br>". "<br>".'</span>';
        }
    }
?>
    <p><button style="width:auto" onclick="location.href='addRecipe.php'">Add Recipe</button></p>
    <p><button onclick="location.href='main.php'">Main</button></p> 
    </div>
</body>
</html>
