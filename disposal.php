<?php
$i = 0;
$html = "";
$pdata = showcategoryhomepage();
foreach ($pdata as $k => $values) {
?>
    <div class="row mb-1">
        <div class="col-12">

                <div class="product-preview__header">
                    <h2><?php echo $values['name']; ?></h2>
                </div>

                <div class="swiper-container">
                    <div class="row product-preview__body swiper-wrapper">
                        
                        <?php
                        foreach ($values['sub_data_row'] as $keys => $v) {
                            $pPrice = $v['pPrice'];

                            if (isset($v['customeseo']) && $v['customeseo'] != "") {
                                $slug = $v['customeseo'];
                            } else {
                                $slug = $v['slug'];
                            }
                        ?>
                        <div class="col-lg-2 col-md-2 col-sm-6 product-preview__column swiper-slide">
                                <div class="card card--primary">
                                    <!-- card--primary__image -->
                                    <a href="<?php echo base_url_site . $v['slugCategory'] . '/' . $slug; ?>" class="card--primary__image">

                                        <!-- Start - Home page banner only showing in the first row and make the banner customizable - RM - 10/14/2020 -->
                                        <?php if (!empty($v['ribbonText'])) {
                                            $side = 'left';
                                            switch ($v['ribbonPosition']) {
                                                case 1:
                                                    $pos = 'top-left';
                                                    $side = 'left';
                                                    break;
                                                case 2:
                                                    $pos = 'top-right';
                                                    $side = 'right';
                                                    break;
                                                case 3:
                                                    $pos = 'bot-left';
                                                    $side = 'left';
                                                    break;
                                                default:
                                                    $pos = 'bot-right';
                                                    $side = 'right';
                                                    break;
                                            }
                                        ?>
                                            <?php if ($v['ribbonStyle'] == 1) { ?>
                                                <div class="ribbon ribbon-hor-<?php echo $side ?> ribbon-hor-<?php echo $pos; ?> <?php echo $v['ribbonShadow'] == 1 ? 'ribbon-shadow' : '' ?>" style="background: <?php echo $v['ribbonColor'] ?>; color: <?php echo $v['ribbonTextColor'] ?>">

                                                    <?php if ($v['isCustomRibbon'] == 1) { ?>
                                                        <?php echo $v['customRibbon']; ?>
                                                    <?php } else { ?>
                                                        <?php echo $v['ribbonText']; ?>
                                                    <?php } ?>

                                                </div>
                                            <?php } else { ?>
                                                <div class="ribbon ribbon-diag ribbon-diag-<?php echo $pos; ?> <?php echo $v['ribbonShadow'] == 1 ? 'ribbon-shadow' : '' ?>" style="background: <?php echo $v['ribbonColor'] ?>; color: <?php echo $v['ribbonTextColor'] ?>">

                                                    <?php if ($v['isCustomRibbon'] == 1) { ?>
                                                        <?php echo $v['customRibbon']; ?>
                                                    <?php } else { ?>
                                                        <?php echo $v['ribbonText']; ?>
                                                    <?php } ?>

                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                        <!-- End - Home page banner only showing in the first row and make the banner customizable - RM - 10/14/2020 -->

                                        <?php
                                        if ($v['styleImageStatus'] == 1) {

                                            if (!empty($v['pmodelImage'])) {
                                        ?>
                                                <!-- Start - PageSpeed insights - WL - 10/16/2020 -->
                                                <img src="<?php echo fnCPMainImages($v['pmodelImage']); ?>" alt="<?php echo $v['customTitle']; ?>" height="290" width="232" style="height: auto;" loading="lazy" onerror="this.src='<?php echo base_url_site; ?>images/no-image-found.jpg'" /> <!-- Start - when image is broken add show no image icon" on every files updated - CL - 11/19/2020 2:06pm -->
                                                <!-- Start - update CLS again. please review. I updated but get same results CLS 0.25 - John - 09/15/2020 -->
                                            <?php  }
                                        } else {
                                            if (!empty($v['styleImage'])) { ?>
                                                <img src="<?php echo fnProImages($v['styleImage']); ?>" alt="<?php echo $v['customTitle']; ?>" height="290" width="232" style="height: auto;" loading="lazy" onerror="this.src='<?php echo base_url_site; ?>images/no-image-found.jpg'" />
                                                <!-- Start - when image is broken add show no image icon" on every files updated - CL - 11/19/2020 2:06pm -->
                                                <!-- Start - update CLS again. please review. I updated but get same results CLS 0.25 - John - 09/15/2020 -->
                                                <!-- End - PageSpeed insights - WL - 10/16/2020 -->
                                        <?php }
                                        }

                                        ?>


                                        <?php /*?><img src="<?php echo base_url_images.$v['styleImage'];?>" alt="product-image" /><?php */ ?>
                                    </a>
                                    <!-- card--primary__image -->


                                    <?php echo (isset($pPrice) &&  empty($pPrice) ? '<span>SALE</span>' : ''); ?>

                                    <div class="card--primary__body">
                                    <?php //echo $v['bestsellerrank'];
                                                ?>
                                        <a class="card--primary__title"><?php echo $v['customTitle']; ?></a>
                                        <a href="<?php echo base_url_site . $v['slugCategory'] . '/' . $slug; ?>" class="card--primary__brand">
                                            <img src="<?php echo base_url_images . $v['brandImage']; ?>" alt="<?php echo $v['brandName']; ?>" width="54px" height="29px" loading="lazy" />
                                        </a>

                                    </div>
                                    <div class="card--primary__footer">
                                        <div class="card--primary__available">
                                            Available </br>in
                                            <b>
                                            <?php
                                                echo $v['pTotalColors'];
                                                ?> Colors</b>
                                        </div>
                                        <div class="card--primary__price">
                                            <span class="starting_at">Starting at</span>
                                            <span class="price"> <?php echo SYMBOL . '' . number_format($pPrice, 2, '.', '') ?> </span>
                                        </div>
                                    </div>

                                </div>
                        </div>
                        
                        <?php //}
                        }
                        ?>
                    </div>

                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>

        </div>

    </div>
    <!-- <div class="spacer"></div> -->
<?php } ?>