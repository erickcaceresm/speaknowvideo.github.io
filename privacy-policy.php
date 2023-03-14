<?php include 'includes/header.php';?>

<section class="banner-commun banner_privacy">
  <div class="banner-commun_text">
    <h1 class="title-primary text-center color-white" data-aos="fade-up">Privacy Policy</h1>
  </div>
</section>

<section class="section-commun section-black-gradient">
  <div class="container">
    <div class="terms-content">
      <div class="mb-4">
        <p>This Privacy Policy establishes the terms in which https://speaknowvideo.com uses and protects the information that is provided by its users when using its website. This company is committed to the security of its users’ data. When we ask you to fill in the fields of personal information with which you can be identified, we do so ensuring that it will only be used in accordance with the terms of this document. However, this Privacy Policy may change over time or be updated, so we recommend and emphasize that you continually review this page to ensure that you agree with such changes.</p>
      </div>
      <div class="mb-4">
        <h2>Information that is Collected</h2>
        <p>Our website may collect personal information such as: Name, contact information such as your email address and demographic information. Likewise, when necessary, specific information may be required to process an order or make a delivery or billing.</p>
      </div>
      <div class="mb-4">
        <h2>Use of Collected Information</h2>
        <p>Our website uses the information in order to provide the best possible service, particularly to maintain a register of users, orders if applicable, and improve our products and services. It is possible that emails will be sent periodically through our site with special offers, new products and other advertising information that we consider relevant to you or that may provide you with some benefit, these emails will be sent to the address you provide and may be canceled. anytime.</p>
        <p>https://speaknowvideo.com is highly committed to fulfill the commitment to keep your information secure. We use the most advanced systems and constantly update them to ensure that there is no unauthorized access.</p>
      </div>
      <div class="mb-4">
        <h2>Cookies</h2>
        <p>A cookie refers to a file that is sent in order to request permission to be stored on your computer, by accepting said file it is created and the cookie then serves to have information regarding web traffic, and also facilitates future visits to a web recurrent. Another function that cookies have is that with them the web can recognize you individually and therefore provide you with the best personalized service on its web.</p>
        <p>Our website uses cookies to be able to identify the pages that are visited and their frequency. This information is used only for statistical analysis and then the information is permanently deleted. You can delete cookies at any time from your computer. However, cookies help to provide a better service on the websites, you do not give access to information from your computer or from you, unless you want it and provide it directly with news. You can accept or deny the use of cookies, however most browsers automatically accept cookies as it serves to have a better web service. You can also change your computer settings to decline cookies. If they are declined, you may not be able to use some of our services.</p>
      </div>
      <div class="mb-4">
        <h2>Links to Third Partiess</h2>
        <p>This website may contain links to other sites that may be of interest to you. Once you click on these links and leave our page, we no longer have control over the site to which you are redirected and therefore we are not responsible for the terms or privacy or the protection of your data on those other third party sites. These sites are subject to their own privacy policies, so it is recommended that you consult them to confirm that you agree with them.</p>
      </div>
      <div class="mb-4">
        <h2>Control of Your Personal Information</h2>
        <p>At any time you can restrict the collection or use of personal information that is provided to our website. Each time you are asked to fill in a form, such as user registration, you can check or uncheck the option to receive information by email. In case you have marked the option to receive our newsletter or advertising, you can cancel it at any time.</p>
        <p>This company will not sell, transfer or distribute the personal information that is collected without your consent, unless required by a judge with a court order.</p>
        <p>https://speaknowvideo.com It reserves the right to change the terms of this Privacy Policy at any time.</p>
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