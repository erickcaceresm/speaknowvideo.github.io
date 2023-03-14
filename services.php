<?php include 'includes/header.php';?>

<section class="banner-commun banner_services">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white"  data-aos="fade-up">Language Service Solutions Provider</h1>
  </div>
</section>

<section class="section-commun bg-black">
  <div class="container">
    <h1 class="title-primary text-center color-white">About Services</h1>
    <hr class="border-line mx-auto">
    <p class="text-copy color-white text-center mb-5">Speak Now Video is the most complete interpretation software platform available today for growing Language Service Organizations and Agencies of any size. Speak Now Video software is built to streamline all areas of your interpretation demands to support and streamline your internal organizational workflow needs and to help you drive a better operational process. We specialize in both companies and individuals to cover all the needs of our different clients, thus meeting market expectations.</p>

    <div class="responsivelist">
      <div class="col-md-4 p-4 w-100-col">
        <div class="ImgBaseTip">
          <div class="DivBase glows">
            <i class="fa fa-line-chart faicon"></i>
            <p class="textfa">Our platform is available today for growing Language Service Organizations and Agencies of any size.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 p-4 w-100-col">
        <div class="ImgBaseTip">
          <div class="DivBase glows">
            <i class="fa fa-cloud faicon"></i>
            <p class="textfa">The platform is a secure, scalable cloud-based system built to deliver all your interpretation requests instantly.  </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 p-4 w-100-col">
        <div class="ImgBaseTip">
          <div class="DivBase glows">
            <i class="fa fa-usd faicon"></i>
            <p class="textfa">We help you deliver all your key high-value multi-linguistic support services while lowering your overall technology overhead costs.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 m-5-col p-4 w-100-col">
        <div class="ImgBaseTip">
          <div class="DivBase glows">
            <i class="fa fa-heartbeat faicon"></i>
            <p class="textfa">Speak Now Video, easily provides integrate certified medical interpreters 24/7/365 days a year.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 m-5-col p-4 w-100-col">
        <div class="ImgBaseTip">
          <div class="DivBase glows">
            <i class="fa fa-language faicon"></i>
            <p class="textfa">Speak Now Video covers more than 350 spoken languages and American sign Language.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="row m-0">
    <div class="col-md-6 p-0">
      <div class="box-bg-6">
        <div>
          <h1 class="title-primary color-white">Language Service Company</h1>
          <hr class="border-line mb-4">
          <p class="color-white">Speak Now Video platform is a modern, secure, scalable cloud-based system built to deliver all your interpretation requests instantly. Speak Now Video software is built to streamline all areas of your interpretation demands to support and streamline your internal organizational workflow needs and to help you drive a better operational process.</p>
          <p class="color-white">Speak Now Video helps you deliver all your key high-value multi-linguistic support services while lowering your overall technology overhead costs.</p>
          <p class="color-white">With us you have the support of our entire professional team, to provide customer service and high quality service 24/7/365 days a year with a catalog of benefits available to adjust to any volume of business.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 p-0">
      <div>
      <img src="./assets/images/services-langman.jpg">
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