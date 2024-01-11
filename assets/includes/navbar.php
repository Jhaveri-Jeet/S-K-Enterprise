<header class="header" id="header">
    <nav class="navbar container-xxl">
        <!-- logo -->
        <div class="order-0">
            <a href="#" class="navbar-brand block">
                <img alt="Andromeda Astro" class="h-7 w-auto md:h-[36px] md:w-[257px]" width="514" height="72" src="<?= urlOf("assets/images/logo.png") ?>" loading="lazy" decoding="async" />
            </a>
        </div>
        <!-- navbar toggler -->
        <input id="nav-toggle" type="checkbox" class="hidden" />
        <label id="show-button" for="nav-toggle" class="order-2 flex cursor-pointer items-center lg:order-1 lg:hidden">
            <svg class="h-6 fill-current" viewBox="0 0 20 20">
                <title>Menu Open</title>
                <path d="M0 3h20v2H0V3z m0 6h20v2H0V9z m0 6h20v2H0V0z"></path>
            </svg>
        </label>
        <label id="hide-button" for="nav-toggle" class="order-2 hidden cursor-pointer items-center lg:order-1">
            <svg class="h-6 fill-current" viewBox="0 0 20 20">
                <title>Menu Close</title>
                <polygon points="11 9 22 9 22 11 11 11 11 22 9 22 9 11 -2 11 -2 9 9 9 9 -2 11 -2" transform="rotate(45 10 10)"></polygon>
            </svg>
        </label>
        <!-- /navbar toggler -->
        <ul id="nav-menu" class="navbar-nav order-3 hidden w-full flex-col pt-10 text-center lg:order-1 lg:flex lg:w-auto lg:flex-row lg:space-x-2 lg:pt-0 lg:text-left">
            <li class="nav-item">
                <a href="<?= urlOf("") ?>" class="nav-link active block py-2 lg:px-[0.625rem] lg:py-[0.9rem] xl:px-[1.06rem]">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= urlOf("pages/about.php") ?>" class="nav-link false block py-2 lg:px-[0.625rem] lg:py-[0.9rem] xl:px-[1.06rem]">
                    About
                </a>
            </li>

            <?php if (isset($_SESSION["roleName"])) { ?>
                <?php if ($_SESSION["roleName"] == "Admin") { ?>
                    <li class="nav-item">
                        <a href="<?= urlOf("pages/allOrdersDetails.php") ?>" class="nav-link false block py-2 lg:px-[0.625rem] lg:py-[0.9rem] xl:px-[1.06rem]">
                            Orders
                        </a>
                    </li>
                <?php } ?>
            <?php } ?>

            <?php if (isset($_SESSION["roleName"])) { ?>
                <?php if ($_SESSION["roleName"] == "Buyer") { ?>
                    <li class="nav-item">
                        <a href="<?= urlOf("pages/allBuyersOrder.php") ?>" class="nav-link false block py-2 lg:px-[0.625rem] lg:py-[0.9rem] xl:px-[1.06rem]">
                            Orders
                        </a>
                    </li>
                <?php } ?>
            <?php } ?>

            <?php if (isset($_SESSION["roleName"])) { ?>
                <?php if ($_SESSION["roleName"] == "Supplier") { ?>
                    <li class="nav-item">
                        <a href="<?= urlOf("pages/allRequests.php") ?>" class="nav-link false block py-2 lg:px-[0.625rem] lg:py-[0.9rem] xl:px-[1.06rem]">
                            Requests
                        </a>
                    </li>
                <?php } ?>
            <?php } ?>

            <?php if (isset($_SESSION["roleName"])) { ?>
                <li class="nav-item nav-dropdown group relative cursor-pointer" id="dropdown-button">
                    <span class="nav-link inline-flex items-center lg:px-[0.625rem] lg:py-[0.9rem] xl:px-[1.06rem]">
                        Requirements
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                        </svg>
                    </span>
                    <ul id="dropdown" class="nav-dropdown-list hidden duration-300 lg:invisible lg:absolute lg:block lg:h-auto lg:w-[13.5rem] lg:opacity-0 lg:group-hover:visible lg:group-hover:opacity-100">

                        <?php if ($_SESSION["roleName"] == "Admin") { ?>
                            <li class="nav-item">
                                <a href="<?= urlOf("pages/allBuyerRequirements.php") ?>" class="nav-link false block py-2 lg:px-[0.625rem] lg:py-[0.9rem] xl:px-[1.06rem]">
                                    <!-- All pending requirement of buyer -->
                                    Buyer Requirements
                                </a>
                            </li>
                        <?php } ?>

                        <?php if ($_SESSION["roleName"] != "Buyer") { ?>
                            <li class="nav-item">
                                <a href="<?= urlOf("pages/allLiveRequirements.php") ?>" class="nav-link false block py-2 lg:px-[0.625rem] lg:py-[0.9rem] xl:px-[1.06rem]">
                                    <!-- All pending requirement of buyer -->
                                    Live Requirements
                                </a>
                            </li>
                        <?php } ?>

                        <?php if ($_SESSION["roleName"] == "Buyer") { ?>
                            <li class="nav-item">
                                <a href="<?= urlOf("pages/buyerRequirements.php") ?>" class="nav-link false block py-2 lg:px-[0.625rem] lg:py-[0.9rem] xl:px-[1.06rem]">
                                    <!-- All his Requirements -->
                                    Your Requirements
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
            <li class="nav-item">
                <a href="<?= urlOf("pages/contact.php") ?>" class="nav-link false block py-2 lg:px-[0.625rem] lg:py-[0.9rem] xl:px-[1.06rem]">
                    Contact
                </a>
            </li>
            <?php if (isset($_SESSION["roleName"])) { ?>
                <li class="ml-autoflex order-1 text-center md:ml-0 lg:order-2 lg:hidden">
                    <a class="btn btn-primary" href="<?= urlOf("api/logout.php") ?>">Log Out</a>
                </li>
            <?php } else { ?>
                <li class="ml-autoflex order-1 text-center md:ml-0 lg:order-2 lg:hidden">
                    <a class="btn btn-primary" href="<?= urlOf("pages/signin.php") ?>">Get Started</a>
                </li>
            <?php } ?>
        </ul>

        <?php if (isset($_SESSION["roleName"])) { ?>
            <div class="ml-autoflex order-1 hidden items-center md:ml-0 lg:order-2 lg:flex">
                <a class="btn btn-primary" href="<?= urlOf("api/logout.php") ?>">Log Out</a>
            </div>
        <?php } else { ?>
            <div class="ml-autoflex order-1 hidden items-center md:ml-0 lg:order-2 lg:flex">
                <a class="btn btn-primary" href="<?= urlOf("pages/signin.php") ?>">Get Started</a>
            </div>
        <?php } ?>
    </nav>
</header>