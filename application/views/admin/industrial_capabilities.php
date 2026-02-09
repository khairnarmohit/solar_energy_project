<h3 class="mb-4">Industrial Capabilities</h3>

<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle text-nowrap">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Capability</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>

        <tbody>
        <?php if(!empty($capabilities)){ foreach($capabilities as $i=>$c){ ?>
          <tr>
            <td><?= $i+1 ?></td>
            <td><?= $c->title ?></td>
            <td class="text-center">
              <a href="<?= base_url('admin/industrial/delete_capability/'.$c->id) ?>"
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

    <form method="post"
          action="<?= base_url('admin/industrial/add_capability') ?>"
          class="row g-2 mt-3">
      <div class="col-12 col-md-9">
        <input type="text" name="title" class="form-control" placeholder="New capability" required>
      </div>
      <div class="col-12 col-md-3 d-grid">
        <button class="btn btn-success">Add</button>
      </div>
    </form>
  </div>
</div>
