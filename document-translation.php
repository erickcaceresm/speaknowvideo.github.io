<?php include 'includes/header.php';?>

<section class="banner-commun banner_document-translation">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Document Translation</h1>
  </div>
</section>

<section class="section-commun section-black-two pb-0">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="pad-right-5">
          <img src="./assets/images/document-translation-box.png">
        </div>
      </div>
      <div class="col-md-6">
        <div>
          <h1 class="title-primary color-white">Translation Services for All Industries</h1>
          <hr class="border-line mb-4">
          <p class="color-white subtitle-secondary">Translate any type of written content:</p>
          <ul class="ul-document-translation">
            <li><strong>Document translation:</strong> letters, forms, emails, and other correspondence.</li>
            <li><strong>Complex documentation:</strong> technical manuals, online content, CMS output, marketing collateral, and HR policies and procedures.</li>
            <li><strong>Training materials:</strong> tutorials, templates, eLearning applications, ERP.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-commun bg-black">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="flex-commun">
          <div>
            <h1 class="title-primary color-white">Why Choose Us</h1>
            <hr class="border-line mb-4">
            <div class="mt-5">
              <div class="row">
                <div class="col-md-6">
                  <div class="card-item">
                    <figure class="card-item_figure">
                    <i class="bi bi-patch-check"></i>
                    </figure>
                    <div>
                      <h2 class="card-item_title">Garanteed Quality</h2>
                      <p class="card-item_copy">We support the world’s best translators with advanced quality assurance Processes.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-item">
                    <figure class="card-item_figure">
                    <i class="bi bi-graph-up-arrow"></i>
                    </figure>
                    <div>
                      <h2 class="card-item_title">On-Time Delivery</h2>
                      <p class="card-item_copy">We offer the best performance levels in the industry, with an optimized Workflow that guarantees over 95% of deliveries on time.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p class="color-white">if you need to translate any type of document, don't hesitate to contact us. We are sure that our document translation service will meet all your expectations and help you communicate effectively in any language.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <picture class="picture-document-translation">
          <img src="./assets/images/document-translation-box2.png">
        </picture>
      </div>
    </div>
  </div>
</section>

<section class="section-commun section-document-translation">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card-document">
          <div class="card-document_number">+350</div>
          <p class="card-document_text">Languages Available for Interpretation Services On-Demand</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-document">
          <div class="card-document_number">99%</div>
          <p class="card-document_text">Translation Accuracy</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-document">
          <div class="card-document_number">99%</div>
          <p class="card-document_text">On-time Delivery</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-document">
          <div class="card-document_number">100%</div>
          <p class="card-document_text">Content Quality Assured</p>
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