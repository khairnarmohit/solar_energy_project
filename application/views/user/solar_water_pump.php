<link rel="stylesheet" href="<?= base_url('assets/css/solar_water_pump.css'); ?>">

<?php if(!empty($pumps)): ?>
<?php $i = 0; foreach($pumps as $p): $i++; ?>

<section class="py-5 <?= ($i % 2 == 0) ? 'section2 bg-white' : 'section1' ?>">
  <div class="container">
    <div class="row align-items-center">

      <?php if($i % 2 != 0): ?>

        <!-- IMAGE SIDE (4 PIECES - ANIMATION SAME) -->
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="image-break-wrapper reveal-image"
               style="background-image:url('<?= base_url('uploads/'.$p->pump_image) ?>');">

            <div class="img-piece p1"
                 style="background-image:url('<?= base_url('uploads/'.$p->pump_image) ?>');"></div>

            <div class="img-piece p2"
                 style="background-image:url('<?= base_url('uploads/'.$p->pump_image) ?>');"></div>

            <div class="img-piece p3"
                 style="background-image:url('<?= base_url('uploads/'.$p->pump_image) ?>');"></div>

            <div class="img-piece p4"
                 style="background-image:url('<?= base_url('uploads/'.$p->pump_image) ?>');"></div>

          </div>
        </div>

        <!-- CONTENT SIDE -->
        <div class="col-md-6">
          <h2 class="fw-bold mb-3"><?= $p->pump_title ?></h2>

          <p class="text-muted">
            <?= $p->pump_details ?>
          </p>

          <div class="d-flex flex-wrap gap-2 mt-3">
            <?php 
            $apps = explode(',', $p->pump_applications);
            foreach($apps as $a): ?>
              <span class="app-tag"><?= trim($a) ?></span>
            <?php endforeach; ?>
          </div>
        </div>

      <?php else: ?>

        <!-- CONTENT SIDE -->
        <div class="col-md-6 mb-4 mb-md-0">
          <h2 class="fw-bold mb-3"><?= $p->pump_title ?></h2>

          <p class="text-muted">
            <?= $p->pump_details ?>
          </p>

          <div class="d-flex flex-wrap gap-2 mt-3">
            <?php 
            $apps = explode(',', $p->pump_applications);
            foreach($apps as $a): ?>
              <span class="app-tag"><?= trim($a) ?></span>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- IMAGE SIDE -->
        <div class="col-md-6">
          <div class="image-break-wrapper reveal-image"
               style="background-image:url('<?= base_url('uploads/'.$p->pump_image) ?>');">

            <div class="img-piece p1"
                 style="background-image:url('<?= base_url('uploads/'.$p->pump_image) ?>');"></div>

            <div class="img-piece p2"
                 style="background-image:url('<?= base_url('uploads/'.$p->pump_image) ?>');"></div>

            <div class="img-piece p3"
                 style="background-image:url('<?= base_url('uploads/'.$p->pump_image) ?>');"></div>

            <div class="img-piece p4"
                 style="background-image:url('<?= base_url('uploads/'.$p->pump_image) ?>');"></div>

          </div>
        </div>

      <?php endif; ?>

    </div>
  </div>
</section>

<?php endforeach; ?>
<?php endif; ?>


<script>
const imageObserver = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
        imageObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.4 }
);

document.querySelectorAll(".reveal-image")
  .forEach(el => imageObserver.observe(el));
</script>
