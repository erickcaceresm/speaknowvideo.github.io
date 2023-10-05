<?php include 'includes/header.php';?>

<section class="banner-commun banner_contact">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Get Started</h1>
  </div>
</section>

<section class="section-commun section-black-two">
  <div class="container">
    <h1 class="title-primary text-center color-white">Get Started</h1>
    <hr class="border-line mx-auto mb-4">

    <div class="card-k_grid card-k_grid-contact">
        <div class="card-k">
          <div class="card-k_icon">
          <i class="bi bi-telephone"></i>
          </div>
          <h5 class="card-k_text mb-4">Main Line</h5>
          <p>+1 (888) 861-8484</p>
        </div>
        <div class="card-k">
          <div class="card-k_icon">
          <i class="bi bi-envelope"></i>
          </div>
          <h5 class="card-k_text mb-4">Email</h5>
          <p>sales@speaknowvideo.com</p>
        </div>
      </div>
  <!-- </div> -->
<!-- </section> -->

<!-- <section class="section-commun section-black-gradient"> -->
  <!-- <div class="container"> -->
    <div class="form-content aos-init aos-animate" data-aos="zoom-out">
      <div class="row">
        <div class="col-md-6">
          <div class="form-box form-box_text">
            <h2 class="title-secondary">Get a Free Quote for Speak Now Video</h2>
            <p>If you want more information, do not hesitate to contact us, one of our advisors will gladly assist
              you.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-box">
            <form method="post" action="email/send-mail.php" class="row g-3 needs-validation">
              <div class="col-12">
                <select class="form-select form-select-k" name="services" id="services" required="">
                  <option selected="" value="">Interested in...</option>
                  <option value="Premium Platform">Premium Platform</option>
                  <option value="Over The Phone Interpreting">Over The Phone Interpreting</option>
                  <option value="Video Remote Interpreting">Video Remote Interpreting</option>
                  <option value="Telehealth">Telehealth</option>
                  <option value="American Sign Language">American Sign Language</option>
                  <option value="On-Site Interpretation">On-Site Interpretation</option>
                  <option value="Document Translation">Document Translation</option>
                  <option value="Multilingual Contact Services">Multilingual Contact Services</option>
                </select>
              </div>
              <div class="col-12">
                <input type="text" class="form-control form-control-k" name="firstname" id="firstname" placeholder="First Name" required="">
              </div>
              <div class="col-12">
                <input type="text" class="form-control form-control-k" name="lastname" id="lastname" placeholder="Last Name" required="">
              </div>
              <div class="col-12">
                <input type="email" class="form-control form-control-k" name="email" id="email" placeholder="Email" required="">
              </div>
              <div class="col-md-12">
                <input type="number" class="form-control form-control-k" name="phone" id="phone" placeholder="Phone Number" required="">
              </div>
              <div class="col-md-12">
                <input type="text" class="form-control form-control-k" name="country" id="country" placeholder="Country" required="">
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                  <label class="form-check-label form-check-label-k" for="invalidCheck">
                    I agree with Speak Now Video's stated <a href="privacy-policy">Privacy Policy</a> and <a href="terms-and-conditions">Terms &amp;
                      Conditions</a>
                  </label>
                </div>
              </div>
              <div class="col-12">
                <!-- <button class="btn btn-k_form" type="submit">Send</button> -->
                <button class="btn-k btn-k_outline btn-k_form" type="submit">Send</butt>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-commun section-black-gradient">
  <div class="container">
      <h1 class="title-primary text-center color-white">We are Here to Help</h1>
      <hr class="border-line mx-auto mb-4">
    <div class="mt-5">
      <div class="row">
        <div class="col-12">
        <div class="flex-contact">
        <i class="bi bi-geo-alt"></i>
            <p>601 W Broadway, Vancouver, BC V5Z 4C2, Canadá</p>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5207.3495440774095!2d-123.11800000000001!3d49.26361!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673dd22dd5ba9%3A0x4f4adcf3ec8a08dc!2s601%20W%20Broadway%20%23400%2C%20Vancouver%2C%20BC%20V5Z%204C2%2C%20Canad%C3%A1!5e0!3m2!1ses-419!2sus!4v1645937657795!5m2!1ses-419!2sus" frameborder="0" width="100%" height="450px"></iframe>
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