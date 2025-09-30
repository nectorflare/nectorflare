<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio | Nectorflare</title>
  <link rel="icon" type="image/png" href="https://nectorflare.com/images/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* ---------- Portfolio Filter Fix ---------- */
    
  </style>
</head>

<body>
<?php include '../call_button/index.php';?>
<!-- Navbar -->
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

<!-- Breadcrumb Banner -->
<section class="portfolio-header">
  <h2>Portfolio</h2>
  <p>NectorFlare: Building Digital Experiences with Creativity and Clarity</p>
</section>

<!-- Portfolio Start -->
<div class="container py-5">
  <div class="text-center mb-4">
    <h2><span style="color:#007bff">Portfolio</span></h2>
    <p>We are a team of talented designers making websites</p>

    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="website">Website</button>
      <button class="filter-btn" data-filter="ui">UI & UX</button>
      <button class="filter-btn" data-filter="digital">Digital Marketing</button>
    </div>
  </div>

  <div class="row g-4">
    <div class="col-md-4 portfolio-item website show">
      <a href="https://www.bharatkaswaad.com/index.php/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/bharatkaswaad.png" alt="Nectorflare Website">
          <div class="overlay"><p>Bharat Ka Swaad<br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
      </a>
    </div>
    <div class="col-md-4 portfolio-item website show">
      <a href="https://www.perfitalia.com/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/perfitalia.png" alt="Nectorflare Website">
          <div class="overlay"><p>Perfitalia<br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
      </a>
    </div>    
    <div class="col-md-4 portfolio-item website show">
      <a href="https://www.kvnschool.in/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/kvnschool.png" alt="Nectorflare Website">
          <div class="overlay"><p>Krishna Vidya Niketan<br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
      </a>
    </div>
    <div class="col-md-4 portfolio-item digital show">
      <a href="https://www.instagram.com/reel/DOnHDqEEoq0/?igsh=OHNseTVoODUwYWt1" target="_blank">
        <div class="screenshot-box">
          <video loop muted autoplay>
            <source src="images/smo/instragram.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="overlay"><p>New Kuber Hospital Kanpur<br><span style="font-weight: 500; font-size: 20px;">Social Media Optimization</span></p></div>
        </div>
      </a>
    </div>
        <div class="col-md-4 portfolio-item ui show">
      <a href="#" target="_blank">
        <div class="screenshot-box">
          <img src="images/uiux/Deskto.jpg" alt="Nectorflare Website">
          <div class="overlay"><p>Water Packaging<br><span style="font-weight: 500; font-size: 20px;">UI & UX</span></p></div>
        </div>
      </a>
    </div>
        <div class="col-md-4 portfolio-item ui show">
      <a href="#" target="_blank">
        <div class="screenshot-box">
          <img src="images/uiux/Desktop - 1 (2).PNG" alt="Nectorflare Website">
          <div class="overlay"><p>PS Furniture<br><span style="font-weight: 500; font-size: 20px;">UI & UX</span></p></div>
        </div>
      </a>
    </div>
        <div class="col-md-4 portfolio-item ui show">
      <a href="#" target="_blank">
        <div class="screenshot-box">
          <img src="images/uiux/Desktop - 1 (12).jpg" alt="Nectorflare Website">
          <div class="overlay"><p>Solar Industry<br><span style="font-weight: 500; font-size: 20px;">UI & UX</span></p></div>
        </div>
      </a>
    </div>
        <div class="col-md-4 portfolio-item ui show">
      <a href="#" target="_blank">
        <div class="screenshot-box">
          <img src="images/uiux/Desktop - 1 (13).jpg" alt="Nectorflare Website">
          <div class="overlay"><p>Solar Industry<br><span style="font-weight: 500; font-size: 20px;">UI & UX</span></p></div>
        </div>
      </a>
    </div>
        <div class="col-md-4 portfolio-item ui show">
      <a href="#" target="_blank">
        <div class="screenshot-box">
          <img src="images/uiux/Desktop - 1.jpg" alt="Nectorflare Website">
          <div class="overlay"><p>The Food Heaven Restaurant<br><span style="font-weight: 500; font-size: 20px;">UI & UX</span></p></div>
        </div>
      </a>
    </div>
    <div class="col-md-4 portfolio-item ui show">
      <a href="#" target="_blank">
        <div class="screenshot-box">
          <img src="images/uiux/MacBook Air - 2 (4).jpg" alt="Nectorflare Website">
          <div class="overlay"><p>Direct To Cart<br><span style="font-weight: 500; font-size: 20px;">UI & UX</span></p></div>
        </div>
      </a>
    </div>
    <div class="col-md-4 portfolio-item digital show">
      <a href="https://www.instagram.com/reel/DOnHDqEEoq0/?igsh=OHNseTVoODUwYWt1" target="_blank">
        <div class="screenshot-box">
          <video loop muted autoplay>
            <source src="images/smo/Instragram Post 2.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="overlay"><p>New Kuber Hospital Kanpur<br><span style="font-weight: 500; font-size: 20px;">Social Media Optimization</span></p></div>
        </div>
      </a>
    </div>
        <div class="col-md-4 portfolio-item digital show">
      <a href="https://www.instagram.com/reel/DOnHDqEEoq0/?igsh=OHNseTVoODUwYWt1" target="_blank">
        <div class="screenshot-box">
          <video loop muted autoplay>
            <source src="images/smo/Instagram_Post_3.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="overlay"><p>New Kuber Hospital Kanpur<br><span style="font-weight: 500; font-size: 20px;">Social Media Optimization</span></p></div>
        </div>
      </a>
    </div>
    <div class="col-md-4 portfolio-item website show">
      <a href="https://www.24x7acservice.com/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/24x7acservice.png" alt="Nectorflare Website">
          <div class="overlay"><p>24 x 7 AC Service<br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
      </a>
    </div>
      <div class="col-md-4 portfolio-item website show">
      <a href="https://www.ahhairpatchsolution.com/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/ahhairpatchsolution.png" alt="Nectorflare Website">
          <div class="overlay"><p>Ahhair Patch Solution<br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
      </a>
    </div>
    <div class="col-md-4 portfolio-item website show">
      <a href="https://angelsoftindia.com/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/angelsoftindia.png" alt="Nectorflare Website">
          <div class="overlay"><p>Angel Soft India<br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
      </a>
    </div>
    <div class="col-md-4 portfolio-item website show">
      <a href="https://www.dgtindia.in/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/dgtindia.png" alt="Nectorflare Website">
          <div class="overlay"><p>Digital Guard Technologies <br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
      </a>
    </div>
    <div class="col-md-4 portfolio-item website show">
      <a href="https://dial4cakes.com/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/dial4cakes.png" alt="Nectorflare Website">
          <div class="overlay"><p>Dial4cakes <br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
      </a>
    </div>
    <div class="col-md-4 portfolio-item website show">
      <a href="https://www.directtocart.com/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/directtocart.png" alt="Nectorflare Website">
          <div class="overlay"><p>Direct To Cart <br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
      </a>
    </div>

    <div class="col-md-4 portfolio-item website show">
      <a href="https://www.ecomitsol.com/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/ecomitsol.png" alt="Nectorflare Website">
          <div class="overlay"><p>eCom IT Solutions <br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
      </a>
    </div>

    <div class="col-md-4 portfolio-item website show">
        <a href="https://www.edzu.in/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/edzu.png" alt="Nectorflare Website">
          <div class="overlay"><p>Edzu EdTech<br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
      </a>
    </div>

     <div class="col-md-4 portfolio-item website show">
        <a href="https://exovikdigital.com/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/exovikdigital.png" alt="Nectorflare Website">
          <div class="overlay"><p>EXOVIK DIGITAL PVT LTD<br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
       </a>
    </div>

      <div class="col-md-4 portfolio-item website show">
        <a href="https://gemstars.in/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/gemstars.png" alt="Nectorflare Website">
          <div class="overlay"><p>Gemstars<br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
        </a>
    </div>

    <div class="col-md-4 portfolio-item website show">
        <a href="https://www.healthsfirst.in/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/healthsfirst.png" alt="Nectorflare Website">
          <div class="overlay"><p>Healthsfirst Healthcare & Diagnostics Pvt. Ltd <br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
        </a>
    </div>

    <div class="col-md-4 portfolio-item website show">
        <a href="https://herbslyf.com/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/herbslyf.png" alt="Nectorflare Website">
          <div class="overlay"><p>Herbs.LYF <br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
        </a>
    </div>

    <div class="col-md-4 portfolio-item website show">
        <a href="https://www.hurix.com/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/hurix.png" alt="Nectorflare Website">
          <div class="overlay"><p>Hurix <br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
        </a>
    </div>

    <div class="col-md-4 portfolio-item website show">
        <a href="https://makemytripblog.com/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/makemytripblog.png" alt="Nectorflare Website">
          <div class="overlay"><p>Make My Trip Blog <br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
        </a>
    </div>

      <div class="col-md-4 portfolio-item website show">
        <a href="https://www.nexcuit.in/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/nexcuit.png" alt="Nectorflare Website">
          <div class="overlay"><p>Nexcuit <br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
        </a>
    </div>

      <div class="col-md-4 portfolio-item website show">
        <a href="https://www.priyahospital.in/" target="_blank">
        <div class="screenshot-box">
          <img src="images/website/priyahospital.png" alt="Nectorflare Website">
          <div class="overlay"><p>Priya Hospital Kanpur <br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
        </a>
    </div>

     <div class="col-md-4 portfolio-item website show">
        <a href="https://www.salessyllabus.com/ " target="_blank">
        <div class="screenshot-box">
          <img src="images/website/salessyllabus.png" alt="Nectorflare Website">
          <div class="overlay"><p>Sales Syllabus<br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
        </a>
    </div>

     <div class="col-md-4 portfolio-item website show">
        <a href="https://sneltechindia.com/ " target="_blank">
        <div class="screenshot-box">
          <img src="images/website/sneltechindia.png" alt="Nectorflare Website">
          <div class="overlay"><p>Sneltech India Private Limited<br><span style="font-weight: 500; font-size: 20px;">Web Development</span></p></div>
        </div>
        </a>
    </div>
  </div>
