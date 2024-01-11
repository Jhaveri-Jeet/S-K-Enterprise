<?php

include "../assets/includes/init.php";
header("Content-Type: application/json");

$roleId = $_POST['roleId'];

$query = "SELECT Id,Name FROM Users WHERE RoleId = ?";
$params = [$roleId];
$statement = $connection->prepare($query);
$result = $statement->execute($params);
$fetch = $statement->fetchAll(PDO::FETCH_ASSOC);

if (!$fetch)
    http_response_code(400);

echo json_encode($fetch);
