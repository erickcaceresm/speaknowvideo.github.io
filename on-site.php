<?php include 'includes/header.php';?>

<section class="banner-commun banner_on-site">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">On-Site Interpretation</h1>
  </div>
</section>

<section class="section-commun section-black-gradient">
  <div class="container">
    <h1 class="title-primary text-center color-white">Completely by Professionals</h1>
    <hr class="border-line mx-auto mb-4">
    <p class="color-white mb-5">We provide trained and certified interpreters for medical appointments, court cases, insurance statements, wiretaps, social service visits, mental health assessments, criminal line-ups, industrial site tours. These are just some of the many types of requests we have provided onsite interpreters for. We match interpreter specialization and certification with the customer industry. If you are a healthcare provider making an interpreter request you will only be scheduled with a certified medical interpreter, etc.</p>

    <div class="section-black-two mb-4">
      <div class="flex-diagonal">
        <div class="flex-diagonal_text">
          <div>
            <h1 class="title-primary color-white">Reminder Email</h1>
            <p class="color-white">In order to reduce clients no-show and provide specific instructions we make reminder email 24-48 hrs before each scheduled appointment. We verify that the client understands the time and location of the appointment and that an interpreter will be present. If we learn that a client can’t make it to a scheduled appointment we immediately notify our customer.</p>
          </div>
        </div>
        <picture class="flex-diagonal_picture">
          <img src="./assets/images/onsite-mail.jpg" alt="">
        </picture>
      </div>
    </div>

    <div class="section-black-two mb-4">
      <div class="flex-diagonal flex-diagonal_direction">
        <picture class="flex-diagonal_picture flex-diagonal_picture-two">
          <img src="./assets/images/onsite-service.jpg" alt="">
        </picture>
        <div class="flex-diagonal_text flex-diagonal_text-two">
          <div>
            <h1 class="title-primary color-white">Service Availability</h1>
            <p class="color-white">Our onsite interpreters are available 24/7/365. You can book interpreters by phone or online. We appreciate your advance requests and usually we have an interpreter at your location.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="section-black-two mb-4">
      <div class="flex-diagonal">
        <div class="flex-diagonal_text">
          <div>
            <h1 class="title-primary color-white">Specific Interpreter Request</h1>
            <p class="color-white">If you have a particular Interpreter you would like matched with a client, please include his or her name or interpreter ID number when placing your request. We will attempt to match that interpreter to your assignment first. You will be notified if your requested interpreter is not available.</p>
          </div>
        </div>
        <picture class="flex-diagonal_picture">
          <img src="./assets/images/onsite-specific.jpg" alt="">
        </picture>
      </div>
    </div>

    <div class="section-black-two mb-4">
      <div class="flex-diagonal flex-diagonal_direction">
        <picture class="flex-diagonal_picture flex-diagonal_picture-two">
          <img src="./assets/images/onsite-interpreter.jpg" alt="">
        </picture>
        <div class="flex-diagonal_text flex-diagonal_text-two">
          <div>
            <h1 class="title-primary color-white">Interpreter Confirmation</h1>
            <p class="color-white">If you have a particular Interpreter you would like matched with a client, please include his or her name or interpreter ID number when placing your request. We will attempt to match that interpreter to your assignment first. You will be notified if your requested interpreter is not available.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="section-black-two mb-4">
      <div class="flex-diagonal">
        <div class="flex-diagonal_text">
          <div>
            <h1 class="title-primary color-white">Rescheduling Appointments</h1>
            <p class="color-white">If required, we help our customers to schedule and/or re-schedule appointments with non-English speaking clients. Many of our customers use our third party calling capabilities. Once the desired party is reached we make a call back to the customer and conference in all parties on the line, including our interpreter.</p>
          </div>
        </div>
        <picture class="flex-diagonal_picture">
          <img src="./assets/images/onsite-rescheduling.jpg" alt="">
        </picture>
      </div>
    </div>

  </div>
</section>

<section class="section-commun bg-black">
  <div class="container">
    <h1 class="title-primary text-center color-white mb-5">Policies and Procedures for On-site Interpreters</h1>
    <ul class="ul-onsite">
      <li>Provide the highest quality of service possible. Interpreters shall always thoroughly and faithfully render the source-language message, omitting or adding nothing to the linguistic variations in both languages, conserving the tone.</li>
      <li>Be culturally sensitive. Interpreters shall be culturally competent, respectful to the individual they are serving.</li>
      <li>Maintain proficiency. Interpreters shall meet the minimum proficiency standards set by Speak Now Video and client by passing the required certification, examination, screening evaluation, and specially-specific examinations.</li>
      <li>Certification/experience declarations. Interpreters shall accurately and completely represent their certifications, training and experience.</li>
      <li>Professional Detachment. Maintain a degree of professional detachment from those for whom they are interpreting.</li>
      <li>Solicitation: Never accept or solicit any additional money or other considerations or favors for services reimbursed by client.</li>
      <li>Confidentiality: Maintain customer and it’s clients confidentiality. Interpreters shall not divulge matters in which they have been engaged.</li>
      <li>Professional demeanor. Interpreters shall be punctual, prepared, and dressed in a manner appropriate.</li>
      <li>Non- discriminatory conduct: Interpreters shall carry out their professional duties without discrimination.</li>
      <li>Violations of Policies and Procedures: Interpreters shall immediately withdraw from encounters they perceive as violations of these policies and reports to Speak Now Video any violation or any request to violate policies and provisions.</li>
      <li>Interpreters shall assess their ability to interpret at all times. Should they have any reservations about their competency they must immediately inform the parties and withdraw from the assignment.</li>
    </ul>
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