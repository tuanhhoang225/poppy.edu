<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/18/2018
 * Time: 11:46 AM
 */

use common\helpers\FunctionHelper;

?>

<div class="w100 fl slide-partner">
    <div class="container-fluid">
        <div class="row">
            <div id="owl-carousel-partner" class="owl-carousel">
                <?php foreach (FunctionHelper::get_images_by_photo_location_key('partner') as $key => $value): ?>
                    <div style="padding: 20px 0;">
                        <img class="img-editor img-responsive"
                             alt="<?= $value['title'] ?>" src="<?= $value['avatar'] ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>