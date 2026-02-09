<h3 class="mb-4">Brand Section</h3>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-lg-10 mx-auto">

      <!-- ===== FORM ===== -->
      <div style="
        background:#fff;
        border-radius:6px;
        overflow:hidden;
        margin-bottom:30px;
      ">

        <!-- ORANGE HEADER -->
        <div style="
          background:#ff7a00;
          color:#fff;
          padding:14px 20px;
          font-size:18px;
          font-weight:600;
        ">
          Add Brand
        </div>

        <!-- BODY -->
        <div style="padding:25px;">

          <form method="post"
                action="<?= base_url('about/add_brand') ?>"
                enctype="multipart/form-data">

            <div class="mb-3">
              <label>Brand Title</label>
              <input type="text"
                     name="title"
                     class="form-control"
                     placeholder="Enter brand title"
                     required>
            </div>

            <div class="mb-3">
              <label>Description</label>
              <textarea name="description"
                        class="form-control"
                        placeholder="Enter brand description"
                        rows="4"
                        required></textarea>
            </div>

            <div class="mb-4">
              <label>Image</label>
              <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-warning px-4">
              Save Brand
            </button>

          </form>

        </div>
      </div>

      <!-- ===== TABLE ===== -->
      <div style="
        background:#fff;
        border-radius:6px;
        padding:20px;
      ">

        <table class="table table-bordered align-middle">
          <thead style="background:#f2f2f2;">
            <tr>
              <th width="60">#</th>
              <th width="120">Image</th>
              <th>Brand Title</th>
              <th>Description</th>
              <th width="180">Action</th>
            </tr>
          </thead>

          <tbody>
          <?php if(!empty($brand)){ $i=1; foreach($brand as $b){ ?>
            <tr>
              <!-- SERIAL -->
              <td><?= $i++; ?></td>

              <!-- IMAGE -->
              <td>
                <?php if(!empty($b->image)){ ?>
                  <img src="<?= base_url('uploads/'.$b->image) ?>"
                       style="width:90px;border-radius:4px;">
                <?php } else { ?>
                  -
                <?php } ?>
              </td>

              <!-- TITLE -->
              <td><strong><?= $b->title ?></strong></td>

              <!-- DESCRIPTION -->
              <td><?= $b->description ?></td>

              <!-- ACTION -->
              <td>
                <a href="<?= base_url('about/edit/about_brand/'.$b->id.'/edit_brand') ?>"
                   class="btn btn-sm btn-primary mb-1">
                  Edit
                </a>

                <a href="<?= base_url('about/delete/about_brand/'.$b->id.'/about/home_brand') ?>"
                   class="btn btn-sm btn-danger"
                   onclick="return confirm('Delete this record?')">
                  Delete
                </a>
              </td>
            </tr>
          <?php }} else { ?>
            <tr>
              <td colspan="5" class="text-center">No data found</td>
            </tr>
          <?php } ?>
          </tbody>
        </table>

      </div>

    </div>
  </div>
</div>
