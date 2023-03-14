<?php include 'includes/header.php';?>

<section class="section-boxText section-black-two section-blog">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="blog">Blog</a></li>
        <li class="breadcrumb-item active" aria-current="page">Medical</li>
      </ol>
    </nav>
    <article class="article-blog">
      <h1 class="article-title">The Importance of Language Services in the Healthcare
          Industry</h1>
      <figure class="article-figure">
        <img src="./assets/images/blog-medical.jpg">
      </figure>
      <h3 class="article-subtitle">Why Interpreters are Important in the Healthcare Industry?</h3>
    </article>
    <div>
      <ul class="article-list ul-style">
        <li class="mb-4">Communication with the patient: on many occasions, interpreting is performed when the patient
          has
          suffered a mishap while in another country. In these cases, the interpreter has an essential role that goes
          beyond the actual transmission of the message. If the patient's state of health is delicate, the
          interpreter's role is even more complex.</li>
        <li class="mb-4">Communication with the family: as in the case of the patient, communication with the family
          is another
          very important point in which the interpreter may find him/herself. Here, too, there are situations in which
          the patient is in one place (his current residence, for example) and the family is in the country of origin.
          The interpreter also has the dual mission of conveying the message well and, in addition, being very aware
          of the family's concern and the need to be especially cautious with the interpretation.</li>
        <li class="mb-4">Communication with the medical team: before transmitting any message to the patient and
          family, the
          interpreter must know as much detail as possible about its content to be able to transmit it. Communication
          with the medical team is important to know all the fragments of the message, the specificities, and the
          medical language to be translated or the seriousness of the situation.</li>
        <li class="mb-4">Location of the professional at the time of interpretation: for all of the above situations,
          the location of the interpreting professional may be different. There will be times when the interpreter
          will be in the same location as the patient, family, or physicians, but in others, the interpreting will
          take place remotely, via telephone or video call. Each context means that the translation and interpreting
          professional must adapt and maintain the same level of quality of service given its importance.</li>
        <li class="mb-4">Interpreting in maximum emergencies: we have mentioned some complicated situations in which
          the interpreter may find him/herself in a service related to the health sector. To all of them we must add
          that, on many occasions, the translation or interpretation requires maximum speed since it may be an
          emergency for the patient's health. In addition to the context and complexity of the message, the
          professional is under the pressure of having to work under very tight deadlines.</li>
        <li class="mb-4">Interpreting in catastrophes and accidents: emergencies can also occur in catastrophes and
          major accidents. Interpreting here adds the psychological component, making communications with the patient
          or family particularly delicate.</li>
        <li class="mb-4">Translation of medical reports and certificates: finally, the clearest example of medical
          translation and interpretation are medical reports and certificates that are translated to inform medical
          teams in another country about a patient's history or to inform the family or patient about the patient's
          state of health, among others. The above-mentioned issues such as speed or complexity of the message can be
          included here, so we are talking about processes that, in addition to high accuracy in translation, have
          components that increase the difficulty of the service.</li>
        <li class="mb-4">Sworn translation: Sworn translation is often required if the documents have to be legally
          effective before the corresponding foreign authorities. For example, an individual's claim for a traffic
          accident in which the plaintiff - an English tourist - was seriously injured.</li>
      </ul>
      <p class="color-white">Speak Now Video has multiple interpreters and assists with medical translations for
        foreign patients treated in hospitals in the United States and Canada. With interpreters for the medical
        sector in more than 350 languages.</p>
      <p class="color-white">Undoubtedly, this is a task of utmost importance for patients, families, and physicians
        that requires the highest quality and professionalism in any service.</p>
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