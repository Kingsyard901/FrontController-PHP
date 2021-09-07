<?php
#Har nu städat upp rejält från echos, testkod m.m.

//Mina vars
$requested_endpoint = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");
//Från list kan jag nu hämta via index från URI som användaren matar in.
$list = explode("/", $requested_endpoint);

//Skannar vilka .php filer jag har i view-foldern och listar dem i en array
$pageDir = './view/';
$pageList = scandir($pageDir);

//en if-sats tillsammans med en foreach loop som matchar mot vad jag knappar in i URLen.
//Jag behöver tex inte ange /view/ i URLen, utan kan skriva t.ex. "admin" så kommer jag till den sidan.
//Problem - Jag får inte till att om jag knappar in något som inte finns, så kommer jag inte till min 404 sida.
if (isset($list[1])) {
    $hit = strtolower($list[1] . '.php');
    foreach ($pageList as $key => $page) {
        if ($page == $hit) {
            include ('./view/' . $hit);
        }
    }
} else {
    include ('./view/home.php');
}