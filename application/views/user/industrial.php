<!-- HERO -->
<section class="ind-hero">
  <div class="container">
    <h1>Industrial Solar Solutions</h1>
    <p>High-Capacity Solar Power for Industrial Applications</p>
  </div>
</section>
<!-- ABOUT -->
<section class="ind-about">
  <div class="container ind-grid">

    <div class="ind-text">
      <p class="seo-text">
        <?= !empty($about->description) 
              ? $about->description 
              : 'Industrial solar solutions for large scale energy needs.' ?>
      </p>

      <ul class="ind-points">
        <?php if(!empty($points)){ foreach($points as $p){ ?>
          <li><?= $p->point ?></li>
        <?php }} ?>
      </ul>
    </div>

    <div class="ind-image">
      <?php if(!empty($about->image)){ ?>
        <img src="<?= base_url('uploads/'.$about->image) ?>" 
             alt="Industrial Solar Panels">
      <?php } else { ?>
        <img src="<?= base_url('assets/image/industrial.webp') ?>" 
             alt="Industrial Solar Panels">
      <?php } ?>
    </div>

  </div>
</section>

<!-- CAPABILITIES -->
<section class="ind-capabilities">
  <div class="container">
    <h2>Our Industrial Capabilities</h2>

    <div class="capability-grid">
      <?php if(!empty($capabilities)){ foreach($capabilities as $c){ ?>
        <div class="capability-box">
          <?= $c->title ?>
        </div>
      <?php }} ?>
    </div>
  </div>
</section>

<!-- WHY CHOOSE -->
<section class="ind-why">
  <div class="container">
    <h2>Why Industries Choose Maha Solar</h2>

    <div class="why-grid">
      <?php if(!empty($why)){ foreach($why as $w){ ?>
        <div class="why-box">
          <?= $w->title ?>
        </div>
      <?php }} ?>
    </div>
  </div>
</section>