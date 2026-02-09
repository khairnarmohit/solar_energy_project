<h3 class="mb-4">Vision Section</h3>

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
          Add Vision
        </div>

        <!-- BODY -->
        <div style="padding:25px;">

          <form method="post"
                action="<?= base_url('about/add_vision') ?>"
                enctype="multipart/form-data">

            <div class="mb-3">
              <label>Vision Title</label>
              <input type="text"
                     name="title"
                     class="form-control"
                     placeholder="Enter vision title"
                     required>
            </div>

            <div class="mb-3">
              <label>Description</label>
              <textarea name="description"
                        class="form-control"
                        placeholder="Enter vision description"
                        rows="4"
                        required></textarea>
            </div>

            <div class="mb-4">
              <label>Image</label>
              <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-warning px-4">
              Save Vision
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
      <th width="120">Image</th>
      <th>Vision Title</th>
      <th>Description</th>
      <th width="180">Action</th>
    </tr>
  </thead>

  <tbody>
  <?php if(!empty($vision)){ foreach($vision as $v){ ?>
    <tr>
      <!-- IMAGE -->
      <td>
        <?php if(!empty($v->image)){ ?>
          <img src="<?= base_url('uploads/'.$v->image) ?>"
               style="width:90px;border-radius:4px;">
        <?php } else { ?>
          -
        <?php } ?>
      </td>

      <!-- TITLE -->
      <td>
        <strong><?= $v->title ?></strong>
      </td>

      <!-- DESCRIPTION -->
      <td>
        <?= $v->description ?>
      </td>

      <!-- ACTION -->
      <td>
        <a href="<?= base_url('about/edit/about_vision/'.$v->id.'/edit_vision') ?>"
           class="btn btn-sm btn-primary mb-1">
          Edit
        </a>

        <a href="<?= base_url('about/delete/about_vision/'.$v->id.'/about/home_vision') ?>"
           class="btn btn-sm btn-danger"
           onclick="return confirm('Delete this record?')">
          Delete
        </a>
      </td>
    </tr>
  <?php }} else { ?>
    <tr>
      <td colspan="4" class="text-center">No data found</td>
    </tr>
  <?php } ?>
  </tbody>
</table>

</div>


    </div>
  </div>
</div>
