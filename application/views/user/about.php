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
      <h1 class="title">Our Brand</h1>
      <p>To make our future more vibrant and sustainable by using green energy.</p>
      <p>We are committed to delivering high-efficiency solar products globally.</p>
      <p>Targeting 9 GW production capacity by 2025.</p>
    </div>

    <!-- IMAGE -->
    <div class="col-12 col-md-6 text-center">
      <div class="image-card">
        <img src="<?= base_url('assets/image/about_brand_img.png') ?>"
             class="img-fluid" alt="Our Brand">
      </div>
    </div>

  </div>
</section>
<section class="container-fluid vision-section py-5"
    data-aos="zoom-in-up">

  <div class="row align-items-center g-3">


 
    <!-- IMAGE -->
    <div class="col-12 col-md-6 text-center">
      <div class="image-card">
        <img src="<?= base_url('assets/image/about_brand_img.png') ?>"
             class="img-fluid" alt="Our Brand">
      </div>
    </div>
       <!-- TEXT -->
    <div class="col-12 col-md-6">
      <h1 class="title">Our Brand</h1>
      <p>To make our future more vibrant and sustainable by using green energy.</p>
      <p>We are committed to delivering high-efficiency solar products globally.</p>
      <p>Targeting 9 GW production capacity by 2025.</p>
    </div>


  </div>
</section>


<section class="team-ui" data-aos="fade-up">
  <div class="container">

    <h2 class="team-title">Meet Our Team</h2>

    <div class="team-row">

      <!-- CARD 1 -->
      <div class="team-card-new">
        <div class="team-img-wrap">
          <img src="<?= base_url('assets/image/man1.jpg') ?>" alt="John Doe">
        </div>
        <h4 class="team-name">Pavan Mohite</h4>
        <div class="line"></div>
        <p class="team-role">Chief Executive Officer</p>
        <div class="line small"></div>
        <p class="team-exp">15+ Years Experience</p>
      </div>

      <!-- CARD 2 -->
      <div class="team-card-new">
        <div class="team-img-wrap">
          <img src="<?= base_url('assets/image/man2.jpg') ?>" alt="Rahul Sharma">
        </div>
        <h4 class="team-name">Rahul Sharma</h4>
        <div class="line"></div>
        <p class="team-role">Technical Director</p>
        <div class="line small"></div>
        <p class="team-exp">12+ Years Experience</p>
      </div>

      <!-- CARD 3 -->
      <div class="team-card-new">
        <div class="team-img-wrap">
          <img src="<?= base_url('assets/image/man3.jpg') ?>" alt="Amit Patil">
        </div>
        <h4 class="team-name">Amit Patil</h4>
        <div class="line"></div>
        <p class="team-role">Project Manager</p>
        <div class="line small"></div>
        <p class="team-exp">10+ Years Experience</p>
      </div>

    </div>
  </div>
</section>




<!-- Business Verticals -->
<section class="container-fluid py-5 business_verticals" data-aos="fade-up" data-aos-duration="1000">

    <!-- Title -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Business Verticals</h2>
    </div>

    <!-- Cards Row -->
    <div class="row g-4 px-4 px-lg-5">

        <div class="col-12 col-md-4">
            <div class="card rounded-4" style="width: 22rem;">
                <img src="<?= base_url('assets/image/vertical1.jpg') ?>" class="card-img-top rounded-3" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card rounded-4" style="width: 22rem;">
                <img src="<?= base_url('assets/image/vertical1.jpg') ?>" class="card-img-top rounded-3" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card rounded-4" style="width: 22rem;">
                <img src="<?= base_url('assets/image/vertical1.jpg') ?>" class="card-img-top rounded-3" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
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