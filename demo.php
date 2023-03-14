<?php include 'includes/header.php';?>

<section class="banner-commun banner_demo">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Request a Free Demo</h1>
  </div>
</section>

<section class="section-commun section-black-gradient">
  <h1 class="title-primary color-white text-center">Fill in the Form Below and Get a Free Demo</h1>
  <hr class="border-line mx-auto mb-4">

  <div>
    <div class="form-content aos-init aos-animate" data-aos="zoom-out">
      <div class="row">
        <div class="col-md-6">
          <div class="form-box form-box_text">
            <h2 class="title-secondary">Watch a Free Demo</h2>
            <p>Fill in the form below and watch a free demo!</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-box">
            <form method="post" action="email/send-mail.php" class="row g-3 needs-validation">
              <div class="col-12">
                <select class="form-select form-select-k" name="services" id="services" required="">
                  <option selected="" value="">Interested in...</option>
                  <option value="Education">Education</option>
                  <option value="Government">Government</option>
                  <option value="Healthcare">Healthcare</option>
                  <option value="Language Service Company">Language Service Company</option>
                  <option value="Legal and Judicial">Legal and Judicial</option>
                  <option value="Manufacturing">Manufacturing</option>
                  <option value="Not for Profit">Not for Profit</option>
                  <option value="TeleHealth Provider">TeleHealth Provider</option>
                  <option value="Interpreter">Interpreter</option>
                  <option value="Business">Business</option>
                  <option value="Other">Other</option>
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