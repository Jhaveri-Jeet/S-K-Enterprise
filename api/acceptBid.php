<?php

include "../assets/includes/init.php";
header("Content-Type: application/json");

$id = $_GET["id"];
$status = "Accepted";

$query = "UPDATE Bidding SET Status = ? WHERE Id = ?";
$params = [$status, $id];
$statement = $connection->prepare($query);
$result = $statement->execute($params);

if (!$result)
    http_response_code(400);

echo json_encode(["success" => true]);
header("Location: ../pages/allLiveRequirements.php");
