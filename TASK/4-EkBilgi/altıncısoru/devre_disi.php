<?php

$response = array(
    "success" => true,
);

header('Content-Type: application/json');
echo json_encode($response);
