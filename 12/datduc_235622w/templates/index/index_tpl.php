<div class="wrapper">
    <?php if(!empty($banner)){?>
    <div class="banner effect10">
        <?= $func->getImage(['class' => 'lazy', 'sizes' => '1200x250x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner['photo'], 'alt' => "about"]) ?>
    </div>
    <?php }?>
</div>
<div class="wrapper">
    <div class="danhsach-sanpham row mr-top">
        <div class="col-md-3  danhsach-cap1">
            <div class="danhsach__heading">
                <span>hãng xe</span>
            </div>
            <div class="danhsach-cap1-list">
                <?php if(!empty($productlist)){?>
                <ul>
                    <?php foreach($productlist as $v){?>
                    <li>
                        <a href="<?=$v[$sluglang]?>">
                            <?=$v['name'.$lang]?>
                        </a>
                    </li>
                    <?php }?>
                </ul>
                <?php }?>
            </div>
        </div>
        <div class="col-md-6 product__list">
            <?php if(!empty($product)){
            foreach($product as $v){?>
            <div class="product__list-item">
                <div class="product__list-item-img hover_sang">
                    <?= $func->getImage(['sizes' => '336x190x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                </div>
                <div class="product__list-item-info">
                    <span class="product__list-name">
                        <?=$v['name'.$lang]?>
                    </span>
                    <span class="product__list-price">Giá bán:
                        <span>
                            <?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe?>
                        </span>
                    </span>
                    <div class="product__list-btn">
                        <a title="<?=$v['name'.$lang]?>" href="<?=$v[$sluglang]?>">Xem thêm</a>
                    </div>
                </div>

            </div>
            <?php }}?>

        </div>
        <div class="col-md-3 productnb__list">
            <div class="productnb__left">
                <div class="danhsach__heading">
                    <span>sản phẩm hot</span>
                </div>
                <div class="productnb-list">
                    <?php if(!empty($productnb)){ foreach($productnb as $v){?>
                    <div class="productnb-item">
                        <div class="productnb-img scale-img effect10">
                            <a title="<?=$v['name'.$lang]?>" href="<?=$v[$sluglang]?>">
                                <?= $func->getImage(['sizes' => '95x95x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                            </a>
                        </div>
                        <div class="productnb-info">
                            <span class="productnb-name">
                                <?=$v['name'.$lang]?>
                            </span>
                            <span class="productnb-price">
                                Giá bán
                            </span>
                            <span class="productnb-price-price">
                                <?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe?>
                            </span>
                        </div>
                    </div>
                    <?php }}?>
                </div>
            </div>

            <?php if(!empty($bannerpro)){?>
            <div class="banner-product effect10">
                <?= $func->getImage(['sizes' => '240x450x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PHOTO_L, 'image' => $bannerpro['photo'], 'alt' => $setting['name' . $lang]]) ?>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<div class="fb-map mr-top">
    <div class="wrapper">
        <div class="faceb pd">
            <span class="faceb__heading">
                fanpage facebook
            </span>
            <div class="footer-fanpage">
                <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
            </div>
        </div>


    </div>
    <div class="mapp">
        <?=htmlspecialchars_decode($optsetting['coords_iframe'])?>
    </div>
</div>
<div class="blog">
    <div class="wrapper">
        <div class="blogg">
            <div class="blog__heading">
                <span>
                    Tin tức sự kiện
                </span>
            </div>
            <div class="blog__list">
                <?php if (count($newsnb)) { ?>
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:30" data-sm-items="2:30"
                    data-md-items="3:30" data-lg-items="4:30" data-xlg-items="4:30" data-rewind="1" data-autoplay="1"
                    data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
                    data-autoplayspeed="3500" data-dots="0" data-nav="1"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                    data-navcontainer=".control-partner">
                    <?php foreach ($newsnb as $v) { ?>
                    <div>
                        <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>" class="blog__item">
                            <div class="blog__img hover_sang">
                                <?= $func->getImage(['class' => 'lazy', 'sizes' => '280x210x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>

                            </div>
                            <div class="blog__content">
                                <div class="blog-heading">
                                    <span><?=$v['name'.$lang]?></span>
                                </div>
                                <div class="blog__name">
                                    <div class="blog__icon">
                                        <img src="assets/images/i-blog.png" alt="">
                                    </div>
                                    <span>James Dieu - <?=date("d/m/Y",$v['date_created'])?></span>
                                </div>
                                <div class="blog__desc">
                                    <span>
                                        <?=$v['desc'.$lang]?>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <?php } ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>