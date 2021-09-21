<?php

session_start();

include './view/head.php';

include './class/pages.php';

// Inkluderar testdb för att spotta ut lite användardata på start-sidan vid inloggning.
include './view/testdb.php';


//Som jag förstått det är det i "vissa" fall bra att låsa session mot IP, men jag lyckas tyvärr inte testa det på ett vettigt sätt.
//Har fått info från Tomas som jag ska försöka applicera här.
$fakeadress = '127.0.0.1'; //min localhost är ::1 Du kan testa sätta ::2 för att döda sessionen.
$IP = getenv ( "REMOTE_ADDR" );
if ($IP !== $fakeadress) {
    echo 'Your session data is not correct. Session deleted.';
    unset($_SESSION['username']);
}

//Tar emot inloggningen med förnamnet/username.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['username'] = htmlspecialchars(ucfirst($_POST['username']));
}

//Fångar upp vilken URL/sida man går till.
$page = basename($_GET['path']);
if ($page == '' or $page == '/') {
    $page = ucfirst('home');
}

//Vilket i sin tur gör att IFen går in och plockar fram motsvarande klass.
if (class_exists($page)) {
    $requestedClass = lcfirst($page); //För att få rätt klass tas all inmatning emot med stor första bokstav.

    $showPage = new $page();
    echo $showPage->$requestedClass(); //Tar fram/visar klassen.
} else {
    $error = new Page404();
    echo $error->fourofour(); //Anger du en galen URL eller klickar på länk som inte motsvarar en existerande klass så får du 404.
}


include './view/footer.php';
