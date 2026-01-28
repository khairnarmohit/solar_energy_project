<link rel="stylesheet" href="<?= base_url('assets/css/product.css'); ?>">

<!-- Section I -->
<section class="about-hero">
    <div class="slides">
        <div class="slide active" style="background-image:url('<?= base_url('assets/image/about_bg1.jpg'); ?>')"></div>
        <div class="slide" style="background-image:url('<?= base_url('assets/image/about_bg2.jpg'); ?>')"></div>
        <div class="slide" style="background-image:url('<?= base_url('assets/image/about_bg3.jpg'); ?>')"></div>
    </div>

    <div class="overlay"></div>

    <div class="hero-content">
        <h1>About Us</h1>
    </div>

    <div class="triangle-curve"></div>

</section>


<!-- ================= DESIGN 1 ================= -->
<section class="py-5 overflow-hidden">
  <div class="container">
    <div class="row align-items-center">

      <!-- Image LEFT -->
      <div class="col-md-7 text-center">
        <img src="<?=base_url()?>assets/image/solarheater.png"
             class="img-fluid animate-left"
             alt="Solar Water Heater">
      </div>

      <!-- Content RIGHT -->
      <div class="col-md-5 animate-right">
        <h1 class="fw-bold">Solar Water Heater</h1>
        <button class="btn btn-warning px-4 py-2 mt-3"
                onclick="goToProduct('solar_water_heater.php')">
          Know More
        </button>
      </div>

    </div>
  </div>
</section>

<!-- ================= DESIGN 2 ================= -->
<section class="py-5 overflow-hidden bg-light">
  <div class="container">
    <div class="row align-items-center">

      <!-- Content LEFT -->
      <div class="col-md-5 animate-left">
        <h1 class="fw-bold">Solar Water Pump</h1>
        <button class="btn btn-warning px-4 py-2 mt-3"
                onclick="goToProduct('solar-water-pump.html')">
          Know More
        </button>
      </div>

      <!-- Image RIGHT -->
      <div class="col-md-7 text-center">
        <img src="<?=base_url()?>assets/image/solarpump.png"
             class="img-fluid animate-right"
             alt="Solar Water Pump">
      </div>

    </div>
  </div>
</section>

<!-- ================= DESIGN 1 (REUSE) ================= -->
<section class="py-5 overflow-hidden">
  <div class="container">
    <div class="row align-items-center">

      <!-- Image LEFT -->
      <div class="col-md-7 text-center">
        <img src="<?=base_url()?>assets/image/solarplant.png"
             class="img-fluid animate-left"
             alt="On Grid Solar Plant">
      </div>

      <!-- Content RIGHT -->
      <div class="col-md-5 animate-right">
        <h1 class="fw-bold">On Grid Solar Plant</h1>
        <button class="btn btn-warning px-4 py-2 mt-3"
                onclick="goToProduct('on-grid-solar.html')">
          Know More
        </button>
      </div>

    </div>
  </div>
</section>

<!-- ================= DESIGN 2 (REUSE) ================= -->
<section class="py-5 overflow-hidden bg-light">
  <div class="container">
    <div class="row align-items-center">

      <!-- Content LEFT -->
      <div class="col-md-5 animate-left">
        <h1 class="fw-bold">Solar Street Light</h1>
        <button class="btn btn-warning px-4 py-2 mt-3"
                onclick="goToProduct('solar-street-light.html')">
          Know More
        </button>
      </div>

      <!-- Image RIGHT -->
      <div class="col-md-7 text-center">
        <img src="<?=base_url()?>assets/image/solarlight.png"
             class="img-fluid animate-right"
             alt="Solar Street Light">
      </div>

    </div>
  </div>
</section>

<!-- ================= JS ================= -->
<script>
  function goToProduct(page) {
    window.location.href = page;
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.3 }
  );

  document.querySelectorAll('.animate-left, .animate-right')
    .forEach(el => observer.observe(el));
</script>
