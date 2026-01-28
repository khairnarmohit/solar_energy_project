<link rel="stylesheet" href="<?= base_url() ?>assets/css/solar_street_light.css">

<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center">

      <!-- CONTENT -->
      <div class="col-md-6 mb-4 mb-md-0 ssl-reveal-left">
        <h1 class="fw-bold mb-3">Solar Street Light</h1>

        <p class="text-muted">
          Solar Street Lights are standalone lighting systems powered by solar
          energy. They provide reliable illumination without dependency on grid
          electricity, making them ideal for streets, highways, villages, and
          public areas.
        </p>
      </div>

      <!-- IMAGE -->
      <div class="col-md-6 text-center ssl-reveal-right">
        <img src="<?= base_url()?>assets/image/streetlight1.png"
             alt="Solar Street Light System"
             class="img-fluid rounded">
      </div>

    </div>
  </div>
</section>


<section class="py-5 bg-light">
  <div class="container">
    <div class="row">

      <div class="col-12 text-center mb-4 ssl-reveal-up">
        <h2 class="fw-bold">What is a Solar Street Light?</h2>
      </div>

      <div class="col-md-10 mx-auto text-center ssl-reveal-up">
        <p class="text-muted">
          A Solar Street Light is an independent lighting system that consists
          of solar panels, LED lamps, batteries, and controllers. It stores
          solar energy during the day and automatically provides illumination
          at night.
        </p>
      </div>

    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">

      <!-- IMAGE -->
      <div class="col-md-6 mb-4 mb-md-0 ssl-reveal-left">
        <img style="height: 300px; width:300px;" src="<?= base_url()?>assets/image/streetlight2.jpg"
             class="img-fluid rounded"
             alt="Benefits of Solar Street Light">
      </div>

      <!-- CONTENT -->
      <div class="col-md-6 ssl-reveal-right">
        <h2 class="fw-bold mb-3">Benefits of Solar Street Light</h2>

        <ul class="text-muted ps-3">
          <li>No electricity bills</li>
          <li>Easy installation and low maintenance</li>
          <li>Environment friendly and renewable</li>
          <li>Automatic operation from dusk to dawn</li>
          <li>Ideal for remote and rural areas</li>
        </ul>
      </div>

    </div>
  </div>
</section>


<script>
const sslObserver = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add("show");
        sslObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.25 }
);

document.querySelectorAll(
  ".ssl-reveal-left, .ssl-reveal-right, .ssl-reveal-up"
).forEach(el => sslObserver.observe(el));
</script>
