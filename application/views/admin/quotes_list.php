<!DOCTYPE html>
<html>
<head>
    <title>Quote Requests</title>
</head>
<body>
<?php if($this->session->flashdata('success')) { ?>
    <div class="alert shadow-sm mt-3 text-white"
         style="background: linear-gradient(45deg, #28a745, #20c997); border-radius:8px;">
        <i class="fa fa-check-circle"></i>
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php } ?>

<div class="container mt-4">
    <h3 class="mb-4">Quote Requests</h3>

    <table class="table table-bordered table-striped">
        <thead class="" style="background-color:orange;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Service</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        <?php if(!empty($quotes)) { ?>
            <?php foreach($quotes as $q) { ?>
                <tr>
                    <td><?= $q->id ?></td>
                    <td><?= $q->name ?></td>
                    <td><?= $q->phone ?></td>
                    <td><?= $q->service_type ?></td>
                    <td>
                        <span class="badge bg-success"><?= $q->status ?></span>
                    </td>
                    <td><?= date('d-m-Y', strtotime($q->created_at)) ?></td>
                    <td>
                  <a href="<?= site_url('admin/delete_quote/'.$q->id) ?>"
                     class="btn btn-danger btn-sm"
                     onclick="return confirm('Are you sure you want to delete this quote?')">
                     Delete
                  </a>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="7" class="text-center">No Quotes Found</td>
            </tr>
        <?php } ?>

        </tbody>
    </table>
</div>

</body>
</html>

<script>
setTimeout(function(){
    const alertBox = document.querySelector('.alert');
    if(alertBox){
        alertBox.style.display = 'none';
    }
}, 3000);
</script>

