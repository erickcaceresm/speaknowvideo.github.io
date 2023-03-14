<?php include 'includes/header.php';?>

<section class="banner-commun banner_careers">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Careers</h1>
  </div>
</section>

<section class="section-commun section-black-two">
  <div class="container">
    <h1 class="title-primary color-white">Current Job Openings</h1>
    <hr class="border-line mb-4">

    <div class="">
      <div class="row">
        <div class="col-md-4">
          <div class="card-career">
            <div class="card-career_header">
              <h2>Interpreters</h2>
              <h3>Requirements:</h3>
            </div>
            <ul class="card-career_body">
              <li>With previous experience in the interpreting industry</li>
              <li>Spanish, Cantonese, Russian, Vietnamese, Ukrainian</li>
            </ul>
            <div class="card-career_footer">
              <p>Modalidad: <span>Remote</span></p>
            </div>
            <div class="card-career_action">
              <a href="interpreters" class="btn-k btn-k_outline btn-k_form text-center">Apply Here!</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        <div class="card-career">
            <div class="card-career_header">
              <h2>Quality Assurance - QA</h2>
              <h3>Requirements:</h3>
            </div>
            <ul class="card-career_body">
              <li> Minimum 4 years experience in the interpreting industry</li>
            </ul>
            <div class="card-career_footer">
              <p>Modalidad: <span>Remote</span></p>
            </div>
            <div class="card-career_action">
              <a href="quality-assurance" class="btn-k btn-k_outline btn-k_form text-center">Apply Here!</a>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-4">
          <div class="card-career">
            <div class="card-career_header">
              <h2>Interpreters</h2>
              <h3>Requirements:</h3>
            </div>
            <ul class="card-career_body">
              <li>With previous experience in the interpreting industry</li>
              <li>Spanish, Cantonese, Russian, Vietnamese, Ukrainian</li>
            </ul>
            <div class="card-career_footer">
              <p>Modalidad: <span>Remote</span></p>
            </div>
            <div class="card-career_action">
              <a href="#" class="btn-k btn-k_outline btn-k_form text-center">Apply Here!</a>
            </div>
          </div>
        </div> -->
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