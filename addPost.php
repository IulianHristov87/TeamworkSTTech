<!DOCTYPE html>
<?php
    require 'config.php';
    require 'functions.php';

    $category = $_GET['category'];

    if(isset($_POST['add'])){
        $title = $_POST['title'];
        $content = $_POST['content'];

        if(addPost($title, $content, $category, $mysqli)){
            header('Location: '.$category.'.php');
            exit();
        }        
    }
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
    <section id="viewHome">
        <h1>Add a new recipe for <?php echo $category; ?>.</h1>

        <form method="POST" name="addPosts" action="#">
            Title:<br>
                <textarea name="title" rows="2" cols="30" style="height: 30px;width: 295px"></textarea>
            <br>
            Content:
            <br>
                <textarea name="content" rows="20" cols="30" style="width: 295px"></textarea>
            <input type="submit" name="add" value="Add" style="border: solid black 4px; padding: 15px"/>
        </form>
    </section>


</main>
<footer>
    <img src="content/images/BettysLogo.jpg" alt="HTML5 Icon" style="width:60px;height:60px; padding-left: 50px">
    BettyG's Food Blog©
</footer>
</body>
</html>