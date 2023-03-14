<?php include 'includes/header.php';?>

<section class="banner-commun banner_blog">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Blog</h1>
  </div>
</section>

<section class="section-commun section-black-two">
  <div class="container">
    <div class="row">
      <div class="col-md-4 me-4">
        <div class="card-blog">
          <figure class="card-blog_figure">
            <img src="./assets/images/blog-medical.jpg">
          </figure>
          <h3 class="card-blog_title">The Importance of Language Services in the Healthcare Industry</h3>
          <p class="card-blog_text">Communication with the patient: on many occasions, interpreting is performed when
            the patient has suffered a mishap while in another country. In these cases, the interpreter has an
            essential role that goes beyond the actual...</p>
          <a href="blog-medical" class="card-blog_link">read more</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-blog">
          <figure class="card-blog_figure">
            <img src="./assets/images/blog-white.jpg">
          </figure>
          <h3 class="card-blog_title">What is withe label and how can it help your Interpreting Agency?</h3>
          <p class="card-blog_text">Do you know what White Label is, one of the most used expressions in the business
            world?
            If you don't know it, we explain it to you now! White Label refers to the possibility of offering
            additional technologies and resources...
          </p>
          <a href="blog-white" class="card-blog_link">read more</a>
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