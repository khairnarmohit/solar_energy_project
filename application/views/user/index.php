<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solar Hero Video</title>

</head>
<body>

  <!-- HERO SECTION -->
  <section class="hero-section">

  <!-- Background Video -->
  <video autoplay muted loop playsinline class="hero-video">
    <source src="<?=base_url('assets/video/solar.mp4') ?>" type="video/mp4">
  </video>

  

  <!-- Overlay -->
  <div class="hero-overlay"></div>

  <!-- Content -->
  <div class="hero-content text-center">
    <h1>Power Your Future <br> With Solar Energy</h1>
    <p>Clean, Renewable & Affordable Solar Solutions</p>

    <a href="#" class="btn hero-btn">Explore More</a>
  </div>

</section>
<!-- WHAT WE DO SECTION -->
<section class="what-we-do py-5">
  <div class="container">

    <!-- Section Heading -->
    <div class="text-center mb-5">
      <h2 class="section-title">What We Do</h2>

      <p class="section-subtitle">
        Clean, Renewable & Affordable Solar Solutions
      </p>

      <p class="section-desc">
        Maha Solar provides sustainable solar power systems for homes and
        industries. We help reduce electricity costs and support energy transition
        towards a greener future.
      </p>
    </div>

    <!-- Cards Row -->
    <div class="row justify-content-center g-4">

      <!-- Card 1 -->
      <div class="col-md-5">
        <div class="service-card text-center">
          <h3>Solar Power</h3>
          <p>
            High efficiency rooftop solar panel installation with long-lasting
            clean energy solutions.
          </p>
          <a href="#" class="btn service-btn">Know More</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-5">
        <div class="service-card text-center">
          <h3>Energy Transition</h3>
          <p>
            Helping individuals and businesses shift from traditional power to
            renewable solar energy systems.
          </p>
          <a href="#" class="btn service-btn">Know More</a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ABOUT US SECTION -->
<section class="about-section">

  <div class="about-container">

    <!-- Left Image -->
    <div class="about-image">
      <img src="<?= base_url('assets/image/blog2.jpg') ?>" alt="About Solar">
    </div>

    <!-- Right Content -->
    <div class="about-text">
      <h2>About Us</h2>

      <p>
        Agni Solar has 3 decades of experience as a leader and innovator
        in the solar energy space. Our varied expertise includes all major
        verticals of solar power systems and solutions.
      </p>

      <p>
        Our aim is to be a solar energy brand that evokes trust, confidence
        and reliability. We guide customers into taking the right decisions
        for all their solar energy needs.
      </p>

      <!-- ✅ Button Added Here -->
      <a href="about.html" class="about-btn">Learn More</a>
    </div>

  </div>
</section>


  <!-- ===== PRODUCTS SECTION ===== -->
 <section class="products-section">
  <h2 class="section-title">Products</h2>

  <div class="products-container">

    <!-- Left Side Text -->
    <div class="products-text">
      <h3>Our Solar Products</h3>

      <ul>
        <li>Solar Water Heater</li>
        <li>Solar Pumps</li>
        <li>On Grid Solar</li>
        <li>Street Light</li>
      </ul>

      <!-- ✅ Button Added Here -->
      <a href="products.html" class="products-btn">View Products</a>
    </div>

    <!-- Right Side Image -->
    <div class="products-image">
      <img src="<?= base_url('assets/image/CONNECT.png') ?>" alt="Solar Products">
    </div>

  </div>
</section>




<!-- SERVICES SECTION -->
<section class="services-section">
  <h2 class="section-title">Services We Provide</h2>

  <div class="services-container">

    <!-- Left Side Image -->
    <div class="services-image">
      <img src="<?= base_url('assets/image/service.jpg') ?>" alt="Services Image">
    </div>

    <!-- Right Side Content -->
    <div class="services-text">
      <h3>Industrial & Commercial Solar Services</h3>

      <ul>
        <li>Residential Solar Projects</li>
        <li>Industrial Solar Solutions</li>
        <li>Commercial Solar Installations</li>
      </ul>

      <!-- ✅ Button Added Here -->
      <a href="services.html" class="services-btn">Explore Services</a>

    </div>

  </div>
</section>

