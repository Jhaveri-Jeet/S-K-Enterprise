<?php
include "../assets/includes/init.php";
include pathOf("assets/includes/header.php");
include pathOf("assets/includes/navbar.php");
?>

<body>
  <section class="section user-access">
    <style>
      footer,
      header {
        display: none;
      }
    </style>
    <div class="container">
      <div class="row items-center justify-around">
        <div class="aos-init aos-animate col-11 sm:col-10 md:col-7 lg:col-4" data-aos="fade-up">
          <div class="text-center">
            <div class="relative z-20 mb-8 flex justify-center">
              <a href="<?= urlOf("") ?>" class="navbar-brand block">
                <img alt="Andromeda Astro" class="h-7 w-auto md:h-[36px] md:w-[257px]" width="514" height="72" src="<?= urlOf("assets/images/logo.png") ?>" loading="lazy" decoding="async" />
              </a>
            </div>

            <p class="mb-4">
              Join Over 30000 Companys Validing<br />Proto Decision With Andromeda
            </p>
            <div class="mt-12 pt-12">
              <img alt="signup" width="436" height="376" src="<?= urlOf("assets/images/signup.webp") ?>" loading="lazy" decoding="async" />
            </div>
          </div>
        </div>
        <div class="user-access-form aos-init aos-animate col-11 mt-24 sm:col-10 md:col-8 lg:col-4 lg:mt-0" data-aos="fade-up" data-aos-delay="150">
          <div class="section-title text-center">
            <h2 class="title">Sign In</h2>
          </div>
          <form method="POST">
            <div class="mb-6">
              <label class="mb-2 block font-medium text-theme-dark/70" for="subject">Select Your Role</label>
              <select class="form-control w-full" name="role" id="roleId" onchange="displayUsers()">
                <option value="0">Select Your Role</option>
                <option value="1">Admin</option>
                <option value="2">Supplier</option>
                <option value="3">Buyer</option>
              </select>
            </div>
            <div class="mb-6 displayCredentials" style="display: none;">
              <label class="mb-2 block font-medium text-theme-dark/70" for="subject">Select Your Name</label>
              <select class="form-control w-full" id="name">
              </select>
            </div>
            <div class="mb-6 displayCredentials" style="display: none;">
              <label class="mb-2 block font-medium text-theme-dark/70" for="subject">Password</label>
              <input class="form-control w-full" name="password" type="password" placeholder="Enter Your Password" id="password" />
            </div>

            <!-- <div class="custom-control custom-checkbox">
              <input type="checkbox" class="cursor-pointer rounded-sm text-[#0d6efd] focus:ring-0 focus:ring-transparent" id="save-info" checked="" />
              <label for="save-info" class="custom-control-label font-medium text-theme-dark/70" role="button">Remember Me</label>
            </div> -->

            <input class="btn btn-primary mt-6 w-full displayCredentials" style="display: none;" onclick="checkUser()" type="button" value="Submit Now" />
          </form>
          <p class="mb-0 mt-3 text-center">
            Dont Have An Account?
            <a class="text-primary hover:underline" href="<?= urlOf("pages/signup.php") ?>">Sign Up</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <?php
  include pathOf("assets/includes/footer.php");
  include pathOf("assets/includes/scripts.php");
  ?>

  <script>
    function displayUsers() {
      let data = {
        roleId: $("#roleId").val()
      }

      $.post("../api/displayUsers.php", data, function(response) {
        console.log(response);
        let options = ''
        for (let i = 0; i < response.length; i++) {
          options += '<option value="' + response[i]["Id"] + '">' + response[i]["Name"] + '</option>';
        }
        $("#name").html(options);
        $(".displayCredentials").show();
      });
    }

    function checkUser() {
      if ($("#name").val() < 0 || $("#password").val() == "")
        return;

      let data = {
        name: $("#name").val(),
        password: $("#password").val()
      }

      $.post("../api/checkUser.php", data, function(response) {
        console.log(response);

        if (response.success == true)
          window.location = "../index.php";
        else
          window.location = "./signin.php";
      })
    }
  </script>
  <?php
  include pathOf("assets/includes/pageend.php");
  ?>