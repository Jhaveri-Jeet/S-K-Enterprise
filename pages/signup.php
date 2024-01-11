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
            <h2 class="title">Sign Up</h2>
          </div>
          <form method="POST">
            <div class="mb-6">
              <label class="mb-2 block font-medium text-theme-dark/70" for="subject">Select Your Role</label>
              <select class="form-control w-full" name="role" id="roleId">
                <option value="2">Supplier</option>
                <option value="3">Buyer</option>
              </select>
            </div>
            <div class="mb-6">
              <label class="mb-2 block font-medium text-theme-dark/70" for="subject">Full Name</label>
              <input class="form-control w-full" name="name" type="text" placeholder="Your Full Name" id="name" />
            </div>
            <div class="mb-6">
              <label class="mb-2 block font-medium text-theme-dark/70" for="subject">Enter Email Address</label>
              <input class="form-control w-full" name="email" type="email" placeholder="Type Your Email Address" id="email" />
            </div>
            <div class="mb-6">
              <label class="mb-2 block font-medium text-theme-dark/70" for="subject">Password</label>
              <input class="form-control w-full" name="password" type="password" placeholder="Enter Your Password" id="password" />
            </div>
            <div class="mb-6">
              <label class="mb-2 block font-medium text-theme-dark/70" for="subject">MobileNumber</label>
              <input class="form-control w-full" name="mobilenumber" type="number" placeholder="Enter Your Mobile Number" id="mobileNumber" />
            </div>
            <div class="mb-6">
              <label class="mb-2 block font-medium text-theme-dark/70" for="subject">Business</label>
              <input class="form-control w-full" name="business" type="text" placeholder="Enter Your Business" id="business" />
            </div>

            <input type="button" class="btn btn-primary mt-6 w-full" onclick="addUser()" value="Submit Now" />
          </form>
          <!-- <p class="mt-6 text-center font-semibold text-theme-dark">
            Otherwise Log In With
          </p>
          <div class="block sm:flex">
            <a href="#" class="btn btn-primary mr-0 mt-4 flex w-full items-center justify-center bg-[#4064ad] sm:mr-2">
              <span class="mr-2"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"></path>
                </svg></span>
              Facebook</a>
            <a href="#" class="btn btn-primary ml-0 mt-4 flex w-full items-center justify-center bg-[#e24d48] pb-0 pt-0 text-white sm:ml-2">
              <span class="mr-2"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path d="M473.16 221.48l-2.26-9.59H262.46v88.22H387c-12.93 61.4-72.93 93.72-121.94 93.72-35.66 0-73.25-15-98.13-39.11a140.08 140.08 0 01-41.8-98.88c0-37.16 16.7-74.33 41-98.78s61-38.13 97.49-38.13c41.79 0 71.74 22.19 82.94 32.31l62.69-62.36C390.86 72.72 340.34 32 261.6 32c-60.75 0-119 23.27-161.58 65.71C58 139.5 36.25 199.93 36.25 256s20.58 113.48 61.3 155.6c43.51 44.92 105.13 68.4 168.58 68.4 57.73 0 112.45-22.62 151.45-63.66 38.34-40.4 58.17-96.3 58.17-154.9 0-24.67-2.48-39.32-2.59-39.96z"></path>
                </svg></span>
              Google
            </a>
          </div> -->
          <p class="mb-0 mt-3 text-center">
            Already Have An Account?
            <a class="text-primary hover:underline" href="<?= urlOf("pages/signin.php") ?>">Sign In</a>
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
    function addUser() {

      if ($("#roleId").val() < 1 || $("#name").val() == "" || $("#password").val() == "" || $("#email").val() == "" || $("#business").val() == "")
        return;

      let data = {
        roleId: $("#roleId").val(),
        name: $("#name").val(),
        password: $("#password").val(),
        email: $("#email").val(),
        mobileNumber: $("#mobileNumber").val(),
        business: $("#business").val()
      }

      $.post("../api/addUser.php", data, function(response) {
        console.log(response);
        if (response.success == true)
          window.location = "./signin.php";
        else
          window.location = "./signup.php";
      })
    }
  </script>

  <?php
  include pathOf("assets/includes/pageend.php");
  ?>