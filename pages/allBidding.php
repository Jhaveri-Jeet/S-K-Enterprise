<?php
include "../assets/includes/init.php";

if (!isset($_SESSION["roleName"]))
    header("Location: ./pages/signin.php");

$id = $_GET["id"];
$query = "SELECT adminrequirements.BuyerRequirementId, adminrequirements.Id, adminrequirements.Pieces, adminrequirements.TargetPrice, adminrequirements.Name, adminrequirements.Description, adminrequirements.LeadTime, adminrequirements.TodaysDate, adminrequirements.CountDown, requirementimages.ImageName FROM adminrequirements INNER JOIN requirementimages ON requirementimages.BuyerRequirementId = adminrequirements.BuyerRequirementId WHERE adminrequirements.Id = ?";
$params = [$id];
$statement = $connection->prepare($query);
$result = $statement->execute($params);
$fetch = $statement->fetch(PDO::FETCH_ASSOC);

$buyerRequirementId = $fetch["BuyerRequirementId"];

$query = "SELECT requirementimages.ImageName, adminrequirements.Name, adminrequirements.Description, bidding.Pieces, bidding.Id, bidding.TargetPrice, bidding.LeadTime, users.Name as supplierName FROM bidding INNER JOIN adminrequirements ON adminrequirements.Id = bidding.AdminRequirementId INNER JOIN users ON users.Id = bidding.SupplierId INNER JOIN requirementimages ON requirementimages.BuyerRequirementId = bidding.BuyerRequirementId WHERE bidding.AdminRequirementId = '$id' AND bidding.Status = 'Pending'";
$statement = $connection->prepare($query);
$result = $statement->execute();
$fetchBidding = $statement->fetchAll(PDO::FETCH_ASSOC);

include pathOf("assets/includes/header.php");
include pathOf("assets/includes/navbar.php");
?>

