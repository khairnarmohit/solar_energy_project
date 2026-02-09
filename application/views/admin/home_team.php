<h3 class="mb-4">Team Section</h3>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-lg-10 mx-auto">

      <!-- ===== FORM ===== -->
      <div style="background:#fff;border-radius:6px;overflow:hidden;margin-bottom:30px;">

        <!-- ORANGE HEADER -->
        <div style="background:#ff7a00;color:#fff;padding:14px 20px;font-size:18px;font-weight:600;">
          Add Team Member
        </div>

        <!-- BODY -->
        <div style="padding:25px;">

          <form method="post"
                action="<?= base_url('about/add_team') ?>"
                enctype="multipart/form-data">

            <div class="mb-3">
              <label>Name</label>
              <input type="text"
                     name="name"
                     class="form-control"
                     placeholder="Enter member name"
                     required>
            </div>

            <div class="mb-3">
              <label>Role</label>
              <input type="text"
                     name="role"
                     class="form-control"
                     placeholder="Enter role"
                     required>
            </div>

            <div class="mb-3">
              <label>Experience</label>
              <input type="text"
                     name="experience"
                     class="form-control"
                     placeholder="e.g. 5 Years"
                     required>
            </div>

            <div class="mb-4">
              <label>Image</label>
              <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-warning px-4">
              Save Member
            </button>

          </form>

        </div>
      </div>

      <!-- ===== TABLE ===== -->
      <div style="background:#fff;border-radius:6px;padding:20px;">

        <div class="table-responsive">
          <table class="table table-bordered align-middle">
            <thead style="background:#f2f2f2;">
              <tr>
                <th width="60">#</th>
                <th width="120">Image</th>
                <th>Name</th>
                <th>Role</th>
                <th>Experience</th>
                <th width="180">Action</th>
              </tr>
            </thead>

            <tbody>
            <?php if(!empty($team)){ $i=1; foreach($team as $t){ ?>
              <tr>
                <td><?= $i++; ?></td>

                <!-- IMAGE -->
                <td>
                  <?php if(!empty($t->image)){ ?>
                    <img src="<?= base_url('uploads/'.$t->image) ?>"
                         style="width:90px;border-radius:4px;">
                  <?php } else { ?>
                    -
                  <?php } ?>
                </td>

                <td><strong><?= $t->name ?></strong></td>
                <td><?= $t->role ?></td>
                <td><?= $t->experience ?></td>

                <td>
                  <a href="<?= base_url('about/edit/team_members/'.$t->id.'/edit_team') ?>"
                     class="btn btn-sm btn-primary mb-1">
                    Edit
                  </a>

                  <a href="<?= base_url('about/delete/team_members/'.$t->id.'/about/home_team') ?>"
                     class="btn btn-sm btn-danger"
                     onclick="return confirm('Delete this record?')">
                    Delete
                  </a>
                </td>
              </tr>
            <?php }} else { ?>
              <tr>
                <td colspan="6" class="text-center">No team data found</td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>

      </div>

    </div>
  </div>
</div>
