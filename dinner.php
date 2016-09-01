<!DOCTYPE html>
<?php
    require 'config.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="content/main.css"/>

    <title>Food Blog</title>

</head>
<body>
<header>
    <a href="index.php" id="linkHome">Home</a>
    <?php
        if(!isset($_SESSION['username'])){
            echo '
                <a href="registration.php" id="registration">Register</a>
                <a href="login.php" id="linkLogin" >Login</a>';
        }else{
            echo '
                <a href="logout.php" id="linkLogout">Logout</a>';
        }
    ?>
    <div class="dd-menu">
        <a href="recipes.php" id="recipes" class="dd-but">Recipes
            <div class="dd-content">

                <a href="breakfast.php" id="breakfast">Breakfast</a>
                <a href="lunch.php" id="lunch">Lunch</a>
                <a href="dinner.php" id="dinner">Dinner</a>
                <a href="desserts.php" id="desserts">Desserts</a>
                <a href="howTo.php" id="helpfulHowTo">Helpful How-To</a>
            </div>

        </a>
    </div>
</header>
<main>
    <?php
        $q = $mysqli -> query("SELECT * FROM posts WHERE category = 'dinner'");
        while($r = $q -> fetch_assoc()){
            echo '
                <div class="posts"><h1>'.$r["title"].'</h1>
                '.$r["content"].' 
                <a href="deletePost.php?id='.$r['id'].'&return=dinner">Delete</a></div>
            ';
        }
    ?>
    <br>
    <a href="addPost.php?category=dinner">Add new recipe</a>
</main>
<footer>
    <img src="content/images/BettysLogo.jpg" alt="HTML5 Icon" style="width:60px;height:60px; padding-left: 50px">
    BettyG's Food Blog©
</footer>
</body>
</html>