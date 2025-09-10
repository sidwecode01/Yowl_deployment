<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="canonical" href="https://ranyeh24.github.io/inazuma-tailwind" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="194x194" href="./assets/favicon/favicon-194x194.png"/>
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/favicon/android-chrome-192x192.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png"/>
    <link rel="manifest" href="./assets/favicon/site.webmanifest.json" />
    <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#3d63dd"/>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css"/>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

  </head>
  <body>

    <!-- Navbar -->
    <header
      class="ic-navbar absolute left-0 top-0 z-40 flex w-full items-center bg-blue-500"
      role="banner"
      aria-label="Navigation bar">
      <div class="container">
        <div class="ic-navbar-container relative -mx-5 flex items-center justify-between">
          
          <div  class="w-60 lg:w-56 max-w-full px-5">
            <!-- <a href="." class="ic-navbar-logo block w-full py-5 text-primary-color"> -->
              <img id="logoD" src="../Logo/whiteLogos.png" alt=""  class="h-12">
            <!-- </a> -->
          </div>

          <div class="flex w-full items-center justify-between px-5">
            <div>
              <button
                type="button"
                class="ic-navbar-toggler absolute right-4 bg-blue-500 top-1/2 block -translate-y-1/2 rounded-md px-3 py-[6px] text-[22px]/none text-primary-color ring-primary focus:ring-2 lg:hidden"
                data-web-toggle="navbar-collapse"
                data-web-target="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation menu">
                <i class="lni lni-menu"></i>
              </button>

              <nav
                id="navbarMenu"
                class="ic-navbar-collapse absolute right-4 top-[80px] w-full max-w-[250px] rounded-lg hidden bg-primary-light-1 py-5 shadow-lg dark:bg-primary-dark-1 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:shadow-none dark:lg:bg-transparent xl:px-6">
                <ul
                  class="block lg:flex"
                  role="menu"
                  aria-label="Navigation menu">
                  <li class="group relative">
                    <a
                      href="/landing"
                      class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mx-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70 active"
                      role="menuitem">Home</a>
                  </li>

                </ul>

              </nav>

            </div>
            <div class="flex items-center justify-end pr-[52px] lg:pr-0">
              <button
                type="button"
                class="inline-flex items-center text-primary-color text-[24px]/none"
                aria-label="Switch theme"
                data-web-trigger="web-theme"></button>
              <div class="hidden sm:flex">
                <a
                  href="/Home"
                  class="btn-navbar ml-5 px-6 py-3 rounded-md bg-primary-color bg-opacity-20 text-base font-medium text-primary-color hover:bg-opacity-100 hover:text-primary"
                  role="button">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main class="main relative">
      <!-- Hero section -->
      <section
        id="home"
        class="relative overflow-hidden bg-primary text-primary-color pt-[120px] md:pt-[130px] lg:pt-[160px]">
        <div class="container">
          <div class="-mx-5 flex flex-wrap items-center">
            <div class="w-full px-5">
              <div class="scroll-revealed mx-auto max-w-[780px] text-center">
                <h1
                  class="mb-6 text-3xl font-bold leading-snug text-primary-color sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-tight">
                  Post your craziest comments with YOWL
                </h1>

                <p
                  class="mx-auto mb-9 max-w-[600px] text-base text-primary-color sm:text-lg sm:leading-normal">
                 If you need to post comments without any constraints, here is one for you. Express your most adorable comments.
                </p>

                <ul
                  class="mb-10 flex flex-wrap items-center justify-center gap-4 md:gap-5"
                >
                  <li>
                    <a
                      href="/Home"
                      class="inline-flex items-center justify-center rounded-md bg-primary-color text-primary px-5 py-3 text-center text-base font-medium shadow-md hover:bg-primary-light-5 md:px-7 md:py-[14px]"
                      role="button">Get Started</a>
                  </li>

                </ul>

              
              </div>
            </div>
         
          </div>
        </div>
      </section>

      <!-- About section -->
      <section id="about" class="section-area">
        <div class="container">
          <div class="grid grid-cols-1 gap-14 lg:grid-cols-2">
            <div class="w-full">
              <figure class="scroll-revealed max-w-[480px] mx-auto">
                <img
                  src="../Logo/signup.jpeg"
                  alt="About image"
                  class="rounded-xl"
                />
              </figure>
            </div>

            <div class="w-full">
              <div class="scroll-revealed">
                <h6 class="mb-2 block text-lg font-semibold text-primary">
                  About Us
                </h6>
                <h2 class="mb-6">
                  Our team comes with the experience and knowledge
                </h2>
              </div>

              <div class="tabs scroll-revealed">

                <div
                  class="tabs-content mt-4"
                  id="tabs-panel-profile"
                  tabindex="-1"
                  role="tabpanel"
                  aria-labelledby="tabs-list-profile"
                >
                  <p>
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, look like
                    readable English.
                  </p>
                  <p>
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have in some form, by injected
                    humour.
                  </p>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services section -->
      <section id="services" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
              Services
            </h6>
            <h2 class="mb-6">Our Best Services</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <div class="row">
            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-capsule"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Refreshing Design
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                    Rem.
                  </p>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-tailwindcss"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Solid Tailwind CSS
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                    Rem.
                  </p>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-gift"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Free and Open-Source
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                    Rem.
                  </p>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-layout"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Multipurpose Template
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                    Rem.
                  </p>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-layers"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Fully Customizable
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                    Rem.
                  </p>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-grid-alt"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    All Essential Elements
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                    Rem.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <button
      type="button"
      class="inline-flex w-12 h-12 rounded-md items-center justify-center text-lg/none bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10 fixed bottom-[117px] right-[20px] hover:-translate-y-1 opacity-100 visible z-50 is-hided"
      data-web-trigger="scroll-top"
      aria-label="Scroll to top"
    >
      <i class="lni lni-chevron-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <script src="./assets/js/main.js"></script>
    <script>
      // Scroll Reveal
      const sr = ScrollReveal({
        origin: "bottom",
        distance: "16px",
        duration: 1000,
        reset: false,
      });

      sr.reveal(`.scroll-revealed`, {
        cleanup: true,
      });

      // GLightBox
      GLightbox({
        selector: ".video-popup",
        href: "https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM",
        type: "video",
        source: "youtube",
        width: 900,
        autoplayVideos: true,
      });

      const myGallery3 = GLightbox({
        selector: ".portfolio-box",
        type: "image",
        width: 900,
      });

      // Testimonial
      const testimonialSwiper = new Swiper(".testimonial-carousel", {
        slidesPerView: 1,
        spaceBetween: 30,

        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1280: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    </script>
  </body>
</html>


<style>
  @charset "UTF-8";

@import url("https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap");

*,
::before,
::after {
  box-sizing: border-box;
  border-width: 0;
  border-style: solid;
  border-color: #e5e7eb;
}

::before,
::after {
  --tw-content: '';
}

html,
:host {
  line-height: 1.5;
  -webkit-text-size-adjust: 100%;
  -moz-tab-size: 4;
  -o-tab-size: 4;
  tab-size: 4;
  font-family: Inter, sans-serif;
  font-feature-settings: normal;
  font-variation-settings: normal;
  -webkit-tap-highlight-color: transparent;
}

body {
  margin: 0;
  line-height: inherit;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

a {
  color: inherit;
  text-decoration: inherit;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub {
  bottom: -0.25em;
}

button {
  font-family: inherit;
  font-feature-settings: inherit;
  font-variation-settings: inherit;
  font-size: 100%;
  font-weight: inherit;
  line-height: inherit;
  letter-spacing: inherit;
  color: inherit;
  margin: 0;
  padding: 0;
}

button {
  text-transform: none;
  background-color: transparent;
  background-image: none;
}

:-moz-focusring {
  outline: auto;
}

:-moz-ui-invalid {
  box-shadow: none;
}

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

dialog {
  padding: 0;
}


button,
[role="button"] {
  cursor: pointer;
}

:disabled {
  cursor: default;
}

img,
svg,
canvas {
  display: block;
}

img {
  max-width: 100%;
  height: auto;
}

body{
  --tw-bg-opacity: 1;
  background-color: rgb(253 253 254 / var(--tw-bg-opacity));
  font-family: Inter, sans-serif;
  font-size: 14px;
  line-height: 1.5;
}

@media (min-width: 1024px){
  body{
    font-size: 1rem;
    line-height: 1.5rem;
  }
}

body:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-bg-opacity: 1;
  background-color: rgb(29 34 46 / var(--tw-bg-opacity));
}

img{
  max-width: 100%;
}


  button {
  border-width: 0px;
  background-color: inherit;
  color: inherit;
  outline: 2px solid transparent;
  outline-offset: 2px;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

strong{
  font-weight: 700;
  --tw-text-opacity: 1;
  color: rgb(30 31 36 / var(--tw-text-opacity));
}

strong:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-text-opacity: 1;
  color: rgb(238 238 240 / var(--tw-text-opacity));
}

h1{
  font-size: 3rem;
  line-height: 1.25;
}

h2{
  font-size: 2.25rem;
  line-height: 1.25;
}

h3{
  font-size: 1.875rem;
  line-height: 1.25;
}

h4{
  font-size: 1.5rem;
  line-height: 1.25;
}

h5{
  font-size: 1.25rem;
  line-height: 1.25;
}

h6{
  font-size: 0.875rem;
  line-height: 1.25;
}

p{
  margin: 0px;
  font-size: 1em;
  line-height: 1.5;
}

p + p{
  margin-top: 1.25rem;
}

.container{
  width: 100%;
  margin-right: auto;
  margin-left: auto;
  padding-right: 1.25rem;
  padding-left: 1.25rem;
}

@media (min-width: 640px){
  .container{
    max-width: 640px;
  }
}

@media (min-width: 768px){
  .container{
    max-width: 768px;
  }
}

@media (min-width: 1024px){
  .container{
    max-width: 1024px;
  }
}

@media (min-width: 1280px){
  .container{
    max-width: 1280px;
  }
}

@media (min-width: 1536px){
  .container{
    max-width: 1536px;
  }
}

.disabled,
  :disabled{
  pointer-events: none !important;
  -webkit-user-select: none !important;
  -moz-user-select: none !important;
  user-select: none !important;
  opacity: 0.6 !important;
}

*, ::before, ::after{
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}

::backdrop{
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}


.ic-navbar{
  border-width: 0px;
  border-bottom-width: 1px;
  border-color: transparent;
}

.ic-navbar.sticky{
  position: fixed;
  z-index: 9999;
  border-color: #00073527;
  background-color: rgb(253 253 254 / var(--tw-bg-opacity));
  --tw-bg-opacity: 0.75;
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  --tw-backdrop-blur: blur(8px);
  -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
  backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}

.ic-navbar.sticky:where([data-web-theme=dark], [data-web-theme=dark] *){
  border-color: #d6dbfc2f;
  background-color: rgb(29 34 46 / var(--tw-bg-opacity));
  --tw-bg-opacity: 0.7;
}

.ic-navbar.sticky .ic-navbar-logo{
  --tw-text-opacity: 1;
  color: rgb(30 31 36 / var(--tw-text-opacity));
}

.ic-navbar.sticky .ic-navbar-logo:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-text-opacity: 1;
  color: rgb(238 238 240 / var(--tw-text-opacity));
}

.ic-navbar.sticky .ic-navbar-logo #NavbarBrandIcon{
  fill: #3d63dd;
}

.ic-navbar.sticky .ic-navbar-toggler{
  --tw-text-opacity: 1;
  color: rgb(30 31 36 / var(--tw-text-opacity));
}

.ic-navbar.sticky .ic-navbar-toggler:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-text-opacity: 1;
  color: rgb(238 238 240 / var(--tw-text-opacity));
}

