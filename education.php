<?php include 'includes/header.php';?>

<section class="banner-commun banner_education">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Education Interpretation</h1>
  </div>
</section>

<section class="section-commun section-black-two">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div>
          <div class="pad-right-5">
            <h1 class="title-primary color-white">The Best and Fun Team of Professionals</h1>
            <hr class="border-line mb-4">
            <p class="color-white mb-4">Best Practice Recommendations, The United States and Canada have more than 200,000 school districts that need the help of professional interpreters and translators so that students and families with low English proficiency can communicate. This is used a lot for parent conferences, tutoring, etc. Due to the new digital era, schools had to adapt to digital tools, so education and communication moved to online platforms, and that is why Speak Now Video developed its own platform to guarantee service to all its customers no matter where they are. Additionally offering a high-end service and lower costs.</p>
            <p class="color-white mb-4">Providing a powerful tool to all educational entities internationally, ensuring low costs and additionally offering a high-end service.</p>
            <p class="color-white">At Speak Now Video we are here to support you and yours.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="flex-commun">
          <figure class="figure-education">
            <img src="./assets/images/education-box.jpg">
          </figure>
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