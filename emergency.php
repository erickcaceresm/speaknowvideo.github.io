
<?php include 'includes/header.php';?>

<section class="banner-commun banner_emergency">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">911 Emergency Services</h1>
  </div>
</section>

<section class="section-commun section-black-two">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="flex-commun">
          <div class="pad-right-5">
            <h1 class="title-primary color-white">Provision of an Exclusive Central for Emergency Care</h1>
            <hr class="border-line mb-4">
            <p class="color-white">At Speak Now Video we provide our 911 emergency service, we are available 24/7/365 days a year. We have certified and trained interpreters for all kinds of situations, who will provide confidentiality and a high quality of service.</p>
            <p class="color-white">We answer your call in just a few seconds.</p>
            <p class="color-white">Regardless of what language your callers speak, we connect you with professionally certified interpreters based in USA and Canada.</p>
            <p class="color-white">At Speak Now Video, the peace of mind of our clients is our priority, which is why we offer fast, optimal and efficient services.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <figure class="figure-emergency">
          <img src="./assets/images/emergency-911.png">
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