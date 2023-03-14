<?php include 'includes/header.php';?>

<section class="banner-commun banner_industries">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Industries We Serve</h1>
  </div>
</section>

<section class="section-commun section-industries-box">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="flex-commun">
          <div class="pad-right-5">
            <h1 class="title-primary color-white">Manage any Language Anywhere in the World</h1>
            <hr class="border-line mb-4">
            <p class="color-white">Speak Now Video is the simplest to use and more complete platform in the industry, integrating management and programming of interpreters. Industries and organizations of all sizes use the Speak Now Video platform to connect with their teams, unify their systems, and take their Business to the next level.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <figure class="m-0 flex-commun">
          <img src="./assets/images/industries-box.png">
        </figure>
      </div>
    </div>
  </div>
</section>

<section class="section-commun section-black-two">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="pad-right-5">
          <div class="bg-radial-gradient">
            <img src="./assets/images/industries-box2.png">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="flex-commun">
          <div>
            <h1 class="title-primary color-white">Our Main Clients</h1>
            <hr class="border-line mb-4">
            <p class="color-white">We specialized in Health Care, Government, Education, Legal and Judicial, Insurance, Financial Services, Manufacturing, Contact Centers, among others.</p>
            <p class="color-white">Offering the complete package in a platform with all the certified interpreters that you require in any specific area in the World so that you can feel free to do your job.</p>
            <p class="color-white">At Speak Now Video we are super committed to our clients so that their companies and organizations have exponential growth with our platform and thus business increases.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-black-gradient">
  <div class="flex-diagonal">
    <div class="flex-diagonal_text">
      <div class="">
        <h1 class="title-primary color-white">Fully Customizable to Work for You and Your Team</h1>
        <hr class="border-line mb-4">
        <p class="color-white">Speak Now Video was designed exclusively for customer satisfaction, both in terms of removing workload and of course saving a lot of money.</p>
        <p class="color-white">We specialized in personalizing our services according to our client needs, and if we still do not have a function that you need, with our team of geniuses in technology will make your suit made to measure.</p>
      </div>
    </div>
    <picture class="flex-diagonal_picture">
      <img src="./assets/images/industries-box3.jpg">
    </picture>
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