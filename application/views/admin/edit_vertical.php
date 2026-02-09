<style>
.edit-wrap{
  max-width:1000px;
  margin:30px auto;
  background:#fff;
  border-radius:6px;
  overflow:hidden;
  box-shadow:0 2px 8px rgba(0,0,0,0.08);
}
.edit-header{
  background:#ff7a00;
  color:#fff;
  padding:16px 24px;
  font-size:20px;
  font-weight:600;
}
.edit-body{
  padding:30px;
}
.edit-body label{
  font-weight:600;
  margin-bottom:6px;
  display:block;
}
.edit-body input,
.edit-body textarea{
  width:100%;
  padding:12px 14px;
  border:1px solid #dcdcdc;
  border-radius:6px;
  margin-bottom:18px;
}
.edit-body img{
  width:120px;
  border-radius:6px;
  margin:10px 10px 18px 0;
  border:1px solid #eee;
}
.btn-orange{
  background:#ff7a00;
  color:#fff;
  border:none;
  padding:10px 26px;
  border-radius:6px;
  font-weight:600;
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

  <div class="edit-header">
    Update Business Vertical
  </div>

  <div class="edit-body">

    <form method="post"
          action="<?= base_url('about/update_vertical/'.$row->id) ?>"
          enctype="multipart/form-data">

      <label>Vertical Title</label>
      <input type="text" name="title" value="<?= $row->title ?>" required>

      <label>Description</label>
      <textarea name="description" rows="4" required><?= $row->description ?></textarea>

      <label>Color Code</label>
      <input type="text" name="color" value="<?= $row->color ?>" required>

      <!-- IMAGE 1 -->
      <label>Current Image 1</label>
      <?php if(!empty($row->image1)){ ?>
        <img src="<?= base_url('uploads/'.$row->image1) ?>">
      <?php } else { echo '<p>- No Image</p>'; } ?>
      <input type="file" name="image1">

      <button type="submit" class="btn-orange">
        Update Vertical
      </button>

      <a href="<?= base_url('about/home_verticals') ?>" class="btn-gray">
        Back
      </a>

    </form>

  </div>
</div>
