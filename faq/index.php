<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQ | NectorFlare</title>
  <link rel="icon" type="image/png" href="https://nectorflare.com/images/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W792LMSDWP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-W792LMSDWP');
</script>
<body>
<?php include '../call_button/index.php';?>
  <!-- Header Start -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-2 fixed-top">
  <div class="container d-flex align-items-center justify-content-between">
    <a href="https://nectorflare.com/" class="d-flex align-items-center">
      <img src="https://nectorflare.com/images/logo.png" alt="Nector Flare Logo" style="height:50px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item ms-2"><a class="nav-link header" href="https://nectorflare.com/">Home</a></li>
        <li class="nav-item"><a class="nav-link header" href="https://nectorflare.com/about-us/">About</a></li>
        <li class="nav-item"><a class="nav-link header" href="https://nectorflare.com/services/">Services</a></li>
        <li class="nav-item"><a class="nav-link header" href="https://nectorflare.com/portfolio/">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link header" href="https://nectorflare.com/blog/">Blog</a></li>
        <li class="nav-item"><a class="nav-link header" href="https://nectorflare.com/contact-us/">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Header End  -->


<div class="container py-5">
  <h2 class="mb-4 fw-bold">Frequently Asked Questions</h2>
  <div class="accordion" id="faqAccordion">

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          What is your return policy?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Our return policy allows returns within 30 days of purchase with a valid receipt.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          How long does shipping take?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Shipping usually takes 5-7 business days for domestic orders.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Do you ship internationally?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Yes, we ship internationally. Shipping times and costs vary by destination.
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Footer Start -->
<footer class="text-white bg-primary py-5">
  <div class="container">
    <div class="row text-md-start text-center">
      <div class="col-md-4 mb-3">
         <a href ="https://nectorflare.com/"><img src="../images/logo.png" alt="Nector Flare Logo" height="25%" width="60%"></a>
        <p>Nectorflare is a creative digital solutions company passionate about blending innovation with design. We help brands shine brighter through impactful web development, engaging user experiences, and smart digital strategies — turning ideas into reality with style and precision.</p>
        <div class="social_media_icon">
        <a href ="https://www.instagram.com/nectorflare/"><i class="fa-brands fa-instagram"></i></a>
        <!-- <a href =""><i class="fa-brands fa-pinterest"></i></a> -->
        <a href ="https://www.facebook.com/profile.php?id=61578447939214"><i class="fa-brands fa-facebook"></i></a>
        <a href ="https://www.linkedin.com/in/nectorflare-private-limited-573701378"><i class="fa-brands fa-linkedin"></i></a>
        <a href ="https://x.com/nectorflare"><i class="fa-solid fa-x"></i></a>
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <h6>Quick Links</h6>
        <ul class="list-unstyled">
          <a href ="../faq/"><li><i class="fa-solid fa-greater-than"></i> FAQ</li></a>
          <a href ="../about-us/"><li><i class="fa-solid fa-greater-than"></i> About Us</li></a>
          <a href ="../contact-us/"><li><i class="fa-solid fa-greater-than"></i> Contact Us</li></a>
          <a href ="../blog/"><li><i class="fa-solid fa-greater-than"></i> Blog</li></a>
          <a href ="../services/"><li><i class="fa-solid fa-greater-than"></i> Services</li></a>
        </ul>
      </div>
      <div class="col-md-2 mb-3">
        <h6>Services</h6>
        <ul class="list-unstyled">
          <a href ="../web_development/"><li><i class="fa-solid fa-greater-than"></i> Web Development</li></a>
          <a href ="../app_development/"><li><i class="fa-solid fa-greater-than"></i> App Development</li></a>
          <a href ="../ui_ux_desigining/"><li><i class="fa-solid fa-greater-than"></i> UI/UX Desigining</li></a>
          <a href ="../digital_marketing/"><li><i class="fa-solid fa-greater-than"></i> Digital Marketing</li></a>
          <a href ="../software_development/"><li><i class="fa-solid fa-greater-than"></i> Software Development</li></a>
          <a href ="../eCommerce_development/"><li><i class="fa-solid fa-greater-than"></i> E-Commerce Devlopment</li></a>

        </ul>
      </div>
      <div class="col-md-4 mb-3">
        <h6>Information</h6>
        <p><i class="fa-solid fa-phone"></i>  +91-9355006621</p>
        <p><i class="fa-solid fa-envelope"></i>  info@nectorflare.com</p>
        <p><i class="fa-solid fa-location-dot"></i>  Unit No 8125, 8th Floor Gaur City Mall Office Space, Sector4, Grater Noida West, U.P. 201318</p>
      </div>
    </div>
  </div>
</footer>
<!-- Footer End  -->
</body>
</html>