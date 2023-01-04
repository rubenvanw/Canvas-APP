<?php
if (isset($_POST["data"])) {
    // echo $_POST["data"][0] . "\n";
    // echo $_POST["data"][1] . "\n";
    // echo $_POST["data"][2] . "\n";

    $titel = $_POST["data"][0];
    $dataURL = $_POST["data"][1];

    echo $dataURL;

    list($type, $data) = explode(';', $dataURL);
    list(, $data)      = explode(',', $data);
    $data = base64_decode($data);

    file_put_contents($titel, $data);

} else {
    header("Location: https://85748.ict-lab.nl/Minor%20Verdieping/expo/");
}
