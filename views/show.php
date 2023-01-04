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
    <link rel="stylesheet" href=<?php echo $url_without_params . "css/show.css"; ?>>
    <script src="https://cdn.jsdelivr.net/npm/p5@1.4.1/lib/p5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div id="container-canvas" class="container-canvas">
            <h1>
                <?php
                $title = trim($data["titel"], " 0..9");
                echo $title;
                ?>
            </h1>
            <?php

            echo "<img class='canvas-image' src='img/" . $data["titel"] . ".jpg" . "'>";
            ?>
        </div>
        <div id="container-options" class="container-options">
            <div class="container-options-wrapper">
                <ul>
                    <a href=<?php echo $url_without_params ?>>Canvas</a>
                    <a href=<?php echo $url_without_params . "?overview" ?>>Overview</a>
                    <?php
                    if (isset($_SESSION["user"])) {
                        echo "<a href='{$url_without_params}?loginpage'>Logout</a>";
                    } else {
                        echo "<a href='{$url_without_params}?loginpage'>Login</a>";
                    }
                    ?>
                </ul>
            </div>
            <div class="container-options-wrapper">
                <form accept-charset="UTF-8" action=<?php echo $url_without_params . "comment_create.php"?> method="POST">
                    <input type="hidden" name="canvas_id" value="<?php echo $data['id'] ?>">
                    <textarea name="comment" id="comment" cols="45" rows="4" required placeholder="Leave A Comment"></textarea>
                    <br>
                    <button id="submit" name="submit">Comment</button>
                </form>
            </div>
            <div class="container-options-wrapper">
                <span class="emoji">👍</span>
                <span class="emoji">👎</span>
                <span class="emoji">😁</span>
                <span class="emoji">😀</span>
                <span class="emoji">🤨</span>
                <span class="emoji">😐</span>
                <span class="emoji">🤢</span>
                <span class="emoji">🧐</span>
                <span class="emoji">😲</span>
                <span class="emoji">💩</span>
                <span class="emoji">🤡</span>
            </div>
            <div class="container-options-wrapper">
                <div class="comment-section">
                    <?php
                    foreach ($commentData as $comment) {
                        echo $comment["comment_content"] . "<br>";
                        echo "<span class='comment-datetime'>" . $comment["comment_datetime"] . "</span><br><br>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src=<?php echo $url_without_params . "scripts/emoji.js" ?>></script>
</body>

</html>