.ic-navbar.menu-show .ic-navbar-collapse{
  z-index: -1;
  display: block;
}

@media (min-width: 1024px){
  .ic-navbar.sticky .ic-page-scroll{
    --tw-text-opacity: 1;
    color: rgb(30 31 36 / var(--tw-text-opacity));
  }

  .ic-navbar.sticky .ic-page-scroll:hover{
    --tw-text-opacity: 1;
    color: rgb(61 99 221 / var(--tw-text-opacity));
    opacity: 1;
  }

  .ic-navbar.sticky .ic-page-scroll:where([data-web-theme=dark], [data-web-theme=dark] *){
    --tw-text-opacity: 1;
    color: rgb(238 238 240 / var(--tw-text-opacity));
  }
}

.ic-page-scroll.active{
  --tw-text-opacity: 1;
  color: rgb(61 99 221 / var(--tw-text-opacity));
}

@media (min-width: 1024px){
  .ic-page-scroll.active{
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
    opacity: 0.7;
  }

  .ic-navbar.sticky .ic-page-scroll.active{
    --tw-text-opacity: 1;
    color: rgb(61 99 221 / var(--tw-text-opacity));
    opacity: 1;
  }
}

.ic-navbar.sticky [data-web-trigger="web-theme"]{
  --tw-text-opacity: 1;
  color: rgb(30 31 36 / var(--tw-text-opacity));
}

