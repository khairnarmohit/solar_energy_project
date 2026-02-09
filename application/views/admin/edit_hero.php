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
  width:140px;
  border-radius:6px;
  margin:10px 0 18px;
  border:1px solid #eee;
  display:block;
}

.btn-orange{
  background:#ff7a00;
  color:#fff;
  border:none;
  padding:10px 26px;
  border-radius:6px;
  font-weight:600;
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
    Update About Hero
  </div>

  <!-- BODY -->
  <div class="edit-body">

    <form method="post"
      action="<?= base_url('about/update/about_hero/'.$row->id.'/about/about') ?>"
      enctype="multipart/form-data">

      <!-- TITLE -->
      <label>Hero Title</label>
      <input type="text"
             name="title"
             value="<?= $row->title ?>"
             required>

      <!-- BG 1 -->
      <label>Background Image 1</label>
      <?php if(!empty($row->bg1)){ ?>
        <img src="<?= base_url('assets/image/'.$row->bg1) ?>">
      <?php } else { echo '<p>- No Image</p>'; } ?>
      <input type="file" name="bg1">

      <!-- BG 2 -->
      <label>Background Image 2</label>
      <?php if(!empty($row->bg2)){ ?>
        <img src="<?= base_url('assets/image/'.$row->bg2) ?>">
      <?php } else { echo '<p>- No Image</p>'; } ?>
      <input type="file" name="bg2">

      <!-- BG 3 -->
      <label>Background Image 3</label>
      <?php if(!empty($row->bg3)){ ?>
        <img src="<?= base_url('assets/image/'.$row->bg3) ?>">
      <?php } else { echo '<p>- No Image</p>'; } ?>
      <input type="file" name="bg3">

      <!-- BUTTONS -->
      <button type="submit" class="btn-orange">
        Update Hero
      </button>

      <a href="<?= base_url('about/about') ?>"
         class="btn-gray">
        Back
      </a>

    </form>

  </div>
</div>
