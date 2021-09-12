<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>Testing PHP</title>
</head>
<body>

<?php

//Mina vars
$requested_endpoint = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");
//Från list kan jag nu hämta via index från URI som användaren matar in.
$list = explode("/", $requested_endpoint);

//Cracked it! Lyckades byta ut föregående till att använda file_exist från list för att
//oavsett om jag skriver "admin" eller "admin.php" komma till rätt sida!
//OCH, jag fick igång 404. *smile!
$fileName = ('./view/' . end($list) . '.php');
$fileNamePhp = ('./view/' . end($list));

// if (file_exists($fileName)) {
//     include $fileName;
// } elseif (file_exists($fileNamePhp)) {
//     include $fileNamePhp;
// } elseif ($fileName == './view/frontcontroller-php.php') {
//     include ('./view/home.php');
// } else {
//     include ('./view/404.php');
// }




include './class/pages.php';
$testingerror = new Home();
echo $testingerror->homepage();


?>






</body>
</html>