.ic-navbar.sticky [data-web-trigger="web-theme"]:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-text-opacity: 1;
  color: rgb(238 238 240 / var(--tw-text-opacity));
}

.ic-navbar.sticky .btn-navbar{
  --tw-bg-opacity: 1;
  background-color: rgb(61 99 221 / var(--tw-bg-opacity));
}

.ic-navbar.sticky .btn-navbar:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(54 87 195 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.ic-navbar.sticky .btn-navbar:hover:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-bg-opacity: 1;
  background-color: rgb(49 84 205 / var(--tw-bg-opacity));
}

#home{
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-image: radial-gradient(
      circle at top right,
      rgba(255, 255, 255, 0.1) 0%,
      rgba(255, 255, 255, 0.1) 28%,
      rgba(255, 255, 255, 0.075) 28%,
      rgba(255, 255, 255, 0.075) 45%,
      rgba(255, 255, 255, 0.05) 45%,
      rgba(255, 255, 255, 0.05) 63%,
      rgba(255, 255, 255, 0.025) 63%,
      rgba(255, 255, 255, 0.025) 100%
    );
}

.section-area{
  position: relative;
  padding-top: 6rem;
  padding-bottom: 6rem;
  --tw-text-opacity: 1;
  color: rgb(98 99 108 / var(--tw-text-opacity));
}

.section-area:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-text-opacity: 1;
  color: rgb(180 182 191 / var(--tw-text-opacity));
}

.section-area:nth-child(odd){
  background-color: #00005506;
}

.section-area:nth-child(odd):where([data-web-theme=dark], [data-web-theme=dark] *){
  background-color: #adc5f30f;
}

