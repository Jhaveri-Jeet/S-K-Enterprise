<?php

include "../assets/includes/init.php";
header("Content-Type: application/json");

$name = $_POST['name'];
$description = $_POST['description'];

$query = "INSERT INTO Category (Name,Description) VALUES(?,?)";
$params = [$name, $description];

$statement = $connection->prepare($query);
$result = $statement->execute($params);

if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);
