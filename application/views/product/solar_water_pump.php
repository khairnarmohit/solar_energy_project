<link rel="stylesheet" href="<?= base_url('assets/css/solar_water_pump.css'); ?>">

<?php foreach($pumps as $p): ?>

<section class="py-5 solar-pump-overview section1">
  <div class="container">
    <div class="row align-items-center">

      <!-- IMAGE SIDE -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="image-break-wrapper reveal-image"
             style="background:url('<?= base_url('uploads/'.$p->pump_image) ?>') center/cover no-repeat; height:400px;">

          <div class="img-piece p1"></div>
          <div class="img-piece p2"></div>
          <div class="img-piece p3"></div>
          <div class="img-piece p4"></div>

        </div>
      </div>

      <!-- CONTENT SIDE -->
      <div class="col-md-6">
        <h1 class="fw-bold mb-3"><?= $p->pump_title ?></h1>

        <p class="text-muted"><?= $p->pump_description ?></p>

        <div class="d-flex flex-wrap gap-2 mt-3">
          <?php 
          $apps = explode(',', $p->applications);
          foreach($apps as $a):
          ?>
            <span class="app-tag"><?= trim($a) ?></span>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<?php endforeach; ?>
