<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";
// Append the host(domain name, ip) to the URL.
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$url .= $_SERVER['REQUEST_URI'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>expo</title>
    <link rel="stylesheet" href=<?php echo $url . "css/home.css"; ?>>
    <script src="https://cdn.jsdelivr.net/npm/p5@1.4.1/lib/p5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
<div class="container">
    <div id="container-canvas" class="container-canvas">
        <div id="canvas" class="canvas"></div>
    </div>
    <div id="container-options" class="container-options">
        <div class="container-options-wrapper">
            <ul>
                <li><a href=<?php echo $url ?>>Canvas</a></li>
                <li><a href=<?php echo $url . "?overview" ?>>Overview</a></li>
                <?php
                if (isset($_SESSION["user"])) {
                    echo "<a href='{$url}?loginpage'>Logout</a>";
                } else {
                    echo "<a href='{$url}?loginpage'>Login</a>";
                }
                ?>
            </ul>
        </div>
        <div class="container-options-wrapper">
            <span>Adjust Stroke Weight</span>
            <div id="strokeSlider"></div>
        </div>
        <div class="container-options-wrapper">
            <span>Adjust Stroke Color</span>
            <!-- <div id="colorPicker"></div> -->
            <input type="color" id="strokeColor" value="#000000"/>
        </div>
        <div class="container-options-wrapper">
            <span>Select Background Color</span>
            <!-- <div id="colorPickerBackground"></div> -->
            <br>
            <span>(Clears Canvas)</span>
            <br>
            <input type="color" id="backgroundColor" value="#FFFFFF"/>
        </div>
        <div class="container-options-wrapper">
            <span>Clear The Canvas</span>
            <br>
            <button id="clearButton">X</button>
        </div>
        <div class="container-options-wrapper">
            <span>Name Your Creation</span>
            <br>
            <input type="text" id="titel" value="" required>
        </div>
        <div class="container-options-wrapper">
            <span>Submit Canvas Or Download</span>
            <br>
            <button id="submit" class="">Submit</button>
            <button id="download" class="">Download</button>
            <br>
        </div>
    </div>
</div>
<script src=<?php echo $url . "scripts/canvas.js" ?>></script>
</body>

</html>