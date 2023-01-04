<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>expo</title>
    <script src="https://cdn.jsdelivr.net/npm/p5@1.4.1/lib/p5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="">
        <?php

        foreach ($data as $row) {
            echo "<div class='flex flex-col justify-center items-center'>";
            // echo $row["id"] . "<br />\n";
            // echo $row["titel"] . "<br />\n";
            echo "<span class='text-center'>" . $row["titel"] .  "</span>";
            echo "<img class='w-64 h-32' src='img/" . $row["titel"] . ".jpg" . "'>";
            echo "</div>";
        }

        ?>
    </div>
</body>

</html>