<?php

include "../assets/includes/init.php";
header("Content-Type: application/json");

$buyerRequirementId = $_POST["buyerRequirementId"];
$buyerId = $_POST["buyerId"];
$pieces = $_POST["pieces"];
$targetPrice = $_POST["targetPrice"];
$name = $_POST["name"];
$description = $_POST["description"];
$leadTime = $_POST["leadTime"];
$todaysDate = $_POST["todaysDate"];
$countDown = $_POST["countDown"];
$categoryId = $_POST["categoryId"];

$query = "INSERT INTO AdminRequirements (BuyerRequirementId,BuyerId,Pieces,TargetPrice,Name,Description,LeadTime,TodaysDate,CountDown,CategoryId) VALUES(?,?,?,?,?,?,?,?,?,?)";
$params = [$buyerRequirementId, $buyerId, $pieces, $targetPrice, $name, $description, $leadTime, $todaysDate, $countDown, $categoryId];

$statement = $connection->prepare($query);
$result = $statement->execute($params);

if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);
