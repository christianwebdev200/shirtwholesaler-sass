<div class="modal--discount" id="<?php echo $id; ?>" style="display: none;">
    <?php
    $adminSettings = adminSettings(['volumedis', 'holidaymessages', 'salecoupon']);

    if (SPDISCount) { ?>
        <h2>Volume Discounts</h2>
        <h4>Starting From</h4>
        <?php echo $adminSettings['volumedis']; ?>
        <h5><br></h5>
        <?php echo $adminSettings['holidaymessages']; ?>
    <?php } ?>
</div>