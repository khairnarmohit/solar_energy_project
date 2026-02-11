<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">

  <h3 class="mb-4 fw-bold text-orange">
    Residential About Section
  </h3>

  <!-- FLASH MESSAGE -->
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

  <!-- UPDATE CARD -->
  <div class="card shadow-sm border-0 mb-4">

    <div class="card-header bg-orange text-white fw-semibold">
      Update Residential About (Active)
    </div>

    <div class="card-body">

      <div class="alert alert-warning mb-4">
        This section is <b>Active</b>. You can update description or image anytime.
      </div>

      <form method="post"
            action="<?= base_url('residential/update_residential_about') ?>"
            enctype="multipart/form-data">

        <!-- DESCRIPTION -->
        <div class="mb-3">
          <label class="form-label fw-semibold">Description</label>
          <textarea name="description"
                    rows="5"
                    class="form-control"
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
        </div>

        <!-- CHANGE IMAGE -->
        <div class="mb-3">
          <label class="form-label fw-semibold">Change Image</label>
          <input type="file"
                 name="image"
                 class="form-control"
                 accept=".jpg,.jpeg,.png,.webp">
        </div>

        <button class="btn btn-orange px-4">
          Update About
        </button>

      </form>
    </div>
  </div>

  <!-- ACTIVE VIEW -->
  <div class="card shadow-sm border-0">
    <div class="card-header bg-light fw-semibold">
      Active Residential About
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
              if (!empty($about->image) &&
                  file_exists(FCPATH.'uploads/'.$about->image)) {
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

<style>
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
</style>
