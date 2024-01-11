<?php

include "../assets/includes/init.php";
header("Content-Type: application/json");

$supplierId = $_SESSION["userId"];
$adminRequirementId = $_POST["adminRequirementId"];
$buyerRequirementId = $_POST["buyerRequirementId"];
$pieces = $_POST["pieces"];
$targetPrice = $_POST["targetPrice"];
$leadTime = $_POST["leadTime"];

$query = "INSERT INTO Bidding (SupplierId,AdminRequirementId,BuyerRequirementId,Pieces,TargetPrice,LeadTime) VALUES(?,?,?,?,?,?)";
$params = [$supplierId, $adminRequirementId, $buyerRequirementId, $pieces, $targetPrice, $leadTime];

$statement = $connection->prepare($query);
$result = $statement->execute($params);

if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);
