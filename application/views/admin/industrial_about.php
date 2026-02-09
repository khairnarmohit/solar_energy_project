<div class="container-fluid">
  <h3 class="mb-4">Industrial About Section</h3>

  <!-- ABOUT UPDATE -->
  <div class="card mb-4">
    <div class="card-header fw-bold">Update About</div>
    <div class="card-body">

      <form method="post"
            action="<?= base_url('admin/industrial/update_about/'.$about->id) ?>"
            enctype="multipart/form-data">

        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea name="description"
                    rows="5"
                    class="form-control"
                    required><?= $about->description ?></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Current Image</label><br>
          <?php if(!empty($about->image)){ ?>
            <img src="<?= base_url('uploads/'.$about->image) ?>"
                 width="140"
                 class="rounded border p-1">
          <?php } else { ?>
            <span class="text-muted">No image</span>
          <?php } ?>
        </div>

        <div class="mb-3">
          <label class="form-label">Change Image</label>
          <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-primary px-4">Update About</button>
      </form>

    </div>
  </div>
    