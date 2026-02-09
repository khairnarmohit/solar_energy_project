<h3 class="mb-4">About Hero</h3>

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
          Add About Hero
        </div>

        <!-- BODY -->
        <div style="padding:25px;">

          <form method="post"
                action="<?= base_url('about/add_hero') ?>"
                enctype="multipart/form-data">

            <div class="mb-3">
              <label>Hero Title</label>
              <input type="text"
                     name="title"
                     class="form-control"
                     placeholder="Enter hero title"
                     required>
            </div>

            <div class="mb-3">
              <label>Background Image 1</label>
              <input type="file" name="bg1" class="form-control">
            </div>

            <div class="mb-3">
              <label>Background Image 2</label>
              <input type="file" name="bg2" class="form-control">
            </div>

            <div class="mb-4">
              <label>Background Image 3</label>
              <input type="file" name="bg3" class="form-control">
            </div>

            <button type="submit" class="btn btn-warning px-4">
              Save Hero
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
              <th>Title</th>
              <th width="120">BG 1</th>
              <th width="120">BG 2</th>
              <th width="120">BG 3</th>
              <th width="180">Action</th>
            </tr>
          </thead>

          <tbody>
          <?php if(!empty($hero)){ $i=1; foreach($hero as $h){ ?>
            <tr>
              <!-- SERIAL -->
              <td><?= $i++; ?></td>

              <!-- TITLE -->
              <td><strong><?= $h->title ?></strong></td>

              <!-- BG IMAGES -->
              <td>
                <?php if(!empty($h->bg1)){ ?>
                  <img src="<?= base_url('assets/image/'.$h->bg1) ?>"
                       style="width:90px;border-radius:4px;">
                <?php } else { ?> - <?php } ?>
              </td>

              <td>
                <?php if(!empty($h->bg2)){ ?>
                  <img src="<?= base_url('assets/image/'.$h->bg2) ?>"
                       style="width:90px;border-radius:4px;">
                <?php } else { ?> - <?php } ?>
              </td>

              <td>
                <?php if(!empty($h->bg3)){ ?>
                  <img src="<?= base_url('assets/image/'.$h->bg3) ?>"
                       style="width:90px;border-radius:4px;">
                <?php } else { ?> - <?php } ?>
              </td>

              <!-- ACTION -->
              <td>
                <a href="<?= base_url('about/edit/about_hero/'.$h->id.'/edit_hero') ?>"
                   class="btn btn-sm btn-primary mb-1">
                  Edit
                </a>

                <a href="<?= base_url('about/delete/about_hero/'.$h->id.'/about/about') ?>"
                   class="btn btn-sm btn-danger"
                   onclick="return confirm('Delete this hero?')">
                  Delete
                </a>
              </td>
            </tr>
          <?php }} else { ?>
            <tr>
              <td colspan="6" class="text-center">No hero data found</td>
            </tr>
          <?php } ?>
          </tbody>
        </table>

      </div>

    </div>
  </div>
</div>
