<?php include 'includes/header.php';?>

<section class="banner-commun banner_multilingual">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Multilingual Contact Services</h1>
  </div>
</section>

<section class="section-commun bg-black-gradient">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="flex-commun">
          <div class="pad-right-5">
            <img src="./assets/images/multilingual-box.jpg">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h1 class="title-primary color-white">Are you Looking for a Good Contact Center Partner</h1>
        <hr class="border-line mb-4">
        <p class="color-white">that provides multilingual support, bilingual agents, and competitive rates for a wide range of services? Do you need support for rare languages? Are you in a highly regulated industry that requires in-country language compliance for your Call Center?</p>
        <p class="color-white">Speak Now Video worldwide contact centers provide multilingual support, bilingual agents, competitive rates, and exceptional quality. We’ll work with you to best support your business goals and ROI objectives with our wide array of customized BPO services in any Industries.</p>
        <p class="color-white">We are the partners you need, you will not have to worry about anything else, we provide you with everything you need, we also guarantee our services with our certificates, professional consultants, technological technicians, certified management and the best platform on the market.</p>
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