<body>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="mb-12 lg:col-4 lg:mb-0">
                    <div class="sticky top-[110px] pr-0 lg:pr-6">
                        <figure class="mb-6 inline-block">
                            <img alt="Image not loaded" class="rounded-t-[18px]" style="object-fit: cover; width: 200px; height: 200px; border-radius: 10px;" src="<?= urlOf("assets/uploads/") . $fetch["ImageName"] ?>" loading="lazy" decoding="async">
                            <figcaption class="mt-6">
                                <h2 class="text-h3"><?= $fetch["Name"] ?></h2>
                            </figcaption>
                        </figure>
                        <p><?= $fetch["Description"] ?></p>

                        <ul class="social-icons mt-8">
                            <li class=" inline-block">
                                <h5>Pieces : </h5>
                                <h5>Target Price : </h5>
                                <h5>Lead Time : </h5>
                                <h5>Date : </h5>
                                <h5>Count Down : </h5>
                                <h5>Category : </h5>
                            </li>
                            <li class=" inline-block">
                                <p><?= $fetch["Pieces"] ?></p>
                                <p><?= $fetch["TargetPrice"] ?></p>
                                <p><?= $fetch["LeadTime"] ?></p>
                                <p><?= $fetch["TodaysDate"] ?></p>
                                <p><?= $fetch["CountDown"] ?></p>
                                <p>Brass Part</p>
                            </li>
                        </ul>
                        <?php if ($_SESSION["roleName"] == "Supplier") { ?>
                            <div class="ml-autoflex order-1 hidden items-center justify-center md:ml-0 lg:order-2 lg:flex mt-4">
                                <button class="btn btn-primary" onclick="openModal()">Create a Bid</button>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="lg:col-8">
                    <div class="col-12">
                        <h2 class="mb-3 text-h3">
                            Other Bidding by <span class="text-primary">Suppliers</span>
                        </h2>
                    </div>
                    <div class="row">
                        <?php foreach ($fetchBidding as $adminReqData) { ?>
                            <div class="col-12 mb-8  md:col-6">
                                <article class="mt-7 rounded-2xl border-0 shadow">
                                    <div class="px-[1.875rem] pb-[0.625rem] pt-[2.1rem]">
                                        <h3 class="card-title h5 mb-2 font-semibold hover:underline">
                                            <a href="#"><?= $adminReqData["Name"] ?></a>
                                        </h3>
                                        <p class="mb-4 text-text"><?= $adminReqData["Description"] ?></p>
                                    </div>
                                    <div class="card-footer border-t-0 bg-transparent px-[1.875rem] pb-[2.1rem]">
                                        <div class="row justify-center">
                                            <div class="col-6">
                                                <div class="card-author mt-3">
                                                    <div class="flex items-center">
                                                        <div class="user-image mr-2">
                                                            <a href="#">
                                                                <img alt="Pieces" class="max-w-full rounded-full" width="70" height="70" src="<?= urlOf("assets/images/solution.png") ?>" loading="lazy" decoding="async">
                                                            </a>
                                                        </div>
                                                        <div class="user-info">
                                                            <p class="mb-0 font-medium">
                                                                <a href="#"><?= $adminReqData["Pieces"] ?></a>
                                                            </p>
                                                            <!-- <span>April 4, 2022 - 02 Mins read</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-author mt-3">
                                                    <div class="flex items-center">
                                                        <div class="user-image mr-2">
                                                            <a href="#">
                                                                <img alt="Pieces" class="max-w-full rounded-full" width="70" height="70" src="<?= urlOf("assets/images/price-tag.png") ?>" loading="lazy" decoding="async">
                                                            </a>
                                                        </div>
                                                        <div class="user-info">
                                                            <p class="mb-0 font-medium">
                                                                <a href="#"><?= $adminReqData["TargetPrice"] ?></a>
                                                            </p>
                                                            <!-- <span>April 4, 2022 - 02 Mins read</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card-author mt-3">
                                                    <div class="flex items-center">
                                                        <div class="user-image mr-1">
                                                            <a href="#">
                                                                <img alt="Pieces" class="max-w-full rounded-full" width="70" height="70" src="<?= urlOf("assets/images/calendar.png") ?>" loading="lazy" decoding="async">
                                                            </a>
                                                        </div>
                                                        <div class="user-info">
                                                            <p class="mb-0 font-medium">
                                                                <a href="#"><?= $adminReqData["LeadTime"] ?></a>
                                                            </p>
                                                            <!-- <span>April 4, 2022 - 02 Mins read</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-author mt-3">
                                                    <div class="flex items-center">
                                                        <div class="user-image mr-1">
                                                            <a href="#">
                                                                <img alt="Pieces" class="max-w-full rounded-full" width="70" height="70" src="<?= urlOf("assets/images/countdown.png") ?>" loading="lazy" decoding="async">
                                                            </a>
                                                        </div>
                                                        <div class="user-info">
                                                            <p class="mb-0 font-medium">
                                                                <a href="#"><?= $adminReqData["supplierName"] ?></a>
                                                            </p>
                                                            <!-- <span>April 4, 2022 - 02 Mins read</span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if ($_SESSION["roleName"] == "Admin") { ?>
                                                <div class="ml-autoflex order-1 items-center justify-center md:ml-0 lg:order-2 lg:flex mt-4 ">
                                                    <a class="btn btn-primary" href="<?= urlOf("api/acceptBid.php?id=") . $adminReqData['Id']  ?>">Accept Bid</a>
                                                    <a class="btn btn-primary" href="<?= urlOf("api/rejectBid.php?id=") . $adminReqData['Id']  ?>">Reject Bid</a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dialog for add bidding -->
    <dialog class="rounded-2xl p-8 pb-10 shadow md:col-6 lg:col-6">
        <div class="container">
            <div class="row items-center justify-center">
                <div class="aos-init aos-animate" data-aos="fade-up">
                    <div>
                        <span style="float: right;" class="mb-6"><input type="button" value="X" class="btn btn-primary" onclick="closeModal()" /></span>
                        <div class="mb-6">
                            <h3 class="h5 font-semibold">Create an Bid</h3>
                        </div>
                        <form action="#" method="post">
                            <div class="mb-6">
                                <label class="mb-2 block font-medium text-theme-dark/80" for="email">Pieces</label>
                                <input type="hidden" value="<?= $id ?>" id="adminRequirementId">
                                <input type="hidden" value="<?= $buyerRequirementId ?>" id="buyerRequirementId">
                                <input class="form-control shadow-none" id="pieces" type="number" required="" value="<?= $fetch["Pieces"] ?>">
                            </div>
                            <div class="mb-6">
                                <label class="mb-2 block font-medium text-theme-dark/80" for="email">Target Price</label>
                                <input class="form-control shadow-none" id="targetPrice" type="number" required="" value="<?= $fetch["TargetPrice"] ?>">
                            </div>
                            <div class="mb-6">
                                <label class="mb-2 block font-medium text-theme-dark/80" for="email">Lead Time</label>
                                <input class="form-control shadow-none" id="leadTime" type="date" required="" value="<?= $fetch["LeadTime"] ?>">
                            </div>
                            <input type="button" value="Create Bid" class="btn btn-primary mt-6 w-full" onclick="insertBid()" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </dialog>

    <?php
    include pathOf("assets/includes/footer.php");
    include pathOf("assets/includes/scripts.php");
    ?>
    <script>
        const dialog = document.querySelector("dialog");

        function openModal() {
            dialog.showModal();
        };

        function closeModal() {
            dialog.close();
        };

        function insertBid() {
            let data = {
                adminRequirementId: $("#adminRequirementId").val(),
                buyerRequirementId: $("#buyerRequirementId").val(),
                pieces: $("#pieces").val(),
                targetPrice: $("#targetPrice").val(),
                leadTime: $("#leadTime").val(),
            }

            $.post("../api/insertBid.php", data, function(response) {
                if (response.success == true)
                    window.location.reload();
                else
                    alert("Bid not created");
            });
        }
    </script>
    <?php
    include pathOf("assets/includes/pageend.php");
    ?>