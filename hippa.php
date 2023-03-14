<?php include 'includes/header.php';?>

<section class="banner-commun banner_hippa">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">HIPPA Compliant Interpreters and Translation Services</h1>
  </div>
</section>

<section class="section-commun section-black-two">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="pad-right-5">
          <p class="color-white">All of ours Interpreters are certified by reputable associations, such as:</p>
          <p class="color-white">The Health Insurance Portability and Accountability Act of 1996, commonly known as HIPAA, is a series of regulatory standards that outline the lawful use and disclosure of Protected Health Information (PHI). HIPAA compliance is regulated by the Department of Health and Human Services (HHS) and enforced by the Office for Civil Rights (OCR).</p>
          <p class="color-white">It is a law that protects patient medical information and privacy. It applies to health care providers, health insurance companies, and third-party entities that process health information. But it also applies to individuals who work closely with health care providers and handle patient health information, including lawyers, consultants, and medical interpreters.</p>
          <p class="color-white">Covered entity healthcare providers may need to use HIPAA interpreters to communicate with a patient. Covered entities may use an interpreter to communicate with a patient (i.e., because the patient speaks another language, is deaf, or is hard of hearing) – without the need for the individual to authorize use or disclosure of PHI – provided certain conditions are met.</p>
          <p class="color-white">Protected Health Information (PHI) is any demographic information that can be used to identify a patient or client of a HIPAA-beholden entity. Common examples of PHI include names, addresses, phone numbers, social security numbers, medical records, financial information, and full facial photos to name a few.</p>
          <p class="color-white">PHI transmitted, stored, or accessed electronically also falls under HIPAA regulatory standards and is known as Electronic Protected Health Information, or ePHI. ePHI is regulated by the HIPAA Security Rule, which was an addendum to HIPAA regulation enacted to account for changes in medical technology.</p>
        </div>
      </div>
      <div class="col-md-6">
        <!-- <img src="./assets/images/hipaa.png"> -->
        <div class="flex-commun">
          <img src="./assets/images/hipaa-box.png">
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