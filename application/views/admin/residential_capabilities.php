<h3 class="mb-4 text-orange fw-bold">Residential Benefits</h3>

<div class="card shadow-sm border-0">
  <div class="card-header bg-orange text-white fw-semibold">
    Manage Residential Benefits
  </div>

  <div class="card-body">

    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th width="60">#</th>
            <th>Benefit</th>
            <th width="120" class="text-center">Action</th>
          </tr>
        </thead>

        <tbody>
        <?php if(!empty($capabilities)){ foreach($capabilities as $i=>$c){ ?>
          <tr>
            <td><?= $i+1 ?></td>

            <td>
              <form method="post"
                    action="<?= base_url('residential/update_capability/'.$c->id) ?>"
                    class="d-flex gap-2">

                <input type="text"
                       name="title"
                       value="<?= $c->title ?>"
                       class="form-control form-control-sm"
                       required>

                <button class="btn btn-sm btn-orange">Update</button>
              </form>
            </td>

            <td class="text-center">
              <a href="<?= base_url('residential/delete_capability/'.$c->id) ?>"
                 class="btn btn-sm btn-danger"
                 onclick="return confirm('Delete this benefit?')">
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

    <!-- ADD NEW -->
    <form method="post"
          action="<?= base_url('residential/add_capability') ?>"
          class="row g-2 mt-4">

      <div class="col-12 col-md-9">
        <input type="text"
               name="title"
               class="form-control"
               placeholder="Enter new benefit"
               required>
      </div>

      <div class="col-12 col-md-3 d-grid">
        <button class="btn btn-orange">Add Benefit</button>
      </div>

    </form>

  </div>
</div>
