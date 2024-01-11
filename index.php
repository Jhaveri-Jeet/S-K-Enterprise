<?php

include "./assets/includes/init.php";
include pathOf("assets/includes/header.php");
include pathOf("assets/includes/navbar.php");
?>

<body>
  <section>
    <div class="relative overflow-hidden">
      <div class="container-xxl relative">
        <div class="row text-center">
          <div class="col-12">
            <div class="row relative z-10 justify-center px-7 pb-10 pt-20 2xl:px-48" data-aos="fade-up">
              <div class="rellax -z-10 px-0 lg:col-10 xl:px-6" data-rellax-speed="-3">
                <h1 class="md:text-h2-md mb-12 text-center text-h2-sm font-semibold lg:text-h2" data-aos="fade-up">
                  Bidding on excellence, crafting with brass brilliance
                </h1>
                <?php if (!isset($_SESSION["roleName"])) { ?>
                  <a class="btn btn-primary" href="<?= urlOf("pages/signin.php") ?>" data-aos="fade-up" data-aos-delay="200">
                    Get Started
                  </a>
                <?php } ?>
              </div>
            </div>
            <div class="relative z-40" data-aos="fade-up" data-aos-delay="300">
              <div class="row justify-center">
                <div class="col-10">
                  <img src="<?= urlOf("assets/images/bannerimage.webp") ?>" height="630" height="1110" alt="banner" class="max-w-full" />
                </div>
              </div>
            </div>
            <div class="has-circle bg-primary/5">
              <span class="ratio-32 rellax rellax left-[11%] top-[50px]" data-rellax-speed="-2"></span>
              <span class="ratio-85 fill rellax left-[3%] top-[29%]" data-rellax-speed="2"></span>
              <span class="ratio-20 fill left-[22%] top-[45%]"></span>
              <span class="ratio-47 rellax bottom-[35%] left-[15%]" data-rellax-speed="1"></span>
              <span class="ratio-62 rellax bottom-[8%] left-[6%]" data-rellax-speed="-1"></span>
              <span class="ratio-20 fill rellax right-[12%] top-[100px]" data-rellax-speed="-0.5"></span>
              <span class="ratio-73 rellax right-[2%] top-[30%]" data-rellax-speed="-1"></span>
              <span class="ratio-37 rellax right-[19%] top-[52%]" data-rellax-speed="-0.5"></span>
              <span class="ratio-20 fill rellax right-[33%] top-[55%]" data-rellax-speed="1"></span>
              <span class="ratio-65 fill rellax bottom-[20%] right-[5%]" data-rellax-speed="-2"></span>
              <svg class="text-primary" style="opacity: 0.14" width="100%" height="90%" viewBox="0 0 1397 502" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 501C35.0836 398.787 165.889 212.869 424.439 286.903c323.189 92.542 463.337-26.012 519.197-131.059C999.496 50.796 1146.13-47.2484 1396 29.2863" stroke="currentcolor" stroke-opacity=".85" stroke-width="4" stroke-dasharray="10 10"></path>
              </svg>
              <svg class="d-none d-lg-block absolute right-0 top-0 text-primary" style="opacity: 0.14" width="740" height="525" viewBox="0 0 786 555" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M99.5602 2.72272C101.174 1.7637 102.775.871085 104.359.046875l2.512 4.356315C105.391 5.1733 103.888 6.01147 102.364 6.9169L99.5602 2.72272zM81.6978 15.6237C84.5837 13.1781 87.4606 10.9142 90.3117 8.84038L93.5687 12.736C90.84 14.7209 88.0747 16.8962 85.2903 19.2558l-3.5925-3.6321zM66.1083 30.5679C68.6117 27.8799 71.1303 25.3211 73.6526 22.8965L77.5086 26.2908C75.0629 28.6417 72.6165 31.127 70.1809 33.7422L66.1083 30.5679zM52.3869 46.8529C54.575 43.9899 56.7926 41.2264 59.0311 38.5661l4.2564 2.9668c-2.1829 2.5942-4.3473 5.2912-6.4846 8.0878l-4.416-2.7678zM40.3225 64.1778C42.2294 61.1695 44.1759 58.2419 46.155 55.398l4.557 2.5744c-1.9354 2.7812-3.8398 5.6455-5.7064 8.5901l-4.6831-2.3847zM29.8314 82.3652C31.4697 79.2326 33.1553 76.1676 34.8823 73.1726l4.7967 2.197C37.9875 78.303 36.3361 81.3057 34.7307 84.3753L29.8314 82.3652zM20.9737 101.106C22.3344 97.8991 23.7478 94.7486 25.2088 91.6568l4.9915 1.825C28.7682 96.5125 27.3825 99.6011 26.0484 102.746l-5.0747-1.64zm-7.3022 19.333C14.766 117.147 15.9184 113.903 17.1243 110.71l5.1495 1.453c-1.1826 3.131-2.3128 6.312-3.3863 9.541l-5.216-1.265zM8.00103 140.087C8.82055 136.75 9.70162 133.456 10.6402 130.204l5.2742 1.078C14.9937 134.471 14.1294 137.704 13.3255 140.977L8.00103 140.087zM3.94399 160.036C4.48642 156.681 5.09288 153.361 5.7598 150.079L11.1269 150.778C10.4726 153.999 9.87764 157.255 9.34545 160.547L3.94399 160.036zM1.51783 180.174C1.78817 176.777 2.12584 173.411 2.52755 170.078L7.95572 170.4C7.56157 173.671 7.23023 176.973 6.96495 180.306L1.51783 180.174zm-.789254 20.12C.725236 196.904.790603 193.541.921723 190.205L6.37997 190.15C6.25129 193.424 6.18713 196.725 6.1904 200.053L.728576 200.294zm.819064 20.043C1.27679 216.982 1.07488 213.648.939283 210.338L6.39724 209.912c.13312 3.25.33135 6.523.59731 9.81700000000001L1.54764 220.337zm2.3917 19.88c-.5286-3.304-.98876-6.59-1.38279-9.857L7.98534 229.572C8.37235 232.781 8.82435 236.008 9.34366 239.255L3.93934 240.217zm3.91032 19.614C7.07151 256.574 6.36147 253.332 5.71743 250.106L11.0907 248.971C11.7236 252.141 12.4215 255.328 13.1865 258.529L7.84966 259.831zm5.35674 19.258C12.1899 275.889 11.2407 272.701 10.357 269.526l5.2947-1.464C16.5207 271.183 17.4543 274.319 18.4543 277.467L13.2064 279.089zm6.7168 18.828C18.6835 294.788 17.5098 291.668 16.4004 288.56l5.1965-1.774C22.6887 289.845 23.844 292.915 25.0645 295.996L19.9232 297.917zm7.9811 18.34C26.459 313.212 25.0778 310.174 23.7592 307.145L28.8419 305.083C30.1407 308.067 31.5013 311.059 32.9254 314.06l-5.0211 2.197zm9.146 17.814C35.4186 331.119 33.8487 328.173 32.3391 325.234L37.2962 322.908C38.7843 325.805 40.3322 328.709 41.9413 331.62L37.0503 334.071zm10.213 17.264C45.4654 348.485 43.7265 345.639 42.0454 342.799L46.8686 340.23C48.5272 343.032 50.2432 345.84 52.0179 348.653L47.2633 351.335zm11.1888 16.708C56.5083 365.301 54.6205 362.562 52.7878 359.828L57.472 357.038C59.2818 359.739 61.1463 362.443 63.0665 365.152L58.4521 368.043zm12.0833 16.16C68.4546 381.559 66.4273 378.917 64.4526 376.279L68.9956 373.29C70.9472 375.898 72.9511 378.509 75.0084 381.123L70.5354 384.203zm12.909 15.63C81.2123 397.253 79.0324 394.675 76.904 392.099L81.3062 388.931C83.4114 391.479 85.5679 394.03 87.7765 396.582L83.4444 399.833zM97.1059 414.941C94.7275 412.421 92.4004 409.901 90.1238 407.383L94.3866 404.054C96.6401 406.547 98.9439 409.041 101.299 411.536L97.1059 414.941zM111.28 429.37C108.826 426.967 106.42 424.565 104.061 422.164L108.187 418.689C110.523 421.068 112.907 423.448 115.339 425.828L111.28 429.37zm14.807 13.964C123.573 441.048 121.104 438.762 118.679 436.476L122.671 432.87C125.074 435.136 127.522 437.402 130.014 439.668L126.087 443.334zm11.614 10.283C136.376 452.475 135.063 451.333 133.762 450.19L137.625 446.467C138.916 447.6 140.218 448.733 141.531 449.866 142.837 450.993 144.144 452.108 145.453 453.212L141.664 456.999C140.341 455.882 139.02 454.755 137.701 453.617zm19.921 16.253C154.949 467.811 152.282 465.709 149.623 463.564L153.327 459.708C155.958 461.83 158.595 463.908 161.239 465.944L157.622 469.87zm16.681 12.241C171.493 480.149 168.689 478.142 165.892 476.089l3.523-3.995C172.181 474.123 174.952 476.107 177.729 478.046L174.303 482.111zm17.259 11.442C188.619 491.704 185.682 489.808 182.752 487.864L186.078 483.73C188.973 485.651 191.874 487.525 194.781 489.351L191.562 493.553zm17.851 10.603C206.406 502.471 203.404 500.739 200.407 498.959L203.516 494.689C206.475 496.447 209.439 498.157 212.408 499.82L209.413 504.156zM227.888 513.887C224.799 512.362 221.715 510.789 218.636 509.167L221.511 504.766C224.55 506.367 227.593 507.919 230.641 509.424L227.888 513.887zM247.031 522.716C243.828 521.342 240.628 519.918 237.433 518.445L240.057 513.92C243.209 515.374 246.365 516.778 249.525 518.134L247.031 522.716zM266.692 530.529C263.385 529.318 260.081 528.057 256.781 526.745L259.14 522.107C262.394 523.4 265.652 524.644 268.912 525.838L266.692 530.529zM286.834 537.286C283.437 536.249 280.042 535.161 276.649 534.022L278.728 529.282C282.073 530.405 285.42 531.477 288.769 532.499L286.834 537.286zM785.518 403.635C784.209 404.772 782.878 405.916 781.526 407.065L777.927 403.438C779.264 402.303 780.579 401.172 781.872 400.049L785.518 403.635zM307.409 542.954C303.949 542.102 300.489 541.2 297.031 540.247L298.819 535.417C302.228 536.357 305.638 537.246 309.048 538.086L307.409 542.954zM773.202 413.986C770.487 416.197 767.696 418.424 764.833 420.663L761.415 416.889C764.249 414.673 767.01 412.469 769.697 410.282L773.202 413.986zm-16.903 13.226C753.45 429.357 750.537 431.51 747.564 433.668L744.312 429.768C747.259 427.63 750.143 425.498 752.965 423.373L756.299 427.212zM328.357 547.508C324.849 546.845 321.341 546.132 317.832 545.37L319.321 540.466C322.779 541.218 326.237 541.92 329.694 542.574L328.357 547.508zM738.828 439.893C735.909 441.936 732.937 443.981 729.912 446.025L726.82 442.013C729.818 439.988 732.764 437.961 735.657 435.936L738.828 439.893zM349.612 550.935C346.064 550.46 342.514 549.937 338.962 549.365L340.147 544.404C343.647 544.968 347.147 545.484 350.644 545.952L349.612 550.935zm371.273-98.917C717.902 453.964 714.873 455.907 711.8 457.843L708.865 453.729C711.912 451.809 714.915 449.884 717.872 447.955L720.885 452.018zM371.102 553.232C367.523 552.945 363.94 552.61 360.355 552.227L361.235 547.225C364.769 547.603 368.301 547.933 371.829 548.217L371.102 553.232zm331.427-89.65C699.485 465.434 696.4 467.278 693.277 469.111L690.5 464.902C693.597 463.083 696.655 461.255 699.673 459.42L702.529 463.582zm-309.774 90.83C389.156 554.308 385.551 554.158 381.941 553.962L382.518 548.936C386.077 549.13 389.632 549.277 393.183 549.38L392.755 554.412zm291.087-79.859C680.723 476.319 677.567 478.075 674.377 479.817L671.76 475.516C674.923 473.789 678.052 472.048 681.145 470.297L683.842 474.553zM414.513 554.494C410.899 554.57 407.278 554.602 403.651 554.588L403.93 549.554C407.508 549.567 411.08 549.535 414.646 549.461L414.513 554.494zm250.269-69.535C661.594 486.635 658.375 488.297 655.124 489.942l-2.452-4.387C655.894 483.924 659.086 482.277 662.246 480.615L664.782 484.959zm-19.412 9.822C642.12 496.361 638.842 497.924 635.535 499.466L633.254 494.996C636.531 493.467 639.781 491.918 643.002 490.352L645.37 494.781zM436.291 553.51C432.674 553.76 429.05 553.968 425.417 554.132L425.406 549.104C428.991 548.941 432.569 548.736 436.139 548.49L436.291 553.51zm189.335-49.516C622.319 505.472 618.986 506.93 615.628 508.365L613.525 503.815C616.853 502.393 620.155 500.948 623.433 499.483L625.626 503.994zM458.032 551.5C454.423 551.917 450.805 552.294 447.178 552.63L446.886 547.621C450.468 547.289 454.041 546.917 457.605 546.505L458.032 551.5zm147.534-38.932C602.207 513.939 598.823 515.286 595.417 516.608L593.501 511.982C596.875 510.672 600.227 509.337 603.556 507.979L605.566 512.568zM479.683 548.507C476.092 549.084 472.489 549.623 468.876 550.123L468.316 545.145C471.885 544.651 475.445 544.118 478.993 543.548L479.683 548.507zM585.209 520.471C581.8 521.728 578.369 522.958 574.918 524.162L573.199 519.463C576.616 518.271 580.014 517.052 583.39 515.808L585.209 520.471zM501.199 544.58C497.633 545.308 494.054 546.001 490.462 546.657L489.645 541.72C493.195 541.072 496.733 540.387 500.259 539.667L501.199 544.58zm63.373-16.914C561.116 528.802 557.642 529.909 554.149 530.987L552.638 526.22C556.095 525.153 559.534 524.057 562.955 522.932L564.572 527.666zM522.54 539.765C519.006 540.637 515.457 541.476 511.893 542.28L510.832 537.393C514.356 536.598 517.867 535.768 521.362 534.906L522.54 539.765zM543.674 534.112C540.177 535.12 536.663 536.097 533.132 537.041L531.84 532.211C535.333 531.276 538.81 530.31 542.271 529.312L543.674 534.112z" fill="currentcolor"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Banner -->

  <!-- Brand slider -->
  <section class="mt-14 pb-8">
    <div class="overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-md-12 animate from-right" data-aos="fade-right">
            <div class="border-y border-border py-5">
              <div class="swiper brand-carousel">
                <div class="swiper-wrapper">
                  <div class="swiper-slide flex h-20 cursor-pointer items-center justify-center px-6 py-6 text-center opacity-50 grayscale filter transition hover:opacity-100 hover:grayscale-0 lg:px-10">
                    <img src="<?= urlOf("assets/images/brands/01-colored.png") ?>" alt="" />
                  </div>
                  <div class="swiper-slide flex h-20 cursor-pointer items-center justify-center px-6 py-6 text-center opacity-50 grayscale filter transition hover:opacity-100 hover:grayscale-0 lg:px-10">
                    <img src="<?= urlOf("assets/images/brands/02-colored.png") ?>" alt="" />
                  </div>
                  <div class="swiper-slide flex h-20 cursor-pointer items-center justify-center px-6 py-6 text-center opacity-50 grayscale filter transition hover:opacity-100 hover:grayscale-0 lg:px-10">
                    <img src="<?= urlOf("assets/images/brands/03-colored.png") ?>" alt="" />
                  </div>
                  <div class="swiper-slide flex h-20 cursor-pointer items-center justify-center px-6 py-6 text-center opacity-50 grayscale filter transition hover:opacity-100 hover:grayscale-0 lg:px-10">
                    <img src="<?= urlOf("assets/images/brands/04-colored.png") ?>" alt="" />
                  </div>
                  <div class="swiper-slide flex h-20 cursor-pointer items-center justify-center px-6 py-6 text-center opacity-50 grayscale filter transition hover:opacity-100 hover:grayscale-0 lg:px-10">
                    <img src="<?= urlOf("assets/images/brands/05-colored.png") ?>" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end Brand carousel -->

  <!-- Features -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center" data-aos="fade-up">
          <div class="section-title">
            <p class="mb-4 text-[0.9rem] uppercase">SPECIAL FEATURES</p>
            <h2 class="title">Elements To Get You Started</h2>
            <p class="text-[.9rem] text-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
              egestas Werat viverra id et aliquet. vulputate egestas sollicitudin.
            </p>
          </div>
          <div class="swiper feature-carousel">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="features-card group z-30 cursor-pointer">
                  <div class="icon flex items-center justify-center text-primary group-hover:bottom-0 group-hover:top-auto group-hover:duration-100 group-hover:ease-in group-hover:after:h-full">
                    <div class="icon flex items-center justify-center text-primary group-hover:bottom-0 group-hover:top-auto group-hover:duration-100 group-hover:ease-in group-hover:after:h-full">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                      </svg>
                    </div>
                  </div>
                  <h3 class="h5 mb-5 mt-6">Updated Security</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque
                    enim id diam ornare volutpat in sagitis, aliquet. Arcu cursus
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="features-card group z-30 cursor-pointer">
                  <div class="icon flex items-center justify-center text-primary group-hover:bottom-0 group-hover:top-auto group-hover:duration-100 group-hover:ease-in group-hover:after:h-full">
                    <div class="icon flex items-center justify-center text-primary group-hover:bottom-0 group-hover:top-auto group-hover:duration-100 group-hover:ease-in group-hover:after:h-full">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                      </svg>
                    </div>
                  </div>
                  <h3 class="h5 mb-5 mt-6">Updated Security</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque
                    enim id diam ornare volutpat in sagitis, aliquet. Arcu cursus
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="features-card group z-30 cursor-pointer">
                  <div class="icon flex items-center justify-center text-primary group-hover:bottom-0 group-hover:top-auto group-hover:duration-100 group-hover:ease-in group-hover:after:h-full">
                    <div class="icon flex items-center justify-center text-primary group-hover:bottom-0 group-hover:top-auto group-hover:duration-100 group-hover:ease-in group-hover:after:h-full">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                      </svg>
                    </div>
                  </div>
                  <h3 class="h5 mb-5 mt-6">Updated Security</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque
                    enim id diam ornare volutpat in sagitis, aliquet. Arcu cursus
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="features-card group z-30 cursor-pointer">
                  <div class="icon flex items-center justify-center text-primary group-hover:bottom-0 group-hover:top-auto group-hover:duration-100 group-hover:ease-in group-hover:after:h-full">
                    <div class="icon flex items-center justify-center text-primary group-hover:bottom-0 group-hover:top-auto group-hover:duration-100 group-hover:ease-in group-hover:after:h-full">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                      </svg>
                    </div>
                  </div>
                  <h3 class="h5 mb-5 mt-6">Updated Security</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque
                    enim id diam ornare volutpat in sagitis, aliquet. Arcu cursus
                  </p>
                </div>
              </div>
            </div>
            <div class="pagination relative mt-9 flex justify-center"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end Features -->

  <!-- Intro -->
  <section>
    <div class="container-xxl relative text-center">
      <div class="row justify-center">
        <div class="lg:col-12"></div>
        <div class="relative z-30 py-20">
          <div class="section-title" data-aos="fade-up">
            <p class="mb-4 text-[0.9rem] uppercase">SHORT INTRO VIDEO</p>
            <h2 class="title">Built Exclusively For You</h2>
            <p class="text-[.9rem] text-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
              egestas <br />
              Werat viverra id et aliquet. vulputate egestas sollicitudin.
            </p>
          </div>
          <div class="relative text-center">
            <button class="play-button" aria-label="play-video">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="5 3 19 12 5 21 5 3"></polygon>
              </svg>
            </button>
            <img width="700" height="370" src="<?= urlOf("assets/images/videopopup.webp") ?>" alt="Built Exclusively For You" class="inline h-auto max-w-full rounded-2xl" />
            <div class="youtube absolute left-0 top-0 mx-auto hidden h-full w-full text-center">
              <div class="">
                <iframe class="aspect-video h-[370px] w-[700px] max-w-full rounded-2xl bg-transparent" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Creating your new Hugo website with a single command" width="640" height="360" src="" id="widget2"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="has-circle has-bg-animate h-full" data-aos="fade-in">
        <span class="ratio-32 left-[11%] top-[50px]"> </span>
        <span class="left-[3%]ratio-85 fill top-[29%]"> </span>
        <span class="ratio-20 fill left-[22%] top-[45%]"> </span>
        <span class="ratio-47 bottom-[35%] left-[15%]"> </span>
        <span class="ratio-62 bottom-[8%] left-[6%]"> </span>
        <span class="ratio-20 fill right-[12%] top-[100px]"> </span>
        <span class="ratio-73 right-[2%] top-[30%]"> </span>
        <span class="right-[19%] top-[52%]"> </span>
        <span class="ratio-20 fill right-[33%] top-[55%]"> </span>
        <span class="ratio-65 fill bottom-[20%] right-[5%]"> </span>
        <svg class="text-primary" style="opacity: 0.15" width="100%" height="100%" viewBox="0 0 1401 613" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 580C35.1785 462.015 166.359 247.408 425.652 332.866 749.767 439.688 890.318 302.84 946.338 181.583 1002.36 60.3256 1149.41-52.8479 14e2 35.4968" stroke="currentcolor" stroke-width="4" stroke-dasharray="10 10"></path>
          <path d="M1398 .999977C1364.87 125.95 1233.88 353.224 974.955 262.722 651.302 149.594 510.953 294.52 455.013 422.935S252.231 671.203 2.00002 577.644" stroke="currentcolor" stroke-width="4" stroke-dasharray="10 10"></path>
        </svg>
      </div>
    </div>
  </section>
  <!-- end Intro -->

  <!-- Services -->
  <section class="section">
    <div class="container">
      <div class="row mb-6 items-center justify-center">
        <div class="order-0 lg:col-5" data-aos="fade-up">
          <div class="mb-0">
            <div class="section-title text-left">
              <p class="mb-4 text-[0.9rem] uppercase">PRIMARY SPECIALITY</p>
              <h2 class="service-title">
                You Will Not Miss Your All Misunderstandings
              </h2>
              <p class="text-[.9rem] text-text">
                Protect your design vision and leave nothing up to interpretation
                with interaction recipes. Quickly share and access all your team
                members interactions by using libraries, ensuring consistency
                throughout the.
              </p>
            </div>
          </div>
        </div>
        <div class="order-1 mt-4 lg:col-6 lg:mt-0" data-aos="fade-up" data-aos-delay="100">
          <div class="pl-0 lg:pl-4">
            <img class="max-w-full" alt="service" width="575" height="511" src="<?= urlOf("assets/images/features-01.webp") ?>" />
          </div>
        </div>
      </div>
      <div class="row mb-6 items-center justify-center">
        <div class="order-1 lg:col-5" data-aos="fade-up">
          <div class="mb-0">
            <div class="section-title text-left">
              <p class="mb-4 text-[0.9rem] uppercase">SECONDARY SPECIALITY</p>
              <h2 class="service-title">
                Say Hello To No-Code The Advance Creation
              </h2>
              <p class="text-[.9rem] text-text">
                From the simplest of interactions to those that use Excel-gradeing
                formulas, ProtoPie can handle them all. Make mind-blowing of New
                interactions everyday without ever having to write any new code.
              </p>
            </div>
          </div>
        </div>
        <div class="order-0 mt-4 lg:col-6 lg:mt-0" data-aos="fade-up" data-aos-delay="100">
          <div class="pl-0 lg:pl-4">
            <img class="max-w-full" alt="service" width="575" height="511" src="<?= urlOf("assets/images/features-02.webp") ?>" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end Services -->

  <!-- testimonials -->
  <section class="section">
    <section class="section testimonials pt-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <p class="mb-4 text-[0.9rem] uppercase">
                Don’t Take Our Word For It
              </p>
              <h2 class="title">OUR TESTIMONIALS</h2>
              <p class="text-[.9rem] text-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                egestas <br />
                Werat viverra id et aliquet. vulputate egestas sollicitudin.
              </p>
            </div>
          </div>
        </div>
        <div class="row items-center justify-center">
          <div class="hidden md:col-3 xl:col-4 lg:block" data-aos="fade-up" data-aos-delay="50">
            <img class="max-w-full" alt="OUR TESTIMONIALS" width="445" height="553" src="<?= urlOf("assets/images/testimonials-01.png") ?>" loading="lazy" decoding="async" />
          </div>
          <div class="sm:col-10 md:col-8 lg:col-5 xl:col-4" data-aos="fade-up">
            <div class="relative z-30 overflow-hidden">
              <div class="swiper testimonial-carousel">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonial-content cursor-pointer px-8 py-16 text-center text-white">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg>
                      <p class="mb-4 mt-8 leading-[1.75]">
                        Lorem ipsum dolor amet, conseetur adipiscing elit. Ornare
                        quam porta arcu congue felis volutpat. Vitae lectudbfs
                        pellentesque vitae dolor
                      </p>
                      <span class="author mt-4">
                        <img src="<?= urlOf("assets/images/user-img/07-i.jpg") ?>" alt="slider" />
                        <h3 class="h6">David Cameron</h3>
                        <p class="text-sm text-light">CEO, Nexuspay</p>
                      </span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-content cursor-pointer px-8 py-16 text-center text-white">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg>
                      <p class="mb-4 mt-8 leading-[1.75]">
                        Lorem ipsum dolor amet, conseetur adipiscing elit. Ornare
                        quam porta arcu congue felis volutpat. Vitae lectudbfs
                        pellentesque vitae dolor
                      </p>
                      <span class="author mt-4">
                        <img src="<?= urlOf("assets/images/user-img/07-i.jpg") ?>" alt="slider" />
                        <h3 class="h6">David Cameron</h3>
                        <p class="text-sm text-light">CEO, Nexuspay</p>
                      </span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-content cursor-pointer px-8 py-16 text-center text-white">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg>
                      <p class="mb-4 mt-8 leading-[1.75]">
                        Lorem ipsum dolor amet, conseetur adipiscing elit. Ornare
                        quam porta arcu congue felis volutpat. Vitae lectudbfs
                        pellentesque vitae dolor
                      </p>
                      <span class="author mt-4">
                        <img src="<?= urlOf("assets/images/user-img/07-i.jpg") ?>" alt="slider" />
                        <h3 class="h6">David Cameron</h3>
                        <p class="text-sm text-light">CEO, Nexuspay</p>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="pagination mx-auto"></div>
              </div>
              <svg class="absolute left-1/2 top-0 -z-10 h-full w-auto -translate-x-1/2 text-primary sm:left-0 sm:h-auto sm:w-full sm:translate-x-0" viewBox="0 0 462 458" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M36.9901 53.2939C8.66553 90.8729-.680565 197.569.0380893 247.72 3.02596 456.228 136.937 460.573 283.124 457.125 406.681 454.211 459.969 401.82 461.426 261.777 462.591 149.742 432.9 78.8779 413.134 60.3019 326.242-21.359 89.5954-16.4987 36.9901 53.2939z" fill="currentcolor"></path>
              </svg>
            </div>
          </div>
          <div class="hidden md:col-3 xl:col-4 lg:block" data-aos="fade-up" data-aos-delay="150">
            <img class="max-w-full" alt="OUR TESTIMONIALS" width="445" height="553" src="<?= urlOf("assets/images/testimonials-01.png") ?>" />
          </div>
        </div>
      </div>
    </section>
  </section>
  <?php
  include pathOf("assets/includes/footer.php");
  include pathOf("assets/includes/scripts.php");
  include pathOf("assets/includes/pageend.php");
  ?>