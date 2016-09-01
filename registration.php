<!DOCTYPE html>
<?php
    require 'config.php';
    require 'functions.php';

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(register($username, $password, $mysqli)){
            header('Location: login.php');
            exit();
        }else{
            echo 'Registration failed.';
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

    <section id="viewRegistration">
        <h1>Registration</h1>
        <form method="POST" id="formRegister">
            <div>User name:</div>
            <div><input title="username" type="text" name="username"/> </div>
            <div>Password</div>
            <div><input title="password" type="password" name="password" required="required"/> </div>
            <div><input type="submit" id="registerButton" name="register" value="register"/></div>
        </form>
    </section>


</main>
<footer>
    <img src="content/images/BettysLogo.jpg" alt="HTML5 Icon" style="width:60px;height:60px; padding-left: 50px">
    BettyG's Food Blog©
</footer>
</body>
</html>