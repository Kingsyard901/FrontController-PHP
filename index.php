<?php

session_start();

include './view/head.php';

include './class/pages.php';

include './view/testdb.php';


//Som jag förstått det är det i "vissa" fall bra att låsa session mot IP, men jag lyckas tyvärr inte testa det på ett vettigt sätt.
$fakeadress = '127.0.0.1'; //min localhost är ::1 Du kan testa sätta ::2 för att döda sessionen.
$IP = getenv ( "REMOTE_ADDR" );
if ($IP !== $fakeadress) {
    echo 'Your session data is not correct. Session deleted.';
    unset($_SESSION['username']);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['username'] = htmlspecialchars(ucfirst($_POST['username']));
}

$page = basename($_GET['path']);
if ($page == '' or $page == '/') {
    $page = ucfirst('home');
}

if (class_exists($page)) {
    $requestedClass = lcfirst($page);

    $showPage = new $page();
    echo $showPage->$requestedClass();
} else {
    $error = new Page404();
    echo $error->fourofour();
}


include './view/footer.php';
