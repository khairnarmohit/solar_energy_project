<title>About Us</title>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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




<section class="container brand-section py-5"
    data-aos="zoom-in-up">

  <div class="row align-items-center g-3">


    <!-- TEXT -->
    <div class="col-12 col-md-6">
     <h1 class="title"><?= $brand->title ?></h1>
<p><?= nl2br($brand->description) ?></p>

    </div>

    <!-- IMAGE -->
    <div class="col-12 col-md-6 text-center">
      <div class="image-card">
       <img src="<?= base_url('uploads/'.$brand->image) ?>"
     class="img-fluid"
     alt="<?= $brand->title ?>">
             <!-- class="img-fluid" alt="Our Brand"> -->
      </div>
    </div>

  </div>
</section>
<section class="container vision-section py-5"
    data-aos="zoom-in-up">

  <div class="row align-items-center g-3">


 
    <!-- IMAGE -->
    <div class="col-12 col-md-6 text-center">
      <div class="image-card">
     <img src="<?= base_url('uploads/'.$vision->image) ?>"
     class="img-fluid"
     alt="<?= $vision->title ?>">

             <!-- class="img-fluid" alt="Our Brand"> -->
      </div>
    </div>
       <!-- TEXT -->
    <div class="col-12 col-md-6">
     <h1 class="title"><?= $vision->title ?></h1>
<p><?= nl2br($vision->description) ?></p>

    </div>


  </div>
</section>


<section class="team-ui" data-aos="fade-up">
  <div class="container">

    <h2 class="team-title">Meet Our Team</h2>

    <div class="team-row">
<?php foreach($team as $t){ ?>
  <div class="team-card-new">
    <div class="team-img-wrap">
      <img src="<?= base_url('uploads/'.$t->image) ?>"
           alt="<?= $t->name ?>">
    </div>

    <h4 class="team-name"><?= $t->name ?></h4>
    <div class="line"></div>
    <p class="team-role"><?= $t->role ?></p>
    <div class="line small"></div>
    <p class="team-exp"><?= $t->experience ?></p>
  </div>
<?php } ?>



    </div>
  </div>
</section>

<section class="business_verticals">
  <div class="container">

    <h2 class="text-center mb-5">Business Verticals</h2>

    <div class="row g-4 justify-content-center">

      <?php foreach($verticals as $v){ ?>
        <div class="col-12 col-md-4">

          <div class="bv-box" style="border-top:4px solid <?= $v->color ?>">

            <div class="bv-content">
              <img src="<?= base_url('uploads/'.$v->image1) ?>" alt="<?= $v->title ?>">
              <h5><?= $v->title ?></h5>
              <p><?= $v->description ?></p>
            </div>

          </div>

        </div>
      <?php } ?>

    </div>

  </div>
</section>



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

<script>
    const counters = document.querySelectorAll('.counter');
    let started = false;

    const startCounter = () => {
        counters.forEach(counter => {
            const target = parseFloat(counter.getAttribute('data-target'));
            const isDecimal = target % 1 !== 0;

            let count = 0;
            const duration = 150; // frames
            const increment = target / duration;

            const updateCount = () => {
                if (count < target) {
                    count += increment;

                    counter.innerText = isDecimal ?
                        count.toFixed(1) :
                        Math.floor(count);

                    requestAnimationFrame(updateCount);
                } else {
                    counter.innerText = isDecimal ?
                        target.toFixed(1) :
                        target;
                }
            };

            updateCount();
        });
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !started) {
                started = true;
                startCounter();
            }
        });
    }, {
        threshold: 0.5
    });

    observer.observe(document.querySelector('#achievements'));
</script>



</html>