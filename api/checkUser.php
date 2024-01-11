<?php

include "../assets/includes/init.php";
header("Content-Type: application/json");

$name = $_POST['name'];
$password = $_POST['password'];

$query = "SELECT Users.Id, Roles.Name FROM Users INNER JOIN Roles ON Roles.Id = Users.RoleId WHERE Users.Id = ? AND Users.Password = ?";
$params = [$name, $password];
$statement = $connection->prepare($query);
$result = $statement->execute($params);
$fetch = $statement->fetch(PDO::FETCH_ASSOC);

if ($result) {
    echo json_encode(["success" => true]);
    $_SESSION["userId"] = $fetch["Id"];
    $_SESSION["roleName"] = $fetch["Name"];
} else
    echo json_encode(["success" => false]);
