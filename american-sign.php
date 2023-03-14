<?php include 'includes/header.php';?>

<section class="banner-commun banner_americansign">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">American Sign Language</h1>
  </div>
</section>

<section class="section-commun section-black-two pb-0">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="pad-right-5">
          <img src="./assets/images/americansign-box.png">
        </div>
      </div>
      <div class="col-md-6">
        <div>
          <h1 class="title-primary color-white">Your Brand Your Way</h1>
          <hr class="border-line mb-4">
          <p class="color-white">All our interpreters for American Sign Language (ASL) need to have various certifications through specific educational and testing processes. The main certification to ASL interpreters is the National Interpreter Certification (NIC). There is a rigorous National Interpreter Certification (NIC) test given jointly by the National Association of the Deaf and the Registry of Interpreters for the Deaf.</p>
          <p class="color-white">In addition to the NIC Certification, there are specific state and industry certifications that fall into these two main areas: Legal & Medical. The training for these is more advanced because of all the requirements that it needs. The testing & certification requirements differ from state to state and by industry.</p>
          <p class="color-white">At Speak Now Video, we care about uniting all parts of our society and providing them with an effective solution so that in any circumstance they can communicate a message or offer any type of linguistic and interpretation support to all our clients.</p>
        </div>
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