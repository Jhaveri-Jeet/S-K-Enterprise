<?php

include "../assets/includes/init.php";
header("Content-Type: application/json");

$id = $_POST['id'];

$query = "DELETE FROM Category WHERE Id = ?";
$params = [$id];
$statement = $connection->prepare($query);
$result = $statement->execute($params);

if ($result)
    http_response_code(400);

echo json_encode(["success" => true]);