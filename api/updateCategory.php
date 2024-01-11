<?php

include "../assets/includes/init.php";
header("Content-Type: application/json");

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

$query = "UPDATE Category SET Name = ?, Description = ? WHERE Id = ?";
$params = [$name, $description, $id];
$statement = $connection->prepare($query);
$result = $statement->execute($params);

if(!$result)
    http_response_code(400);

echo json_encode(["success" => true]);