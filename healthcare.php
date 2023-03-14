<?php include 'includes/header.php';?>

<section class="banner-commun banner_healthcare">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Healthcare</h1>
  </div>
</section>

<section class="section-commun section-black-two">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="flex-commun">
          <div class="pad-right-5">
            <h1 class="title-primary color-white">Provide Critical Language Access, Wherever and Whenever it is Needed</h1>
            <hr class="border-line mb-4">
            <p class="color-white">When you partner with Speak Now Video you never have to worry about language being a barrier between the doctor and the patient. All our interpreters have specialized training in medical Interpretation.</p>
            <p class="color-white">For patients to receive the best possible care, they need to understand all aspects of the medical process: consent forms, postoperative instructions, information on their medication dosing and prescription labels. Our medical translation solutions will help you communicate with your patients in writing, done by native linguists with specific experience in the health field.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <img src="./assets/images/healthcare-box.png">
      </div>
    </div>
  </div>
</section>

<section class="section-commun section-healthcare-experiencies">
  <div class="container">
    <h1 class="title-primary color-white text-center">Deliver Exceptional Patient Experiences</h1>
    <hr class="border-line mx-auto mb-4">

    <div class="card-k_grid">
        <div class="card-k">
          <div class="card-k_icon">
          <i class="bi bi-heart-pulse"></i>
          </div>
          <span class="card-k_text">Provide high quality care</span>
        </div>
        <div class="card-k">
          <div class="card-k_icon">
          <i class="bi bi-people"></i>
          </div>
          <span class="card-k_text">Support your whole team</span>
        </div>
        <div class="card-k">
          <div class="card-k_icon">
          <i class="bi bi-bank"></i>
          </div>
          <span class="card-k_text">Stay HIPPA and ACA compliant</span>
        </div>
      </div>
  </div>
</section>


<section class="section-commun section-black-two">
  <div class="container">
    <div>
      <h1 class="title-primary color-white text-center">What are the Advantages of Having a Certified Language Medical Interpreter Available to Patients</h1>
      <hr class="border-line mx-auto mb-4">

      <div class="card-k_grid card-k_grid-alternative">
        <div class="card-k card-k_alternative">
          <div class="card-k_icon">
          <i class="bi bi-wechat"></i>
          </div>
          <span class="card-k_text">Improved Communication</span>
        </div>
        <div class="card-k card-k_alternative">
          <div class="card-k_icon">
          <i class="bi bi-shield-shaded"></i>
          </div>
          <span class="card-k_text">Incresed Trust and Confidence</span>
        </div>
        <div class="card-k card-k_alternative">
          <div class="card-k_icon">
          <i class="bi bi-journal-medical"></i>
          </div>
          <span class="card-k_text">Better Health Outcomes</span>
        </div>
        <div class="card-k card-k_alternative">
          <div class="card-k_icon">
          <i class="bi bi-wallet2"></i>
          </div>
          <span class="card-k_text">Reduced Healthcare Costs</span>
        </div>
        <div class="card-k card-k_alternative">
          <div class="card-k_icon">
          <i class="bi bi-briefcase"></i>
          </div>
          <span class="card-k_text">Legal and Ethics Considerations</span>
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