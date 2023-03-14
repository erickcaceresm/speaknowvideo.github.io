<?php include 'includes/header.php';?>

<section class="banner-commun banner_telehealth">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Telehealth</h1>
  </div>
</section>

<section class="section-commun section-black-two">
  <div class="container">
    <div class="row m-0">
      <div class="col-md-6 p-0">
        <div class="box-bg-6">
          <div>
            <h1 class="title-primary color-white">Our Easy-to-use Tool that Connects You to Professional Interpreters</h1>
            <hr class="border-line mb-4">
            <p class="text-white">Telehealth is an increasingly popular solution for receiving medical care quickly and conveniently. But what if we don't speak the language of the healthcare professional, we are having a video call or phone call with?</p>
            <p class="text-white">Speak Now Video is here to help!</p>
            <p class="text-white">Our interpreters not only facilitate communication, they can also improve the quality of the medical care you receive. By ensuring that you understand what is happening and that you can express your needs and concerns clearly, Telehealth interpreters allow you to make informed decisions about your health and give you the confidence that you are receiving the appropriate medical care.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 p-0">
        <img src="./assets/images/telehealth-box.png">
      </div>
    </div>
  </div>
</section>

<section class="section-black-gradient">
  <div class="flex-diagonal">
    <div class="flex-diagonal_text">
      <div class="">
        <h1 class="title-primary color-white">Speak Now Video Turns Linguistic and Cultural Challenges into Opportunities</h1>
        <hr class="border-line mb-4">
        <p class="color-white">Speak Now Video provide healthcare organizations and telehealth providers with solutions to easily integrate certified medical interpreters into any telehealth session, 24 hours a day, 7 days a week, 365 days a year, covering more than 300 spoken languages and American Sign Language.</p>
        <a href="contact" class="btn-k btn-k_outline btn-k_outline-primary btn-banner mt-5">speak with us</a>
      </div>
    </div>
    <picture class="flex-diagonal_picture">
      <img src="./assets/images/telehealth-speak-box.jpg">
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