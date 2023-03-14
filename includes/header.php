<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./assets/images/iconos/favicon.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <title>SpeakNowVideo</title>
</head>

<body>
  <header id="headerk" class="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-k">
        <div class="container-fluid">
          <a class="navbar-brand" href="index">
            <img src="./assets/images/iconos/logo.png" class="img-logo" alt="logo speak now video">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list color-white"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav navbar-nav-k">
              <li class="nav-item">
                <a class="nav-link nav-link-k <?php active('index');?>" href="index">Home</a>
              </li>
              <li class="nav-item dropdown">
                <!-- <a class="nav-link nav-link-k dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">Services</a> -->
                <a class="nav-link nav-link-k dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                <ul class="dropdown-menu dropdown-menu-k">
                  <a class="dropdown-item <?php active('services');?>" href="services">about services</a>
                  <a class="dropdown-item <?php active('video-remote');?>" href="video-remote">video remote interpreting</a>
                  <a class="dropdown-item <?php active('over-the-phone');?>" href="over-the-phone">over the phone interpreting</a>
                  <a class="dropdown-item <?php active('telehealth');?>" href="telehealth">telehealth</a>
                  <a class="dropdown-item <?php active('american-sign');?>" href="american-sign">american sign language</a>
                  <a class="dropdown-item <?php active('on-site');?>" href="on-site">on-site interpretation</a>
                  <a class="dropdown-item <?php active('document-translation');?>" href="document-translation">document translation</a>
                  <a class="dropdown-item <?php active('multilingual');?>" href="multilingual">multilingual contact services</a>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link nav-link-k dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">Industries</a>
                <ul class="dropdown-menu dropdown-menu-k" aria-labelledby="navbarScrollingDropdown">
                  <a class="dropdown-item <?php active('industries');?>" href="industries">about industries</a>
                  <a class="dropdown-item <?php active('healthcare');?>" href="healthcare">healthcare</a>
                  <a class="dropdown-item <?php active('insurance');?>" href="insurance">insurance</a>
                  <a class="dropdown-item <?php active('emergency');?>" href="emergency">911 emergency services</a>
                  <a class="dropdown-item <?php active('government');?>" href="government">government</a>
                  <a class="dropdown-item <?php active('financial');?>" href="financial">financial services</a>
                  <a class="dropdown-item <?php active('education');?>" href="education">education interpretation</a>
                  <a class="dropdown-item <?php active('legalandjudicial');?>" href="legalandjudicial">legal and judicial</a>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-link-k <?php active('premium-platform');?>" href="premium-platform">Premium Platform</a>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link nav-link-k" href="about-us">About Us</a> -->
                <a class="nav-link nav-link-k nav-link-k <?php active('about-us');?>" href="about-us">About Us</a>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link nav-link-k" href="contact">Get Started</a> -->
                <a class="nav-link nav-link-k nav-link-k <?php active('contact');?>" href="contact">Get Started</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link nav-link-k dropdown-toggle" href="#" id="navbarScrollingDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">More</a>
                <ul class="dropdown-menu dropdown-menu-k" aria-labelledby="navbarScrollingDropdown2">
                  <li><a class="dropdown-item <?php active('careers');?>" href="careers">Careers</a></li>
                  <li><a class="dropdown-item <?php active('blog');?>" href="blog">Blog</a></li>
                  <li><a class="dropdown-item <?php active('code-ethics');?>" href="code-ethics">Codes Of Ethics</a></li>
                  <li><a class="dropdown-item <?php active('hippa');?>" href="hippa">HIPPA Compliant Interpreters And Translation Services</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link nav-link-k" href="faq">FAQS</a> -->
                <a class="nav-link nav-link-k nav-link-k <?php active('faq');?>" href="faq">FAQS</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>