.tabs-nav .tabs-link.active{
  --tw-bg-opacity: 1;
  background-color: rgb(61 99 221 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.tabs .tabs-content{
  display: block;
}

.tabs .tabs-content.hide{
  display: none;
}

.portfolio-menu button.active{
  --tw-bg-opacity: 1;
  background-color: rgb(61 99 221 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.portfolio.show{
  display: block;
}

.portfolio.hide{
  display: none;
}

#call-action {
  background-image: radial-gradient(
      circle at top left,
      rgba(255, 255, 255, 0.1) 0%,
      rgba(255, 255, 255, 0.1) 28%,
      rgba(255, 255, 255, 0.075) 28%,
      rgba(255, 255, 255, 0.075) 45%,
      rgba(255, 255, 255, 0.05) 45%,
      rgba(255, 255, 255, 0.05) 63%,
      rgba(255, 255, 255, 0.025) 63%,
      rgba(255, 255, 255, 0.025) 100%
    );
}

.common-carousel .swiper-button-prev,
  .common-carousel .swiper-button-next{
  position: static !important;
  margin: 0px;
  height: 3rem;
  width: 3rem;
  border-radius: 0.5rem;
  --tw-bg-opacity: 1;
  background-color: rgb(252 252 253 / var(--tw-bg-opacity));
  font-size: 22px;
  --tw-text-opacity: 1;
  color: rgb(30 31 36 / var(--tw-text-opacity));
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.common-carousel .swiper-button-prev::after,
  .common-carousel .swiper-button-next::after{
  content: var(--tw-content);
  display: none;
}

.common-carousel .swiper-button-prev:hover,
  .common-carousel .swiper-button-next:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(61 99 221 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.common-carousel .swiper-button-prev:focus,
  .common-carousel .swiper-button-next:focus{
  --tw-bg-opacity: 1;
  background-color: rgb(61 99 221 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.common-carousel .swiper-button-prev:where([data-web-theme=dark], [data-web-theme=dark] *),
  .common-carousel .swiper-button-next:where([data-web-theme=dark], [data-web-theme=dark] *){
  background-color: rgb(238 238 240 / 0.1);
  --tw-text-opacity: 1;
  color: rgb(238 238 240 / var(--tw-text-opacity));
}

[data-web-trigger="scroll-top"].is-hided{
  visibility: hidden;
  opacity: 0;
}

.pointer-events-auto{
  pointer-events: auto;
}

.visible{
  visibility: visible;
}

.invisible{
  visibility: hidden;
}

.fixed{
  position: fixed;
}

.absolute{
  position: absolute;
}

.relative{
  position: relative;
}

.-left-9{
  left: -2.25rem;
}

.-right-6{
  right: -1.5rem;
}

.-top-6{
  top: -1.5rem;
}

.bottom-0{
  bottom: 0px;
}

.bottom-5{
  bottom: 1.25rem;
}

.bottom-\[117px\]{
  bottom: 117px;
}

.left-0{
  left: 0px;
}

.left-1\/2{
  left: 50%;
}

.left-5{
  left: 1.25rem;
}

.right-0{
  right: 0px;
}

.right-4{
  right: 1rem;
}

.right-5{
  right: 1.25rem;
}

.right-\[20px\]{
  right: 20px;
}

.top-0{
  top: 0px;
}

.top-1\.5{
  top: 0.375rem;
}

.top-1\/2{
  top: 50%;
}

.top-5{
  top: 1.25rem;
}

.top-\[80px\]{
  top: 80px;
}

.-z-10{
  z-index: -10;
}

.-z-\[1\]{
  z-index: -1;
}

.z-10{
  z-index: 10;
}

.z-40{
  z-index: 40;
}

.z-50{
  z-index: 50;
}

.z-\[-1\]{
  z-index: -1;
}

.z-\[99999\]{
  z-index: 99999;
}

.-order-3{
  order: -3;
}

.order-first{
  order: -9999;
}

.m-0{
  margin: 0px;
}

.-mx-3{
  margin-left: -0.75rem;
  margin-right: -0.75rem;
}

.-mx-5{
  margin-left: -1.25rem;
  margin-right: -1.25rem;
}

.mx-8{
  margin-left: 2rem;
  margin-right: 2rem;
}

.mx-auto{
  margin-left: auto;
  margin-right: auto;
}

.my-1{
  margin-top: 0.25rem;
  margin-bottom: 0.25rem;
}

.my-8{
  margin-top: 2rem;
  margin-bottom: 2rem;
}

.-mt-\[12rem\]{
  margin-top: -12rem;
}

.mb-1{
  margin-bottom: 0.25rem;
}

.mb-10{
  margin-bottom: 2.5rem;
}

.mb-12{
  margin-bottom: 3rem;
}

.mb-2{
  margin-bottom: 0.5rem;
}

.mb-3{
  margin-bottom: 0.75rem;
}

.mb-4{
  margin-bottom: 1rem;
}

.mb-5{
  margin-bottom: 1.25rem;
}

.mb-6{
  margin-bottom: 1.5rem;
}

.mb-8{
  margin-bottom: 2rem;
}

.mb-9{
  margin-bottom: 2.25rem;
}

.mb-\[3\.750rem\]{
  margin-bottom: 3.750rem;
}

.ml-5{
  margin-left: 1.25rem;
}

.mr-4{
  margin-right: 1rem;
}

.mt-11{
  margin-top: 2.75rem;
}

.mt-16{
  margin-top: 4rem;
}

.mt-3{
  margin-top: 0.75rem;
}

.mt-4{
  margin-top: 1rem;
}

.mt-6{
  margin-top: 1.5rem;
}

.mt-8{
  margin-top: 2rem;
}

.mt-\[60px\]{
  margin-top: 60px;
}

.block{
  display: block;
}

.inline-block{
  display: inline-block;
}

.flex{
  display: flex;
}

.inline-flex{
  display: inline-flex;
}

.grid{
  display: grid;
}

.hidden{
  display: none;
}

.aspect-\[3\/2\]{
  aspect-ratio: 3/2;
}

.aspect-\[4\/3\]{
  aspect-ratio: 4/3;
}

.aspect-square{
  aspect-ratio: 1 / 1;
}

.aspect-video{
  aspect-ratio: 16 / 9;
}

.h-10{
  height: 2.5rem;
}

.h-12{
  height: 3rem;
}

.h-\[120px\]{
  height: 120px;
}

.h-\[40px\]{
  height: 40px;
}

.h-\[500px\]{
  height: 500px;
}

.h-\[50px\]{
  height: 50px;
}

.h-\[70px\]{
  height: 70px;
}

.h-\[80px\]{
  height: 80px;
}

.h-auto{
  height: auto;
}

.h-full{
  height: 100%;
}

.w-10{
  width: 2.5rem;
}

.w-12{
  width: 3rem;
}

.w-20{
  width: 5rem;
}

.w-60{
  width: 15rem;
}

.w-\[120px\]{
  width: 120px;
}

.w-\[50px\]{
  width: 50px;
}

.w-\[60px\]{
  width: 60px;
}

.w-\[70px\]{
  width: 70px;
}

.w-\[80px\]{
  width: 80px;
}

.w-full{
  width: 100%;
}

.max-w-\[250px\]{
  max-width: 250px;
}

.max-w-\[480px\]{
  max-width: 480px;
}

.max-w-\[50px\]{
  max-width: 50px;
}

.max-w-\[550px\]{
  max-width: 550px;
}

.max-w-\[600px\]{
  max-width: 600px;
}

.max-w-\[780px\]{
  max-width: 780px;
}

.max-w-\[845px\]{
  max-width: 845px;
}

.max-w-\[900px\]{
  max-width: 900px;
}

.max-w-full{
  max-width: 100%;
}

.flex-grow{
  flex-grow: 1;
}

.-translate-x-1\/2{
  --tw-translate-x: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-translate-y-1\/2{
  --tw-translate-y: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.scale-\[0\.15\]{
  --tw-scale-x: 0.15;
  --tw-scale-y: 0.15;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.transform{
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.grid-cols-1{
  grid-template-columns: repeat(1, minmax(0, 1fr));
}

.flex-col{
  flex-direction: column;
}

.flex-wrap{
  flex-wrap: wrap;
}

.items-center{
  align-items: center;
}

.justify-end{
  justify-content: flex-end;
}

.justify-center{
  justify-content: center;
}

.justify-between{
  justify-content: space-between;
}

.gap-1{
  gap: 0.25rem;
}

.gap-14{
  gap: 3.5rem;
}

.gap-2{
  gap: 0.5rem;
}

.gap-3{
  gap: 0.75rem;
}

.gap-4{
  gap: 1rem;
}

.gap-5{
  gap: 1.25rem;
}

.gap-6{
  gap: 1.5rem;
}

.gap-x-3{
  -moz-column-gap: 0.75rem;
       column-gap: 0.75rem;
}

.gap-x-8{
  -moz-column-gap: 2rem;
       column-gap: 2rem;
}

.gap-y-12{
  row-gap: 3rem;
}

.overflow-hidden{
  overflow: hidden;
}

.rounded-2xl{
  border-radius: 1rem;
}

.rounded-full{
  border-radius: 9999px;
}

.rounded-lg{
  border-radius: 0.5rem;
}

.rounded-md{
  border-radius: 0.375rem;
}

.rounded-xl{
  border-radius: 0.75rem;
}

.rounded-e-none{
  border-start-end-radius: 0px;
  border-end-end-radius: 0px;
}

.rounded-s-none{
  border-start-start-radius: 0px;
  border-end-start-radius: 0px;
}

.rounded-t-xl{
  border-top-left-radius: 0.75rem;
  border-top-right-radius: 0.75rem;
}

.rounded-tr-xl{
  border-top-right-radius: 0.75rem;
}

.border{
  border-width: 1px;
}

.border-0{
  border-width: 0px;
}

.border-t{
  border-top-width: 1px;
}

.border-solid{
  border-style: solid;
}

.border-alpha-dark{
  border-color: #d6dbfc2f;
}

.border-alpha-light{
  border-color: #00073527;
}

.\!bg-primary{
  --tw-bg-opacity: 1 !important;
  background-color: rgb(61 99 221 / var(--tw-bg-opacity)) !important;
}

.bg-blue-500{
  --tw-bg-opacity: 1;
  background-color: rgb(59 130 246 / var(--tw-bg-opacity));
}

.bg-body-light-1{
  --tw-bg-opacity: 1;
  background-color: rgb(252 252 253 / var(--tw-bg-opacity));
}

.bg-body-light-1\/75{
  background-color: rgb(252 252 253 / 0.75);
}

.bg-body-light-12\/10{
  background-color: rgb(30 31 36 / 0.1);
}

.bg-green-400{
  --tw-bg-opacity: 1;
  background-color: rgb(74 222 128 / var(--tw-bg-opacity));
}

.bg-primary{
  --tw-bg-opacity: 1;
  background-color: rgb(61 99 221 / var(--tw-bg-opacity));
}

.bg-primary-color{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-primary-color\/\[0\.15\]{
  background-color: rgb(255 255 255 / 0.15);
}

.bg-primary-dark-2{
  --tw-bg-opacity: 1;
  background-color: rgb(30 37 52 / var(--tw-bg-opacity));
}

.bg-primary-light-1{
  --tw-bg-opacity: 1;
  background-color: rgb(253 253 254 / var(--tw-bg-opacity));
}

.bg-primary\/10{
  background-color: rgb(61 99 221 / 0.1);
}

.bg-red-500{
  --tw-bg-opacity: 1;
  background-color: rgb(239 68 68 / var(--tw-bg-opacity));
}

.bg-transparent{
  background-color: transparent;
}

.bg-opacity-20{
  --tw-bg-opacity: 0.2;
}

.fill-current{
  fill: currentColor;
}

.fill-indigo-500{
  fill: #6366f1;
}

.fill-teal-500{
  fill: #14b8a6;
}

.object-cover{
  -o-object-fit: cover;
     object-fit: cover;
}

.p-4{
  padding: 1rem;
}

.px-3{
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}

.px-4{
  padding-left: 1rem;
  padding-right: 1rem;
}

.px-5{
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.px-6{
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}

.px-8{
  padding-left: 2rem;
  padding-right: 2rem;
}

.px-9{
  padding-left: 2.25rem;
  padding-right: 2.25rem;
}

.py-12{
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.py-2{
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.py-20{
  padding-top: 5rem;
  padding-bottom: 5rem;
}

.py-3{
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.py-5{
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
}

.py-8{
  padding-top: 2rem;
  padding-bottom: 2rem;
}

.py-\[6px\]{
  padding-top: 6px;
  padding-bottom: 6px;
}

.pb-10{
  padding-bottom: 2.5rem;
}

.pl-4{
  padding-left: 1rem;
}

.pr-\[52px\]{
  padding-right: 52px;
}

.pt-12{
  padding-top: 3rem;
}

.pt-4{
  padding-top: 1rem;
}

.pt-8{
  padding-top: 2rem;
}

.pt-\[120px\]{
  padding-top: 120px;
}

.text-left{
  text-align: left;
}

.text-center{
  text-align: center;
}

.text-3xl{
  font-size: 1.875rem;
  line-height: 2.25rem;
}

.text-\[1\.125rem\]{
  font-size: 1.125rem;
}

.text-\[1\.25rem\]{
  font-size: 1.25rem;
}

.text-\[1\.25rem\]\/tight{
  font-size: 1.25rem;
  line-height: 1.25;
}

.text-\[1\.5rem\]{
  font-size: 1.5rem;
}

.text-\[1\.75rem\]{
  font-size: 1.75rem;
}

.text-\[1\.875rem\]{
  font-size: 1.875rem;
}

.text-\[22px\]{
  font-size: 22px;
}

.text-\[22px\]\/none{
  font-size: 22px;
  line-height: 1;
}

.text-\[24px\]\/none{
  font-size: 24px;
  line-height: 1;
}

.text-\[28px\]{
  font-size: 28px;
}

.text-\[37px\]\/none{
  font-size: 37px;
  line-height: 1;
}

.text-\[55px\]{
  font-size: 55px;
}

.text-base{
  font-size: 1rem;
  line-height: 1.5rem;
}

.text-lg{
  font-size: 1.125rem;
  line-height: 1.75rem;
}

.text-lg\/none{
  font-size: 1.125rem;
  line-height: 1;
}

.text-sm{
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.text-xl{
  font-size: 1.25rem;
  line-height: 1.75rem;
}

.text-xs{
  font-size: 0.75rem;
  line-height: 1rem;
}

.font-bold{
  font-weight: 700;
}

.font-medium{
  font-weight: 500;
}

.font-normal{
  font-weight: 400;
}

.font-semibold{
  font-weight: 600;
}

.leading-\[24px\]{
  line-height: 24px;
}

.leading-none{
  line-height: 1;
}

.leading-snug{
  line-height: 1.375;
}

.leading-tight{
  line-height: 1.25;
}

.\!text-primary-color{
  --tw-text-opacity: 1 !important;
  color: rgb(255 255 255 / var(--tw-text-opacity)) !important;
}

.text-body-dark-11{
  --tw-text-opacity: 1;
  color: rgb(180 182 191 / var(--tw-text-opacity));
}

.text-body-light-10{
  --tw-text-opacity: 1;
  color: rgb(128 130 141 / var(--tw-text-opacity));
}

.text-body-light-11{
  --tw-text-opacity: 1;
  color: rgb(98 99 108 / var(--tw-text-opacity));
}

.text-body-light-12{
  --tw-text-opacity: 1;
  color: rgb(30 31 36 / var(--tw-text-opacity));
}

.text-inherit{
  color: inherit;
}

.text-primary{
  --tw-text-opacity: 1;
  color: rgb(61 99 221 / var(--tw-text-opacity));
}

.text-primary-color{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.text-primary-color\/60{
  color: rgb(255 255 255 / 0.6);
}

.text-white{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.opacity-0{
  opacity: 0;
}

.opacity-100{
  opacity: 1;
}

.opacity-75{
  opacity: 0.75;
}

.shadow-card-1{
  --tw-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.08);
  --tw-shadow-colored: 0px 0px 40px 0px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-card-2{
  --tw-shadow: 0px 10px 20px 0 rgba(0, 0, 0, 0.08);
  --tw-shadow-colored: 0px 10px 20px 0 var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-lg{
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-md{
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.ring-primary{
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(61 99 221 / var(--tw-ring-opacity));
}

.grayscale{
  --tw-grayscale: grayscale(100%);
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.filter{
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.row{
  margin-left: -0.75rem;
  margin-right: -0.75rem;
  margin-top: -2rem;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.row > *{
  margin-top: 2rem;
  box-sizing: border-box;
  width: 100%;
  max-width: 100%;
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}

.col-6{
  width: 50%;
}

.col-12{
  width: 100%;
}

.hover\:-translate-y-1:hover{
  --tw-translate-y: -0.25rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.hover\:bg-green-500:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(34 197 94 / var(--tw-bg-opacity));
}

.hover\:bg-primary:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(61 99 221 / var(--tw-bg-opacity));
}

.hover\:bg-primary-color:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.hover\:bg-primary-light-10:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(54 87 195 / var(--tw-bg-opacity));
}

.hover\:bg-primary-light-5:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(208 223 255 / var(--tw-bg-opacity));
}

.hover\:bg-opacity-100:hover{
  --tw-bg-opacity: 1;
}

.hover\:text-body-dark-12:hover{
  --tw-text-opacity: 1;
  color: rgb(238 238 240 / var(--tw-text-opacity));
}

.hover\:text-primary:hover{
  --tw-text-opacity: 1;
  color: rgb(61 99 221 / var(--tw-text-opacity));
}

.hover\:text-primary-color:hover{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.hover\:text-white:hover{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.hover\:shadow-lg:hover{
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.hover\:shadow-xl:hover{
  --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.hover\:grayscale-0:hover{
  --tw-grayscale: grayscale(0);
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.hover\:invert-0:hover{
  --tw-invert: invert(0);
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.focus\:border-primary:focus{
  --tw-border-opacity: 1;
  border-color: rgb(61 99 221 / var(--tw-border-opacity));
}

.focus\:bg-green-500:focus{
  --tw-bg-opacity: 1;
  background-color: rgb(34 197 94 / var(--tw-bg-opacity));
}

.focus\:bg-primary:focus{
  --tw-bg-opacity: 1;
  background-color: rgb(61 99 221 / var(--tw-bg-opacity));
}

.focus\:bg-primary-color:focus{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.focus\:bg-primary-light-10:focus{
  --tw-bg-opacity: 1;
  background-color: rgb(54 87 195 / var(--tw-bg-opacity));
}

.focus\:text-primary:focus{
  --tw-text-opacity: 1;
  color: rgb(61 99 221 / var(--tw-text-opacity));
}

.focus\:text-primary-color:focus{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.focus\:text-white:focus{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.focus\:shadow-xl:focus{
  --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.focus\:ring-2:focus{
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.group:hover .group-hover\:visible{
  visibility: visible;
}

.group:hover .group-hover\:rotate-\[2deg\]{
  --tw-rotate: 2deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.group:hover .group-hover\:scale-95{
  --tw-scale-x: .95;
  --tw-scale-y: .95;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.group:hover .group-hover\:scale-\[1\.05\]{
  --tw-scale-x: 1.05;
  --tw-scale-y: 1.05;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.group:hover .group-hover\:text-primary{
  --tw-text-opacity: 1;
  color: rgb(61 99 221 / var(--tw-text-opacity));
}

.group:hover .group-hover\:opacity-100{
  opacity: 1;
}

@media (min-width: 640px){
  .sm\:mr-6{
    margin-right: 1.5rem;
  }

  .sm\:flex{
    display: flex;
  }

  .sm\:h-\[60px\]{
    height: 60px;
  }

  .sm\:max-w-\[60px\]{
    max-width: 60px;
  }

  .sm\:px-10{
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }

  .sm\:px-8{
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .sm\:py-12{
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .sm\:text-2xl{
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .sm\:text-4xl{
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .sm\:text-\[32px\]{
    font-size: 32px;
  }

  .sm\:text-lg{
    font-size: 1.125rem;
    line-height: 1.75rem;
  }

  .sm\:leading-normal{
    line-height: 1.5;
  }

  .sm\:leading-snug{
    line-height: 1.375;
  }

  .sm\:col-6{
    width: 50%;
  }
}

@media (min-width: 768px){
  .md\:w-1\/2{
    width: 50%;
  }

  .md\:justify-start{
    justify-content: flex-start;
  }

  .md\:justify-end{
    justify-content: flex-end;
  }

  .md\:gap-5{
    gap: 1.25rem;
  }

  .md\:px-7{
    padding-left: 1.75rem;
    padding-right: 1.75rem;
  }

  .md\:py-\[14px\]{
    padding-top: 14px;
    padding-bottom: 14px;
  }

  .md\:pt-\[130px\]{
    padding-top: 130px;
  }

  .md\:col-4{
    width: 33.333333%;
  }

  .md\:col-6{
    width: 50%;
  }
}

@media (min-width: 1024px){
  .lg\:static{
    position: static;
  }

  .lg\:order-1{
    order: 1;
  }

  .lg\:mx-0{
    margin-left: 0px;
    margin-right: 0px;
  }

  .lg\:mr-0{
    margin-right: 0px;
  }

  .lg\:block{
    display: block;
  }

  .lg\:flex{
    display: flex;
  }

  .lg\:inline-flex{
    display: inline-flex;
  }

  .lg\:hidden{
    display: none;
  }

  .lg\:w-56{
    width: 14rem;
  }

  .lg\:w-full{
    width: 100%;
  }

  .lg\:max-w-full{
    max-width: 100%;
  }

  .lg\:grid-cols-2{
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .lg\:bg-transparent{
    background-color: transparent;
  }

  .lg\:px-0{
    padding-left: 0px;
    padding-right: 0px;
  }

  .lg\:py-0{
    padding-top: 0px;
    padding-bottom: 0px;
  }

  .lg\:py-6{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .lg\:py-\[100px\]{
    padding-top: 100px;
    padding-bottom: 100px;
  }

  .lg\:pr-0{
    padding-right: 0px;
  }

  .lg\:pt-\[160px\]{
    padding-top: 160px;
  }

  .lg\:text-5xl{
    font-size: 3rem;
    line-height: 1;
  }

  .lg\:text-xl{
    font-size: 1.25rem;
    line-height: 1.75rem;
  }

  .lg\:leading-tight{
    line-height: 1.25;
  }

  .lg\:text-primary-color{
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
  }

  .lg\:shadow-none{
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  }

  .lg\:col-2{
    width: 16.666667%;
  }

  .lg\:col-3{
    width: 25%;
  }

  .lg\:col-4{
    width: 33.333333%;
  }

  .group:hover .lg\:group-hover\:text-primary-color{
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
  }

  .group:hover .lg\:group-hover\:opacity-70{
    opacity: 0.7;
  }
}

@media (min-width: 1280px){
  .xl\:px-6{
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .xl\:text-2xl{
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .xl\:col-4{
    width: 33.333333%;
  }

  .xl\:col-8{
    width: 66.666667%;
  }

  .xl\:col-12{
    width: 100%;
  }
}

.dark\:border-alpha-dark:where([data-web-theme=dark], [data-web-theme=dark] *){
  border-color: #d6dbfc2f;
}

.dark\:bg-body-dark-12\/10:where([data-web-theme=dark], [data-web-theme=dark] *){
  background-color: rgb(238 238 240 / 0.1);
}

.dark\:bg-primary-dark-1:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-bg-opacity: 1;
  background-color: rgb(29 34 46 / var(--tw-bg-opacity));
}

.dark\:bg-primary-dark-2:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-bg-opacity: 1;
  background-color: rgb(30 37 52 / var(--tw-bg-opacity));
}

.dark\:text-body-dark-10:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-text-opacity: 1;
  color: rgb(125 127 138 / var(--tw-text-opacity));
}

.dark\:text-body-dark-11:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-text-opacity: 1;
  color: rgb(180 182 191 / var(--tw-text-opacity));
}

.dark\:text-body-dark-12:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-text-opacity: 1;
  color: rgb(238 238 240 / var(--tw-text-opacity));
}

.dark\:invert:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-invert: invert(100%);
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.dark\:hover\:bg-primary-dark-10:hover:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-bg-opacity: 1;
  background-color: rgb(49 84 205 / var(--tw-bg-opacity));
}

.dark\:hover\:text-primary-color:hover:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.dark\:focus\:bg-primary-dark-10:focus:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-bg-opacity: 1;
  background-color: rgb(49 84 205 / var(--tw-bg-opacity));
}

.dark\:focus\:text-primary-color:focus:where([data-web-theme=dark], [data-web-theme=dark] *){
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

@media (min-width: 1024px){
  .dark\:lg\:bg-transparent:where([data-web-theme=dark], [data-web-theme=dark] *){
    background-color: transparent;
  }

  .lg\:dark\:text-primary-color:where([data-web-theme=dark], [data-web-theme=dark] *){
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
  }
}

</style>

<script>
  "use strict";

  // Navbar
  const navbar = document.querySelector(".ic-navbar"),
    navbarToggler = navbar.querySelector("[data-web-toggle=navbar-collapse]");

  navbarToggler.addEventListener("click", function () {
    const dataTarget = this.dataset.webTarget,
      targetElement = document.getElementById(dataTarget),
      isExpanded = this.ariaExpanded === "true";

    if (!targetElement) {
      return;
    }

    navbar.classList.toggle("menu-show");
    this.ariaExpanded = !isExpanded;
    navbarToggler.innerHTML = navbar.classList.contains("menu-show")
      ? '<i class="lni lni-close"></i>'
      : '<i class="lni lni-menu"></i>';
  });

  // Sticky navbar
  window.addEventListener("scroll", function () {
    if (this.scrollY >= 72) {
      navbar.classList.add("sticky");

    } else {
      navbar.classList.remove("sticky");
    }
  });

  // Web theme
  const webTheme = document.querySelector("[data-web-trigger=web-theme]"),
    html = document.querySelector("html");

    const logoColor =document.getElementById('#logoD');
    logoColor.addEventListener('click', ()=> {
      console.log('good');
      
    });

  window.addEventListener("load", function () {
    var theme = localStorage.getItem("Inazuma_WebTheme");

    if (theme == "light") {
      webTheme.innerHTML = '<i class="lni lni-sun"></i>';
    } else if (theme == "dark") {
      webTheme.innerHTML = '<i class="lni lni-night"></i>';
    } else {
      theme = "light";
      localStorage.setItem("Inazuma_WebTheme", theme);
      webTheme.innerHTML = '<i class="lni lni-night"></i>';
    }

    html.dataset.webTheme = theme;
  });

  webTheme.addEventListener("click", function () {
    var theme = localStorage.getItem("Inazuma_WebTheme");

    webTheme.innerHTML =
      theme == "dark"
        ? '<i class="lni lni-sun"></i>'
        : '<i class="lni lni-night"></i>';
    theme = theme == "dark" ? "light" : "dark";
    localStorage.setItem("Inazuma_WebTheme", theme);
    html.dataset.webTheme = theme;
  });

  // Scrollspy
  function scrollspy(event) {
    var links = document.querySelectorAll(".ic-page-scroll"),
      scrollpos =
        window.pageYOffset ||
        document.documentElement.scrollTop ||
        document.body.scrollTop;

    for (let i = 0; i < links.length; i++) {
      var currentLink = links[i],
        dataTarget = currentLink.getAttribute("href"),
        targetElement = document.querySelector(dataTarget),
        topminus = scrollpos + 74;

      if (targetElement) {
        if (
          targetElement.offsetTop <= topminus &&
          targetElement.offsetTop + targetElement.offsetHeight > topminus
        ) {
          document.querySelector(".ic-page-scroll").classList.remove("active");
          currentLink.classList.add("active");
        } else {
          currentLink.classList.remove("active");
        }
      }
    }
  }

  window.document.addEventListener("scroll", scrollspy);

  // Menu scroll
  const pageLink = document.querySelectorAll(".ic-page-scroll");

  pageLink.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const targetElement = document.querySelector(link.getAttribute("href"));

      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: "smooth",
          offsetTop: 1 - 74,
        });
      }

      navbar.classList.remove("menu-show");
      navbarToggler.innerHTML = navbar.classList.contains("menu-show")
        ? '<i class="lni lni-close"></i>'
        : '<i class="lni lni-menu"></i>';
    });
  });

  // Scroll to top
  var st = document.querySelector("[data-web-trigger=scroll-top]");

  if (st) {
    window.onscroll = function () {
      if (
        document.body.scrollTop > 50 ||
        document.documentElement.scrollTop > 50
      ) {
        st.classList.remove("is-hided");
      } else {
        st.classList.add("is-hided");
      }
    };

    st.addEventListener("click", function () {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }

</script>