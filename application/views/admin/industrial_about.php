<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">

  <!-- PAGE TITLE -->
  <h3 class="mb-4 fw-bold text-orange">
    Industrial About Section
  </h3>

  <!-- ================= FLASH MESSAGES ================= -->
  <?php if($this->session->flashdata('error')){ ?>
    <div class="alert alert-danger">
      <?= $this->session->flashdata('error') ?>
    </div>
  <?php } ?>

  <?php if($this->session->flashdata('success')){ ?>
    <div class="alert alert-success">
      <?= $this->session->flashdata('success') ?>
    </div>
  <?php } ?>

  <!-- ================= UPDATE ABOUT ================= -->
  <div class="card shadow-sm border-0 mb-4">

    <!-- ORANGE HEADER -->
    <div class="card-header bg-orange text-white fw-semibold">
      Update Industrial About (Active)
    </div>

    <div class="card-body">

      <!-- INFO -->
      <div class="alert alert-warning mb-4">
        This section is <b>Active</b>. You can update description or image anytime.
      </div>

      <form method="post"
            action="<?= base_url('industrial/update_about') ?>"
            enctype="multipart/form-data">

        <!-- DESCRIPTION -->
        <div class="mb-3">
          <label class="form-label fw-semibold">Description</label>
          <textarea name="description"
                    rows="5"
                    class="form-control"
                    placeholder="Enter industrial about description"
                    required><?= $about->description ?></textarea>
        </div>

        <!-- CURRENT IMAGE -->
        <div class="mb-3">
          <label class="form-label fw-semibold">Current Image</label><br>

         <?php
if (!empty($about->image) && 
    file_exists(FCPATH.'uploads/'.$about->image)) {
?>
    <img src="<?= base_url('uploads/'.$about->image) ?>?v=<?= time() ?>"
         class="img-thumbnail shadow-sm mt-2"
         style="max-width:180px; object-fit:cover;">
<?php } else { ?>
    <span class="text-muted">No image uploaded</span>
<?php } ?>


        <!-- CHANGE IMAGE -->
        <div class="mb-3">
          <label class="form-label fw-semibold">Change Image</label>
          <input type="file"
                 name="image"
                 class="form-control"
                 accept=".jpg,.jpeg,.png,.webp">
        </div>

        <!-- SUBMIT -->
        <button class="btn btn-orange px-4">
          <i class="bi bi-save"></i> Update About
        </button>

      </form>
    </div>
  </div>

  <!-- ================= ACTIVE RECORD VIEW ================= -->
  <div class="card shadow-sm border-0">
    <div class="card-header bg-light fw-semibold">
      Active Industrial About
    </div>

    <div class="card-body p-0">
      <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th width="60">#</th>
            <th width="140">Image</th>
            <th>Description</th>
            <th width="120">Status</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>

            <td>
              <?php
                if (
                  !empty($about->image) &&
                  file_exists(FCPATH.'uploads/'.$about->image)
                ) {
              ?>
                <img src="<?= base_url('uploads/'.$about->image) ?>?v=<?= time() ?>"
                     class="rounded shadow-sm"
                     style="width:90px">
              <?php } else { ?>
                <span class="text-muted">No Image</span>
              <?php } ?>
            </td>

            <td>
              <?= !empty($about->description)
                    ? word_limiter($about->description, 20)
                    : '<span class="text-muted">No description</span>' ?>
            </td>

            <td>
              <span class="badge bg-success px-3 py-2">
                Active
              </span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

<!-- ================= CUSTOM ORANGE THEME + FRONTEND CSS ================= -->
<style>

/* ORANGE THEME */
.bg-orange{
  background:#ff7a00 !important;
}
.btn-orange{
  background:#ff7a00;
  color:#fff;
  border:none;
}
.btn-orange:hover{
  background:#e96f00;
  color:#fff;
}
.text-orange{
  color:#ff7a00;
}

/* HERO */
.ind-hero{
  background:
    linear-gradient(rgba(0,0,0,.65), rgba(0,0,0,.65)),
    url("../image/industrial.webp") center/cover no-repeat;
  height:75vh;
  display:flex;
  align-items:center;
  justify-content:center;
  text-align:center;
}
.ind-hero h1{
  color:#fff;
  font-size:48px;
  font-weight:800;
}
.ind-hero p{
  color:#f1f1f1;
  font-size:18px;
}

/* ABOUT */
.ind-about{
  padding:80px 0;
  background:#f8fafc;
}
.ind-grid{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:50px;
  align-items:center;
}
.ind-text p{
  font-size:16px;
  line-height:1.7;
}
.ind-image img{
  width:100%;
  border-radius:16px;
  box-shadow:0 20px 40px rgba(0,0,0,.2);
}

/* CAPABILITIES */
.ind-capabilities{
  padding:70px 0;
}
.capability-grid{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:20px;
}
.capability-box{
  background:#fff;
  padding:25px;
  border-radius:14px;
  text-align:center;
  font-weight:600;
  box-shadow:0 10px 25px rgba(0,0,0,.12);
}

/* WHY CHOOSE */
.ind-why{
  padding:70px 0;
  background:#0b2c4d;
  color:#fff;
}
.why-grid{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:20px;
}
.why-box{
  background:rgba(255,255,255,.12);
  padding:25px;
  border-radius:14px;
  text-align:center;
  font-weight:600;
}

</style>
