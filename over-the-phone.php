<?php include 'includes/header.php';?>

<section class="banner-commun banner_overthephone">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Over the Phone Interpreting</h1>
  </div>
</section>

<section class="section-commun bg-black">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="box-overthephone">
          <div>
            <h1 class="title-primary color-white">The Most Advanced, Most Flexible Telephonic Interpreting System Available Today.</h1>
            <hr class="border-line mb-4">
            <p class="text-copy color-white">Speak Now Video knows the needs of its clients, which is why we offer a large catalog of service options and among them is Over The Phone Interpretation which, with interpreting services over the phone, can break any language barrier you may face and communicate with your Limited English Proficient (LEP) customers just as you would with customers who are native English speakers. This in order for our clients to optimize their process of approaching clients from all over the world.</p>
            <p class="text-copy color-white">At Speak Now Video, we have professional interpreters in over 350 languages available who can connect with you in just a few seconds, all qualified and certified in medical health.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <picture class="picture-overthephone">
          <img src="./assets/images/overthephone-box.png">
        </picture>
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