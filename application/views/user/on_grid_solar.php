<link rel="stylesheet" href="<?= base_url() ?>assets/css/on_grid_solar.css">

<!-- ================= HERO SECTION ================= -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center">

      <!-- CONTENT -->
      <div class="col-md-6 mb-4 mb-md-0 og-reveal-left">
        <h1 class="fw-bold mb-3">On Grid Solar Power System</h1>

        <p class="text-muted">
          On Grid Solar Power Systems are connected directly to the electricity
          grid and help reduce your electricity bills by using solar energy
          during the daytime.
        </p>
      </div>

      <!-- IMAGE -->
      <div class="col-md-6 text-center og-reveal-right">
        <img src="<?= base_url()?>assets/image/gridsolar.jpg"
             alt="On Grid Solar Power System"
             class="img-fluid rounded">
      </div>

    </div>
  </div>
</section>

<!-- ================= WHAT IS ON GRID ================= -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row">

      <div class="col-12 text-center mb-4 og-reveal-up">
        <h2 class="fw-bold">What is On Grid Solar?</h2>
      </div>

      <div class="col-md-10 mx-auto text-center og-reveal-up">
        <p class="text-muted">
          An On Grid Solar System works in synchronization with the electricity
          grid. During the day, solar panels generate power which is used by your
          home or business, and excess energy is exported to the grid.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ================= HOW IT WORKS ================= -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row text-center">

      <div class="col-md-3 mb-4 og-reveal-up">
        <h5 class="fw-bold">Solar Panels</h5>
        <p class="text-muted">Convert sunlight into electricity</p>
      </div>

      <div class="col-md-3 mb-4 og-reveal-up">
        <h5 class="fw-bold">Grid Inverter</h5>
        <p class="text-muted">Converts DC to usable AC power</p>
      </div>

      <div class="col-md-3 mb-4 og-reveal-up">
        <h5 class="fw-bold">Net Meter</h5>
        <p class="text-muted">Exports excess power to the grid</p>
      </div>

      <div class="col-md-3 mb-4 og-reveal-up">
        <h5 class="fw-bold">Electric Grid</h5>
        <p class="text-muted">Acts as backup when solar is unavailable</p>
      </div>

    </div>
  </div>
</section>

<!-- ================= BENEFITS ================= -->
<section style="margin-top: -100px;" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">

      <!-- IMAGE -->
      <div class="col-md-6 mb-4 mb-md-0 og-reveal-left">
        <img src="<?= base_url()?>assets/image/gridbenifit.jpg"
             class="img-fluid rounded"
             alt="Benefits of On Grid Solar">
      </div>

      <!-- CONTENT -->
      <div class="col-md-6 og-reveal-right">
        <h2 class="fw-bold mb-3">Benefits of On Grid Solar</h2>

        <ul class="text-muted ps-3">
          <li>Significant reduction in electricity bills</li>
          <li>No need for batteries – low maintenance</li>
          <li>Net metering benefits</li>
          <li>Environment friendly energy solution</li>
          <li>High return on investment (ROI)</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<script>
const ogObserver = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
        ogObserver.unobserve(entry.target); // one time only
      }
    });
  },
  { threshold: 0.25 }
);

document
  .querySelectorAll(".og-reveal-left, .og-reveal-right, .og-reveal-up")
  .forEach(el => ogObserver.observe(el));
</script>
