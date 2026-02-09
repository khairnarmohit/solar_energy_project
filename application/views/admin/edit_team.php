<style>
.edit-wrap{
  max-width:1000px;
  margin:30px auto;
  background:#fff;
  border-radius:6px;
  overflow:hidden;
  box-shadow:0 2px 8px rgba(0,0,0,0.08);
}

/* ORANGE HEADER */
.edit-header{
  background:#ff7a00;
  color:#fff;
  padding:16px 24px;
  font-size:20px;
  font-weight:600;
}

/* BODY */
.edit-body{
  padding:30px;
}

.edit-body label{
  font-weight:600;
  margin-bottom:6px;
  display:block;
}

.edit-body input{
  width:100%;
  padding:12px 14px;
  border:1px solid #dcdcdc;
  border-radius:6px;
  margin-bottom:18px;
}

.edit-body img{
  width:120px;
  border-radius:6px;
  margin:10px 0 18px;
  border:1px solid #eee;
}

.btn-orange{
  background:#ff7a00;
  color:#fff;
  border:none;
  padding:10px 26px;
  border-radius:6px;
  font-weight:600;
  cursor:pointer;
}

.btn-orange:hover{
  background:#e56f00;
}

.btn-gray{
  background:#6c757d;
  color:#fff;
  padding:10px 26px;
  border-radius:6px;
  text-decoration:none;
  margin-left:10px;
}
</style>

<div class="edit-wrap">

  <!-- HEADER -->
  <div class="edit-header">
    Update Team Member
  </div>

  <!-- BODY -->
  <div class="edit-body">

<form method="post"
      action="<?= base_url('about/update_team/'.$row->id) ?>"
      enctype="multipart/form-data">





      <label>Name</label>
      <input type="text"
             name="name"
             value="<?= $row->name ?>"
             required>

      <label>Role</label>
      <input type="text"
             name="role"
             value="<?= $row->role ?>"
             required>

      <label>Experience</label>
      <input type="text"
             name="experience"
             value="<?= $row->experience ?>"
             required>

      <label>Current Image</label>

<?php if(!empty($row->image)){ ?>
  <img src="<?= base_url('uploads/'.$row->image) ?>">
<?php } else { ?>
  <p>- No Image</p>
<?php } ?>


  

      <label>Change Image</label>
      <input type="file" name="image">

      <button type="submit" class="btn-orange">
        Update Member
      </button>

      <a href="<?= base_url('about/home_team') ?>"
         class="btn-gray">
        Back
      </a>

    </form>

  </div>
</div>
