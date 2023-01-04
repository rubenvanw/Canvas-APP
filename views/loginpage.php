<?php

$url_without_params =  $_SERVER['REQUEST_SCHEME'] .'://'. $_SERVER['HTTP_HOST']
    . explode('?', $_SERVER['REQUEST_URI'], 2)[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>expo</title>
    <link rel="stylesheet" href=<?php echo $url_without_params . "css/home.css"; ?>>
    <script src="https://cdn.jsdelivr.net/npm/p5@1.4.1/lib/p5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <div class="links">
            <li><a href=<?php echo $url_without_params ?>>Canvas</a></li>
            <li><a href=<?php echo $url_without_params . "?overview" ?>>Overview</a></li>
            <?php
            if (isset($_SESSION["user"])) {
                echo "<a href='{$url_without_params}?loginpage'>Logout</a>";
            } else {
                echo "<a href='{$url_without_params}?loginpage'>Login</a>";
            }
            ?>
        </div>
        <div class="login-container">
        <?php
            if (isset($_SESSION["user"])) {
                include "views/templates/template_logout.php";
            } else {
                include "views/templates/template_login.php";
            }
            ?>
        </div>
    </div>
</body>

</html>