<footer class="site-footer">

  <div class="footer-container">

    <!-- BRAND -->
    <div class="footer-box footer-brand">
      <h3>convex<span>solar</span></h3>
      <p>
        Convex Solar provides reliable, affordable and sustainable solar
        energy solutions for residential, commercial and industrial customers.
      </p>
    </div>

    <!-- QUICK LINKS -->
    <div class="footer-box">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="<?= base_url('user/index') ?>">Home</a></li>
        <li><a href="<?= base_url('user/about') ?>">About Us</a></li>
        <li><a href="<?= base_url('user/services') ?>">Services</a></li>
        <li><a href="<?= base_url('user/product') ?>">Products</a></li>
        <li><a href="<?= base_url('user/contact') ?>">Contact</a></li>
      </ul>
    </div>

    <!-- SERVICES -->
    <div class="footer-box">
      <h4>Our Services</h4>
      <ul>
        <li>Residential Solar</li>
        <li>Commercial Solar</li>
        <li>Industrial Solar</li>
        <li>On-Grid Solar</li>
      </ul>
    </div>

    <!-- CONTACT -->
    <div class="footer-box">
      <h4>Contact Info</h4>
      <p>Pune, Maharashtra</p>
      <p>+91 9XXXXXXXXX</p>
      <p>info@convexsolar.com</p>
    </div>

  </div>

  <!-- BOTTOM -->
  <div class="footer-bottom">
    © <?= date('Y') ?> Convex Solar. All Rights Reserved.
  </div>

</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- Get Quote Modal -->
<!-- Get Quote Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Get a Quote</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <!-- Success / Error Message -->
        <div id="formMessage"></div>

        <form id="quoteForm" novalidate>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Name *</label>
              <input type="text" class="form-control" name="name">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Email *</label>
              <input type="email" class="form-control" name="email">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Phone *</label>
              <input type="text" class="form-control" name="phone">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Service Type *</label>
              <select class="form-control" name="service">
                <option value="">Select Service</option>
                <option value="residential">Residential</option>
                <option value="commercial">Commercial</option>
                <option value="industrial">Industrial</option>
                <option value="solar_water_heater">Solar Water Heater</option>
                <option value="solar_water_pump">Solar Water Pump</option>
                <option value="on_grid_solar">On Grid Solar</option>
                <option value="solar_street_light">Solar Street Light</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Quantity Of Product</label>
            <input type="number" class="form-control" name="quantity" value="1" min="1">
            <small class="text-muted">Optional for solar services leave blank</small>
          </div>

          <div class="mb-3">
            <label class="form-label">How Did You Come To Know About Convex Solar? *</label>
            <select class="form-control" name="source">
              <option value="">Select</option>
              <option value="Casual Internet Surfing">Casual Internet Surfing</option>
              <option value="Outdoor Advertisement">Outdoor Advertisement</option>
              <option value="Social Media">Social Media</option>
              <option value="Reference">Reference</option>
              <option value="Our Executive">Our Executive</option>
              <option value="Newspaper Advertisement">Newspaper Advertisement</option>
              <option value="Others">Others</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea class="form-control" name="message" rows="3"
              placeholder="Tell us more about your requirements..."></textarea>
          </div>

        </form>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        <button type="button" id="submitBtn" onclick="submitQuote()" class="btn btn-primary">
          <span id="btnText">Submit Quote Request</span>
          <span id="btnSpinner" class="spinner-border spinner-border-sm d-none"></span>
        </button>
      </div>

    </div>
  </div>
</div>
<!-- WhatsApp Floating Button -->
<a href="https://api.whatsapp.com/send?phone=9850400900&text=Hi%2C%20I%20want%20to%20know%20about%20your%20services"
   target="_blank"
   class="whatsapp-float">

   <i class="fa-brands fa-whatsapp"></i>
   <span class="whatsapp-text">Connect with us</span>
</a>

<?php if($this->session->flashdata('success')) { ?>
    <div style="color:green;">
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php } ?>

<?php if($this->session->flashdata('error')) { ?>
    <div style="color:red;">
        <?= $this->session->flashdata('error'); ?>
    </div>
<?php } ?>


</body>
</html>

<script>
function submitQuote() {

    const form = document.getElementById('quoteForm');
    const formData = new FormData(form);
    const messageBox = document.getElementById('formMessage');
    const submitBtn = document.getElementById('submitBtn');
    const spinner = document.getElementById('btnSpinner');
    const btnText = document.getElementById('btnText');

    let isValid = true;
    messageBox.innerHTML = "";
    document.querySelectorAll('.error-msg').forEach(e => e.remove());

    function showError(input, message) {
        const error = document.createElement('div');
        error.className = 'text-danger error-msg mt-1';
        error.innerText = message;
        input.parentNode.appendChild(error);
        isValid = false;
    }

    const name = form.querySelector('[name="name"]');
    const email = form.querySelector('[name="email"]');
    const phone = form.querySelector('[name="phone"]');
    const service = form.querySelector('[name="service"]');
    const source = form.querySelector('[name="source"]');

    if (name.value.trim() === '') showError(name, "Name is required");

    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,}$/;
    if (email.value.trim() === '') {
        showError(email, "Email is required");
    } else if (!emailPattern.test(email.value.trim())) {
        showError(email, "Enter valid email");
    }

    if (phone.value.trim() === '') {
        showError(phone, "Phone number is required");
    } else if (phone.value.trim().length < 10) {
        showError(phone, "Enter valid phone number");
    }

    if (service.value === '') showError(service, "Please select service type");
    if (source.value === '') showError(source, "Please select source");

    if (!isValid) return;

    spinner.classList.remove('d-none');
    btnText.innerText = "Submitting...";
    submitBtn.disabled = true;

    fetch("<?= site_url('user/save_quote') ?>", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {

        messageBox.innerHTML = `
            <div class="alert alert-success">
                ${data}
            </div>
        `;

        form.reset();

        setTimeout(() => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('quoteModal'));
            modal.hide();
            messageBox.innerHTML = "";
        }, 2000);
    })
    .catch(() => {
        messageBox.innerHTML = `
            <div class="alert alert-danger">
                Something went wrong!
            </div>
        `;
    })
    .finally(() => {
        spinner.classList.add('d-none');
        btnText.innerText = "Submit Quote Request";
        submitBtn.disabled = false;
    });
}
</script>
