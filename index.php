<?php
    
error_reporting(E_ALL);
ini_set("display_errors", 1);


use Backend\GitHub;

require_once  __DIR__ . '/backend/config.php';
require_once  __DIR__ . '/backend/GitHub.php';

$api = new GitHub();
$city = $api->getUrl();
//dd($api)."</pre>";
dd($city);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<H3>Cidade</H3>
<p></p>
</body>

</html>