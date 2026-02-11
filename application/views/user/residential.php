<!-- HERO -->
<section class="res-hero">
  <div class="container">
    <h1>Residential Solar Solutions</h1>
    <p>Power Your Home with Clean & Affordable Solar Energy</p>
  </div>
</section>

<!-- ABOUT -->
<section class="res-about">
  <div class="container res-grid">

    <div class="res-text">
      <h2>Solar for Your Home</h2>

      <p>
        <?= !empty($about->description)
              ? $about->description
              : 'Maha Solar provides reliable and cost-effective rooftop solar solutions for homes. Our systems help reduce electricity bills while ensuring long-term savings using clean and renewable energy.' ?>
      </p>

      <ul class="res-points">
        <?php if(!empty($points)){ foreach($points as $p){ ?>
          <li><?= $p->point ?></li>
        <?php }} ?>
      </ul>
    </div>

    <div class="res-image">
      <?php if(!empty($about->image) && file_exists(FCPATH.'uploads/'.$about->image)){ ?>
        <img src="<?= base_url('uploads/'.$about->image) ?>" alt="Residential Solar">
      <?php } else { ?>
        <img src="<?= base_url('assets/image/service.webp') ?>" alt="Residential Solar">
      <?php } ?>
    </div>

  </div>
</section>

<!-- BENEFITS -->
<section class="res-benefits">
  <div class="container">
    <h2>Benefits of Residential Solar</h2>

    <div class="benefit-grid">
      <?php if(!empty($benefits)){ foreach($benefits as $b){ ?>
        <div class="benefit-box">
          <?= $b->title ?>
        </div>
      <?php }} ?>
    </div>

  </div>
</section>