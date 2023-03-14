<?php include 'includes/header.php';?>

<section class="banner-commun banner_financial">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Financial Services</h1>
  </div>
</section>

<section class="section-commun section-black-gradient">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="flex-commun">
          <div class="pad-right-5">
            <h1 class="title-primary color-white">Delivering More than Numbers to the Financial Market</h1>
            <hr class="border-line mb-4">
            <p class="color-white mb-4">Financial services are a specialized industry, with very little room For errors. Our control processes and our commitment to quality Assurance is very successful.</p>
            <p class="color-white">Like our intensive Quality Assurance plans, Speak Now Video applies strict training and certification for all our interpreters and translators. These requirements promote the highest levels of professionalism and confidentiality. Additionally, all our data is stored in a professional-grade data center. Regardless of the setting, your interpretation and translation services will not be affected. What is important to you, is important to us.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <img src="./assets/images/financial-box.jpg">
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