<!-- BLOGS SECTION -->
<section class="blogs-section py-5">
  <div class="container">

    <!-- Heading -->
    <h2 class="text-center fw-bold mb-5 blog-title">
      Blogs & Solar Articles
    </h2>

    <div class="row justify-content-center g-4">

      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="card blog-card shadow-lg border-0">
          <img src="<?= base_url('assets/image/ind1.jpg') ?>" class="card-img-top" alt="Blog">

          <div class="card-body text-center">
            <h5 class="card-title fw-bold">
              Save Electricity With Solar Power Systems
            </h5>

            <p class="card-text text-muted">
              Choose Maha Solar Systems
            </p>

            <a href="#" class=" blog-btn">Read Blogs</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="card blog-card shadow-lg border-0">
          <img src="<?= base_url('assets/image/ind2.jpg') ?>" class="card-img-top" alt="Blog">

          <div class="card-body text-center">
            <h5 class="card-title fw-bold">
              How Much Carbon Footprint Can Solar Save ?
            </h5>

            <p class="card-text text-muted">
              Choose Maha Solar Systems
            </p>

            <a href="#" class=" blog-btn">Read Blogs</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="card blog-card shadow-lg border-0">
          <img src="<?= base_url('assets/image/ind3.jpg') ?>" class="card-img-top" alt="Blog">

          <div class="card-body text-center">
            <h5 class="card-title fw-bold">
              10 Benefits Of Solar Cooking Your Food
            </h5>

            <p class="card-text text-muted">
              Choose Maha Solar Systems
            </p>

            <a href="#" class="blog-btn">Read Blogs</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section class="faq-section">
  <h2 class="faq-title">Frequently Asked Questions</h2>

  <div class="faq-container">

    <!-- Left Column -->
    <div class="faq-column">

      <!-- 1 -->
      <div class="faq-item">
        <button class="faq-question">
          What is Solar Energy?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Solar energy is energy obtained from sunlight and converted into
            electricity or heat using solar systems.
          </p>
        </div>
      </div>

      <!-- 2 -->
      <div class="faq-item">
        <button class="faq-question">
          How long do solar panels last?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Solar panels generally last 25–30 years with proper maintenance.
          </p>
        </div>
      </div>

      <!-- 3 -->
      <div class="faq-item">
        <button class="faq-question">
          Can solar panels work on cloudy days?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Yes, solar panels still generate electricity even on cloudy days,
            though output may be lower.
          </p>
        </div>
      </div>

      <!-- 4 -->
      <div class="faq-item">
        <button class="faq-question">
          What maintenance is required for solar systems?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Solar systems require minimal maintenance like cleaning and regular
            inspection for best performance.
          </p>
        </div>
      </div>

      <!-- 5 -->
      <div class="faq-item">
        <button class="faq-question">
          Do you provide installation support?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Yes, we provide complete installation, service, and maintenance
            support for all solar projects.
          </p>
        </div>
      </div>

      <!-- 6 -->
      <div class="faq-item">
        <button class="faq-question">
          How long does solar installation take?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Installation usually takes 2–7 days depending on project size and site
            requirements.
          </p>
        </div>
      </div>

    </div>

    <!-- Right Column (Same Questions Copy) -->
    <div class="faq-column">

      <!-- 1 -->
      <div class="faq-item">
        <button class="faq-question">
          What is Solar Energy?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Solar energy is energy obtained from sunlight and converted into
            electricity or heat using solar systems.
          </p>
        </div>
      </div>

      <!-- 2 -->
      <div class="faq-item">
        <button class="faq-question">
          How long do solar panels last?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Solar panels generally last 25–30 years with proper maintenance.
          </p>
        </div>
      </div>

      <!-- 3 -->
      <div class="faq-item">
        <button class="faq-question">
          Can solar panels work on cloudy days?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Yes, solar panels still generate electricity even on cloudy days,
            though output may be lower.
          </p>
        </div>
      </div>

      <!-- 4 -->
      <div class="faq-item">
        <button class="faq-question">
          What maintenance is required for solar systems?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Solar systems require minimal maintenance like cleaning and regular
            inspection for best performance.
          </p>
        </div>
      </div>

      <!-- 5 -->
      <div class="faq-item">
        <button class="faq-question">
          Do you provide installation support?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Yes, we provide complete installation, service, and maintenance
            support for all solar projects.
          </p>
        </div>
      </div>

      <!-- 6 -->
      <div class="faq-item">
        <button class="faq-question">
          How long does solar installation take?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Installation usually takes 2–7 days depending on project size and site
            requirements.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>


<script src="<?= base_url('assets/js/index.js') ?>"></script>


<!-- ===== HERO TOP BANNER SECTION ===== -->
<section class="top-hero-banner">

  <div class="hero-banner-container">

    <!-- Left Image -->
    <div class="hero-banner-img">
        <img src="<?= base_url('assets/image/CONNECT.png') ?>" alt="Solar Banner">
      </div>

    <!-- Center Text -->
    <div class="hero-banner-text">
      <h1>
        India’s Leading Integrated Solar <br>
        Energy
      </h1>
      <p>Smart Solar Energy</p>
    </div>

    <!-- Right Button -->
    <div class="hero-banner-btn">
      <a href="#" class="connect-btn">
        <i class="fa-solid fa-phone"></i>
        CONNECT WITH US
      </a>
    </div>

  </div>

</section>




</body>
</html>