<?php

include "../assets/includes/init.php";
header("Content-Type: application/json");

$roleId = $_POST["roleId"];
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
$mobileNumber = $_POST["mobileNumber"];
$business = $_POST["business"];

$query = "INSERT INTO Users (RoleId,Name,Password,Email,MobileNumber,Business) VALUES(?,?,?,?,?,?)";
$params = [$roleId, $name, $password, $email, $mobileNumber, $business];

$statement = $connection->prepare($query);
$result = $statement->execute($params);

if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);