</div>

<!-- JS Filter Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const filterButtons = document.querySelectorAll(".filter-btn");
  const portfolioItems = document.querySelectorAll(".portfolio-item");

  filterButtons.forEach(button => {
    button.addEventListener("click", () => {
      // active class update
      filterButtons.forEach(btn => btn.classList.remove("active"));
      button.classList.add("active");

      const filter = button.getAttribute("data-filter");

      portfolioItems.forEach(item => {
        if (filter === "all" || item.classList.contains(filter)) {
          item.classList.add("show");
        } else {
          item.classList.remove("show");
        }
      });
    });
  });
});
</script>

<!-- Footer Start -->
<footer class="text-white bg-primary py-5">
  <div class="container">
    <div class="row text-md-start text-center">
      <div class="col-md-4 mb-3">
         <a href="https://nectorflare.com/"><img src="../images/logo.png" alt="Nector Flare Logo" height="25%" width="60%"></a>
        <p>Nectorflare is a creative digital solutions company passionate about blending innovation with design. We help brands shine brighter through impactful web development, engaging user experiences, and smart digital strategies — turning ideas into reality with style and precision.</p>
        <div class="social_media_icon">
          <a href="https://www.instagram.com/nectorflare/"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.facebook.com/profile.php?id=61578447939214"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://www.linkedin.com/in/nectorflare-private-limited-573701378"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://x.com/nectorflare"><i class="fa-solid fa-x"></i></a>
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <h6>Quick Links</h6>
        <ul class="list-unstyled">
          <a href="../faq/"><li><i class="fa-solid fa-greater-than"></i> FAQ</li></a>
          <a href="../about-us/"><li><i class="fa-solid fa-greater-than"></i> About Us</li></a>
          <a href="../contact-us/"><li><i class="fa-solid fa-greater-than"></i> Contact Us</li></a>
          <a href="../blog/"><li><i class="fa-solid fa-greater-than"></i> Blog</li></a>
          <a href="../services/"><li><i class="fa-solid fa-greater-than"></i> Services</li></a>
        </ul>
      </div>
      <div class="col-md-2 mb-3">
        <h6>Services</h6>
        <ul class="list-unstyled">
          <a href="../web_development/"><li><i class="fa-solid fa-greater-than"></i> Web Development</li></a>
          <a href="../app_development/"><li><i class="fa-solid fa-greater-than"></i> App Development</li></a>
          <a href="../ui_ux_desigining/"><li><i class="fa-solid fa-greater-than"></i> UI/UX Designing</li></a>
          <a href="../digital_marketing/"><li><i class="fa-solid fa-greater-than"></i> Digital Marketing</li></a>
          <a href="../software_development/"><li><i class="fa-solid fa-greater-than"></i> Software Development</li></a>
          <a href="../eCommerce_development/"><li><i class="fa-solid fa-greater-than"></i> E-Commerce Development</li></a>
        </ul>
      </div>
      <div class="col-md-4 mb-3">
        <h6>Information</h6>
        <p><i class="fa-solid fa-phone"></i> +91-9355006621</p>
        <p><i class="fa-solid fa-envelope"></i> info@nectorflare.com</p>
        <p><i class="fa-solid fa-location-dot"></i> Unit No 8125, 8th Floor Gaur City Mall Office Space, Sector4, Greater Noida West, U.P. 201318</p>
      </div>
    </div>
  </div>
</footer>
<!-- Footer End -->

</body>
</html>
