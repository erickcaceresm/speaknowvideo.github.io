<?php include 'includes/header.php';?>

<section class="banner-commun banner_video">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Video Remote Interpreting</h1>
  </div>
</section>

<section class="section-commun bg-blackk bg-black-gradient">
  <div class="container">
    <h1 class="title-primary text-center color-white">Remote Video Solutions</h1>
    <hr class="border-line mx-auto mb-4">
    <p class="text-copy text-center mb-4 color-white block-808">Is a video-telecommunication service that uses devices such as web cameras or videophones to provide sign language or spoken language interpreting services. This is done throug a remote or offsite interpreter, to communicate with people with whom there is a communication barrier.</p>
    <p class="text-copy text-center mb-4 color-white block-808">Speak Now Video complies with all the necessary security protocols to offer fluid and stable services with the aim of generating satisfactory, safe, transparent and reliable service.</p>
    <p class="text-copy text-center color-white block-808">At Speak Now Video we take the time required to ensure your data security and confidentiality at all times.</p>
    <picture class="pictue-videoremote">
      <img src="./assets/images/videoremote-box.png">
    </picture>

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