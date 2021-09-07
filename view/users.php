<?php
// echo 'Users';

// $clients = [
//     ['name' => 'Tomas'],
//     ['name' => 'Henrik']
//   ];

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
// tell the requester that this is a JSON data response
header('Content-Type: application/json');
  
// $clients_json = encode($clients);
// echo json_encode($clients_json);
echo json_encode($cars);