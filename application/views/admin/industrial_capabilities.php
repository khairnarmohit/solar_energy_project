<h3 class="mb-4 text-orange fw-bold">Industrial Capabilities</h3>

<div class="card shadow-sm border-0">

  <!-- ORANGE HEADER -->
  <div class="card-header bg-orange text-white fw-semibold">
    Manage Industrial Capabilities
  </div>

  <div class="card-body">

    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th width="60">#</th>
            <th>Capability</th>
            <th width="120" class="text-center">Action</th>
          </tr>
        </thead>

        <tbody>
        <?php if(!empty($capabilities)){ foreach($capabilities as $i=>$c){ ?>
          <tr>
            <td><?= $i+1 ?></td>

            <!-- UPDATE FORM -->
            <td>
              <form method="post"
                    action="<?= base_url('industrial/update_capability/'.$c->id) ?>"
                    class="d-flex gap-2">

                <input type="text"
                       name="title"
                       value="<?= $c->title ?>"
                       class="form-control form-control-sm"
                       required>

                <button class="btn btn-sm btn-orange">
                  Update
                </button>
              </form>
            </td>

            <!-- DELETE -->
            <td class="text-center">
              <a href="<?= base_url('industrial/delete_capability/'.$c->id) ?>"
                 class="btn btn-sm btn-danger"
                 onclick="return confirm('Delete this capability?')">
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

    <!-- ADD NEW CAPABILITY -->
    <form method="post"
          action="<?= base_url('industrial/add_capability') ?>"
          class="row g-2 mt-4">

      <div class="col-12 col-md-9">
        <input type="text"
               name="title"
               class="form-control"
               placeholder="Enter new capability"
               required>
      </div>

      <div class="col-12 col-md-3 d-grid">
        <button class="btn btn-orange">Add Capability</button>
      </div>

    </form>

  </div>
</div>

<!-- ORANGE THEME CSS -->
<style>
.bg-orange{
  background:#ff7a00 !important;
}
.text-orange{
  color:#ff7a00 !important;
}
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
