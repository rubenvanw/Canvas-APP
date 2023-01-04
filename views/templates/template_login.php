<?php
 $token = uniqid(); // genereer een unieke token
 $_SESSION["token"] = $token;


$url_without_params = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']
    . explode('?', $_SERVER['REQUEST_URI'], 2)[0];


?>
<form action="https://85748.stu.sd-lab.nl/Minor%20Verdieping/expo/" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo $token ?>">
    Username
    <br>
    <input type="text" name="username" id="password">
    <br>
    Password
    <br>
    <input type="password" name="password" id="password">
    <br>
    <br>
    <input type="submit" value="Login" name="login">
</form>