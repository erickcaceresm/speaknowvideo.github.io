<?php include 'includes/header.php';?>

<section class="banner-commun banner_government">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Government</h1>
  </div>
</section>

<section class="section-commun section-black-two">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="pad-right-5">
          <img src="./assets/images/government-box.png">
        </div>
      </div>
      <div class="col-md-6">
       <div class="flex-commun">
         <div>
          <p class="color-white mb-4">Government clients, whether federal, state, municipal or otherwise, are always faced with challenges and opportunities when it comes to providing interpretation and translation services.</p>
          <p class="color-white mb-4">Speak Now Video's capabilities include the translation of written, electronic, and multimedia material from English to any foreign languages, as well as the interpretation of oral communication to and from English to any foreign languages. Interpretation services are offered for conferences for hearings in federal courts, immigration services or any other legal matter or trial.</p>
          <p class="color-white">Our interpreters comply with certifications and training that focus on the issue of privacy and confidentiality of our clients.</p>
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
        <h1 class="title-primary color-white">Speak Now Video Turns Linguistic and Cultural Challenges into Opportunities</h1>
        <hr class="border-line mb-4">
        <p class="color-white">Speak Now Video provide healthcare organizations and telehealth providers with solutions to easily integrate certified medical interpreters into any telehealth session, 24 hours a day, 7 days a week, 365 days a year, covering more than 300 spoken languages and American Sign Language.</p>
        <a href="contact" class="btn-k btn-k_outline btn-k_outline-primary btn-banner  mt-5">speak with us</a>
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