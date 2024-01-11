<?php

include "../assets/includes/init.php";
header("Content-Type: application/json");

$uploadedFiles = array();
if (isset($_FILES['images'])) {

    $time = time();
    for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
        $tmpFileName = $_FILES['images']['tmp_name'][$i];
        $fileName = "$time-" . $_FILES['images']['name'][$i];

        $fileUploaded = move_uploaded_file($tmpFileName, pathOf("assets/uploads/$fileName"));

        if (!$fileUploaded) {
            echo json_encode(["status" => false]);
            exit();
        }

        array_push($uploadedFiles, $fileName);
    }
}

$buyerId = $_SESSION["userId"];
$name = $_POST["name"];
$description = $_POST["description"];
$todaysDate = $_POST["todaysDate"];
$pieces = $_POST["pieces"];
$targetPrice = $_POST["targetPrice"];
$leadTime = $_POST["leadTime"];

$query = "INSERT INTO BuyerRequirement (BuyerId, Pieces, TargetPrice, Name, Description, LeadTime, TodaysDate) VALUES(?,?,?,?,?,?,?)";
$params = [$buyerId, $pieces, $targetPrice, $name, $description, $leadTime, $todaysDate];

$statement = $connection->prepare($query);
$result = $statement->execute($params);

if ($result) {
    $buyerRequirementId = lastInsertId();
    foreach ($uploadedFiles as $file)
        execute("INSERT INTO `requirementimages` (`BuyerRequirementId`, `ImageName`) VALUES (?, ?)", [$buyerRequirementId, $file]);
}

if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);
