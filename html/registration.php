<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../content/main.css"/>

    <title>Food Blog</title>

</head>
<body>
<header>
    <a href="home.php" id="linkHome">Home</a>
    <a href="registration.php" id="registration">Register</a>
    <a href="login.php" id="linkLogin">Login</a>
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
        <form id="formRegister">
            <div>User name:</div>
            <div><input title="username" type="text" name="registerUser"/> </div>
            <div>Password</div>
            <div><input title="password" type="password" name="registerPass" required="required"/> </div>
            <div><input type="submit" id="registerButton" value="register"/></div>
        </form>
    </section>


</main>
<footer>
    <img src="../content/images/BettysLogo.jpg" alt="HTML5 Icon" style="width:60px;height:60px; padding-left: 50px">
    BettyG's Food Blog©
</footer>
</body>
</html>