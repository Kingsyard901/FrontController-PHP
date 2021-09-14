<?php

session_start();

include './view/head.php';
include './class/pages.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['username'] = $_POST['username'];
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
