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

    <section id="viewLogin">
        <h1>Please Login</h1>
        <form id="formLogin">
            <div>User name:</div>
            <div><input title="usernameLogin" type="text" name="loginUser"/> </div>
            <div>Password</div>
            <div><input title="userPassword" type="password" name="userPass" required="true"/> </div>
            <div><input type="submit" id="loginButton" value="login"/></div>
        </form>

    </section>

</main>
<footer>
    <img src="../content/images/BettysLogo.jpg" alt="HTML5 Icon" style="width:60px;height:60px; padding-left: 50px">
    BettyG's Food Blog©
</footer>
</body>
</html>