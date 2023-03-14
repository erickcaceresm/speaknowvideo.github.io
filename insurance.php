<?php include 'includes/header.php';?>

<section class="banner-commun banner_insurance">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Insurance</h1>
  </div>
</section>

<section class="section-commun section-black-two">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="pad-right-5">
          <img src="./assets/images/insurance-box.png">
        </div>
      </div>
      <div class="col-md-6">
        <div class="flex-commun">
          <div>
            <h1 class="title-primary color-white">Qualified Interpreters</h1>
            <hr class="border-line mb-4">
            <p class="color-white">Changing demographics present a unique opportunity for U.S.-based insurance providers to grow their businesses by communicating effectively with a population that is increasingly limited-English proficient.</p>
            <p class="color-white">Speak Now Video provides translation services to insurance companies in the areas of life, health, and property-and-casualty.</p>
            <p class="color-white">A complete solution: Speak Now Video provides industry-leading solutions for translation, localization, phone interpretation, video interpretation, and onsite interpretation.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-insurance section-black-gradient">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="flex-commun">
          <div>
            <h1 class="title-primary color-white">When it Comes to the Insurance Industry, Communication is Key</h1>
            <hr class="border-line mb-4">
            <p class="color-white">This is where qualified interpreters come in.</p>
            <p class="color-white">We will always provide you with the best quality of our services, with trust and transparency. Whether you are using our OPI service for a billing inquiry or have a VRI interpreter for a claim interview, we will provide you with an experienced interpreter who is familiar with insurance procedures and specific industry terminology.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <figure class="insurance-figure">
          <img src="./assets/images/insurance-box3.png" class="insurance-img_desktop">
          <img src="./assets/images/insurance-box3-movil.png" class="insurance-img_movil">
        </figure>
      </div>
    </div>
  </div>
</section>


<section class="section-commun bg-k-primary">
  <div class="container">
    <div class="row">
      <div class="col-12" data-aos="zoom-in">
        <h1 class="title-primary text-center color-white">Start communicating better with the Speak Now Video Platform
        </h1>
        <p class="text-center mb-5 color-black">Discover how we‘re accelerating digital transformation through our global
          alliances</p>
        <div class="text-center">
          <a href="contact" class="btn-k btn-k_outline d-inline-block btn-k_outline-white">Get a free quote</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  function active($currect_page){
  $url_array = explode('/', $_SERVER['REQUEST_URI']);
  $url = end($url_array);
  if($currect_page == $url){
  echo 'active';
  }
  }
?>

<?php include 'includes/footer.php';?>