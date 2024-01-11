<?php

include "../assets/includes/init.php";

session_destroy();

header("Location: ../pages/signin.php");
?>