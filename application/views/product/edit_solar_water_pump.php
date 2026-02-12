<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="custom-header">
                Edit Solar Water Pump
            </div>

            <div class="custom-box">

                <form action="<?= base_url('product/update_solar_water_pump') ?>" 
                      method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $pump->id ?>">

                    <div class="mb-3">
                        <label class="fw-bold">Pump Title</label>
                        <input type="text" name="pump_title"
                               value="<?= $pump->pump_title ?>"
                               class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Description</label>
                        <textarea name="pump_details"
                                  rows="4"
                                  class="form-control" required><?= $pump->pump_details ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Applications</label><br>

                        <?php
                        $appsArray = explode(',', $pump->pump_applications);
                        $apps = ['Agriculture','Farms','Gardens','Households','Commercial'];

                        foreach($apps as $app):
                        ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input"
                                       type="checkbox"
                                       name="pump_applications[]"
                                       value="<?= $app ?>"
                                       <?= in_array($app, $appsArray) ? 'checked' : '' ?>>
                                <label class="form-check-label"><?= $app ?></label>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Current Image</label><br>
                        <img src="<?= base_url('uploads/'.$pump->pump_image) ?>"
                             width="100"
                             class="rounded mb-2">
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Change Image (Optional)</label>
                        <input type="file" name="pump_image"
                               class="form-control">
                    </div>

                    <div class="text-center">
                        <button class="btn btn-success px-4">
                            Update
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
