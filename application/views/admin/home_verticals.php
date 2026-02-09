<h3 class="mb-4">Business Verticals</h3>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-lg-10 mx-auto">

      <!-- ===== ADD FORM ===== -->
      <div style="background:#fff;border-radius:6px;overflow:hidden;margin-bottom:30px;">

        <div style="background:#ff7a00;color:#fff;padding:14px 20px;font-size:18px;font-weight:600;">
          Add Business Vertical
        </div>

        <div style="padding:25px;">
          <form method="post"
                action="<?= base_url('about/add_vertical') ?>"
                enctype="multipart/form-data">

            <div class="mb-3">
              <label>Title</label>
              <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Description</label>
              <textarea name="description" class="form-control" rows="4" required></textarea>
            </div>

            <div class="mb-3">
              <label>Color</label>
              <input type="text" name="color" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Image 1</label>
              <input type="file" name="image1" class="form-control">
            </div>

           

            <button type="submit" class="btn btn-warning px-4">
              Save Vertical
            </button>
          </form>
        </div>
      </div>

      <!-- ===== TABLE ===== -->
      <div style="background:#fff;border-radius:6px;padding:20px;">

        <table class="table table-bordered align-middle text-center">
          <thead style="background:#f2f2f2;">
            <tr>
              <th width="60">#</th>
              <th width="100">Image 1</th>
            
              <th>Title</th>
              <th>Description</th>
              <th width="90">Color</th>
              <th width="180">Action</th>
            </tr>
          </thead>

          <tbody>
          <?php if(!empty($verticals)){ $i=1; foreach($verticals as $v){ ?>
            <tr>
              <td><?= $i++; ?></td>

              <td>
                <?php if(!empty($v->image1)){ ?>
                  <img src="<?= base_url('uploads/'.$v->image1) ?>" class="tbl-img">
                <?php } else { echo '-'; } ?>
              </td>

             

              <td><strong><?= $v->title ?></strong></td>
              <td><?= $v->description ?></td>
              <td><?= $v->color ?></td>

              <td>
                <a href="<?= base_url('about/edit/business_verticals/'.$v->id.'/edit_vertical') ?>"
                   class="btn btn-sm btn-primary mb-1">Edit</a>

                <a href="<?= base_url('about/delete/business_verticals/'.$v->id.'/about/home_verticals') ?>"
                   class="btn btn-sm btn-danger"
                   onclick="return confirm('Delete this record?')">Delete</a>
              </td>
            </tr>
          <?php }} else { ?>
            <tr>
              <td colspan="8" class="text-center">No vertical data found</td>
            </tr>
          <?php } ?>
          </tbody>
        </table>

      </div>

    </div>
  </div>
</div>

<style>
.tbl-img{
  width:70px;
  height:70px;
  object-fit:cover;
  border-radius:6px;
  border:1px solid #ddd;
}
</style>
