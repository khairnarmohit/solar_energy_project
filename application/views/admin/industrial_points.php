<h3 class="mb-4 text-orange fw-bold">Industrial Points</h3>

<div class="card shadow-sm border-0">

  <div class="card-header bg-orange text-white fw-semibold">
    Manage Industrial Points
  </div>

  <div class="card-body">

    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th width="60">#</th>
            <th>Point</th>
            <th width="120" class="text-center">Action</th>
          </tr>
        </thead>

        <tbody>
        <?php if(!empty($points)){ foreach($points as $i=>$p){ ?>
          <tr>
            <td><?= $i+1 ?></td>

            <!-- UPDATE -->
            <td>
              <form method="post"
                    action="<?= base_url('industrial/update_point/'.$p->id) ?>"
                    class="d-flex gap-2">

                <input type="text"
                       name="point"
                       value="<?= $p->point ?>"
                       class="form-control form-control-sm"
                       required>

                <button class="btn btn-sm btn-orange">
                  Update
                </button>
              </form>
            </td>

            <!-- DELETE -->
            <td class="text-center">
              <a href="<?= base_url('industrial/delete_point/'.$p->id) ?>"
                 class="btn btn-sm btn-danger"
                 onclick="return confirm('Delete this point?')">
                 Delete
              </a>
            </td>

          </tr>
        <?php }} else { ?>
          <tr>
            <td colspan="3" class="text-center text-muted">No data found</td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>

    <!-- ADD -->
    <form method="post"
          action="<?= base_url('industrial/add_point') ?>"
          class="row g-2 mt-4">

      <div class="col-12 col-md-9">
        <input type="text"
               name="point"
               class="form-control"
               placeholder="Enter new point"
               required>
      </div>

      <div class="col-12 col-md-3 d-grid">
        <button class="btn btn-orange">Add Point</button>
      </div>

    </form>

  </div>
</div>

<style>
.bg-orange{ background:#ff7a00 !important; }
.text-orange{ color:#ff7a00 !important; }
.btn-orange{
  background:#ff7a00;
  color:#fff;
  border:none;
}
.btn-orange:hover{
  background:#e56e00;
  color:#fff;
}
</style>
