<?php
//Exempel där jag lekt runt lite med att kunna visa html/css i PHP kod

//Array med bilar som exempel från w3schools
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

//skapar en var som innehåller HTML/inline css och echoar sedan ut denna på admin sidan.
//$cars är en multidimensional array så man kan välja vad den ska visa med nedan index.
$output = "
<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <h1 background-color='black'>{$cars[3][0]} -  In Stock: {$cars[3][1]}. Sold cars: {$cars[3][2]}.</h1>
        </div>
    </div>
</div>
";

echo $output;