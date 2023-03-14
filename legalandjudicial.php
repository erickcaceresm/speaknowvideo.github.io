<?php include 'includes/header.php';?>

<section class="banner-commun banner_legalandjudicial">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Legal and Judicial</h1>
  </div>
</section>

<section class="section-commun section-black-gradient">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="flex-commun">
          <div class="pad-right-5">
            <img src="./assets/images/legal-box.jpg">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h1 class="title-primary color-white">Start Communicating Better with the Speak Now Video Platform</h1>
        <hr class="border-line mb-4">
        <p class="color-white mb-4">With Speak Now Video, you can access highly qualified legal interpreters at the touch of a button. Whether you connect with an interpreter through VRI or OPI, our interpreting platform ensures that no legal case is abandoned due to a lack of communication tools.</p>
        <p class="color-white">The fact that there is interpretation in the judicial and legal area is very important, since there can be many complications due to poor communication. It is very common that without the help of an interpreter there are errors in communication in a courtroom, in legal hearings. Without the interpreter in the legal area, cases can be lost, postponing what causes a loss for those involved.</p>
      </div>
    </div>
  </div>
</section>

<section class="section-commun section-legal">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card-document">
          <div class="card-document_number">
            <i class="bi bi-file-earmark-text"></i>
          </div>
          <p class="card-document_text">Legal Document Translation</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-document">
          <div class="card-document_number">
            <i class="bi bi-receipt-cutoff"></i>
          </div>
          <p class="card-document_text">Legal Interpretation Services</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-document">
          <div class="card-document_number">
            <i class="bi bi-laptop"></i>
          </div>
          <p class="card-document_text">On-site Staffing for Legal Matters</p>
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