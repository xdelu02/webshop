<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>header</title>
        <meta charset="utf-8">
        <meta name="description" content="###">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <header class="header">
            <nav>
                <ul>
                    <li style="margin-left: 0.5%">
                        <a style="padding: 5px" href="index.php">
                            <img class="header-logo" src="../img/logo.png" alt="logo">
                        </a>
                    </li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About me</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="header-login">
                    <?php
                        if (isset($_SESSION["userId"])) {
                            echo '  <form action="includes/logout.inc.php" method="post">
                                        <button type="submit" name="logout-submit">Logout</button>
                                    </form>';
                        }
                        else {
                            echo '  <a class="signup-button" href="signup.php">Signup</a>
                                    <form action="includes/login.inc.php" method="post">
                                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                                        <input type="password" name="pwd" placeholder="Password...">
                                        <button type="submit" name="login-submit">Login</button>
                                    </form>';
                        }
                    ?>
                </div>
            </nav>
        </header>
    </body>
</html>