<?php include 'includes/header.php';?>

<section class="banner-commun banner_premium-platform">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Premium Platform</h1>
  </div>
</section>

<section class="section-commun section-black-gradient">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="flex-commun">
          <div class="pad-right-5">
            <h1 class="title-primary color-white">Do not Stay Without Knowing the New Tool that Speak Now Video Offers you.</h1>
            <hr class="border-line">
            <ul class="ul-onsite">
              <li>Reporting</li>
              <li>Only pay what you consume</li>
              <li>Adapt it to your company using the White label</li>
              <li>Have the best professionals in the interpretation area available</li>
            </ul>
            <a href="contact" class="btn-k btn-k_outline btn-k_outline-primary btn-banner  mt-5">contact us</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="videoIframe">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ZRJZyuFZAM4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-commun section-black-two">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="pad-right-5">
          <img src="./assets/images/premium-platform-box.png">
        </div>
      </div>
      <div class="col-md-6">
        <div class="flex-commun">
          <div>
          <h1 class="title-primary color-white">We are Ready with the Best Technology Services</h1>
            <hr class="border-line">
            <p class="color-white">Speak Now Video offers you a simple and intuitive interface, following all security protocols and end-to-end data encryption. This in order to protect all our customers with the best security. You are our priority, therefore:</p>
            <ul class="ul-onsite">
              <li>We give you the best customer service personalized attention adapted to your business or problem</li>
              <li>We have experience and the confidence to solve any predicament that arises.</li>
              <li>You can count always with the best professional interpreters in the international market</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-commun section-black-two section-platform">
  <div class="container">
    <h1 class="title-primary text-center color-white">Premium Platform</h1>
    <hr class="border-line mx-auto">
    <h2 class="subtitle-primary subtitle-solution">Benefits</h2>
    <div class="flex-card-k-premium">
      <div class="card-k-premium">
        <div class="card-k-premium_icon">
          <i class="bi bi-check-circle"></i>
        </div>
        <p>$0 long distance calls</p>
      </div>
      <div class="card-k-premium">
        <div class="card-k-premium_icon">
          <i class="bi bi-check-circle"></i>
        </div>
        <p>$0 extra charge per operator</p>
      </div>
      <div class="card-k-premium">
        <div class="card-k-premium_icon">
          <i class="bi bi-check-circle"></i>
        </div>
        <p>Pay what you consume</p>
      </div>
      <div class="card-k-premium">
        <div class="card-k-premium_icon">
          <i class="bi bi-check-circle"></i>
        </div>
        <p>Quickbooks</p>
      </div>
      <div class="card-k-premium">
        <div class="card-k-premium_icon">
          <i class="bi bi-check-circle"></i>
        </div>
        <p>Manage your Interpreters</p>
      </div>
      <div class="card-k-premium">
        <div class="card-k-premium_icon">
          <i class="bi bi-check-circle"></i>
        </div>
        <p>Dashboard</p>
      </div>
      <div class="card-k-premium">
        <div class="card-k-premium_icon">
          <i class="bi bi-check-circle"></i>
        </div>
        <p>White label</p>
      </div>
      <div class="card-k-premium">
        <div class="card-k-premium_icon">
          <i class="bi bi-check-circle"></i>
        </div>
        <p>Availability 24/7/365</p>
      </div>
      <div class="card-k-premium">
        <div class="card-k-premium_icon">
          <i class="bi bi-check-circle"></i>
        </div>
        <p>Dashboard reporting</p>
      </div>
      <div class="card-k-premium">
        <div class="card-k-premium_icon">
          <i class="bi bi-check-circle"></i>
        </div>
        <p>Assured quality and Confidentiality</p>
      </div>
      <div class="card-k-premium">
        <div class="card-k-premium_icon">
          <i class="bi bi-check-circle"></i>
        </div>
        <p>The best rates</p>
      </div>
      <div class="card-k-premium">
        <div class="card-k-premium_icon">
          <i class="bi bi-check-circle"></i>
        </div>
        <p>Free number</p>
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