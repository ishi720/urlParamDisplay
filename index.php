<?php

$result = array(
    "httpMethod" => $_SERVER["REQUEST_METHOD"],
    "getParam" => $_GET,
    "postParam" => $_POST,
);

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json; charset=UTF-8');
echo json_encode($result);
exit;