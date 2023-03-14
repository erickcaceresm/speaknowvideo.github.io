<?php include 'includes/header.php';?>

<section class="banner-commun banner_jobs">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Interpreters</h1>
  </div>
</section>

<section class="section-commun section-black-gradient">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="careers" class="color-white">Careers</a></li>
        <li class="breadcrumb-item color-white" aria-current="page">Interpreters</li>
      </ol>
    </nav>
    <div class="form-content aos-init aos-animate" data-aos="zoom-out">
      <div class="row">
        <div class="col-md-6">
          <div class="form-box form-box_text">
            <h2 class="title-secondary">Requirements</h2>
            <ul class="ul-document-translation">
              <li>With previous experience in the interpreting industry</li>
              <li>Spanish, Cantonese, Russian, Vietnamese, Ukrainian</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-box">
            <h2 class="title-secondary">Apply Here</h2>
            <form method="post" action="email/send-mail.php" class="row g-3 needs-validation">
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
                <button class="btn-k btn-k_outline btn-k_form" type="submit">Send
              </button></div>
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