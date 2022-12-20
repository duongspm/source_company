<?php if(!empty($productlist)) {?>
            <?php foreach($productlist as $list) {
                $sanpham = $d->rawQuery("select name$lang, slugvi, slugen,photo, id from #_product where id_list = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc",array($list['id'])); ?>
                <div class="pro__listnb">
                    <div class="heading">
                        <span><?=$list['name'.$lang]?></span>
                        <img src="assets/images/imgd/line01.png" alt="">
                    </div>
                    <div class="productlistnb__list">
                        <?php if(count($sanpham) >= 4) {?>
                            <?php for ($i=0; $i < 4; $i++) {?>
                                <div class="product">
                                    <a class="box-product text-decoration-none" href="<?= $sanpham[$i][$sluglang] ?>" title="<?= $sanpham[$i]['name' . $lang] ?>">
                                        <p class="pic-product zoom_hinh hover_sang">
                                            <?= $func->getImage(['sizes' => '286x283x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $sanpham[$i]['photo'], 'alt' => $sanpham[$i]['name' . $lang]]) ?>
                                        </p>
                                        <div class="product-price">
                                            <h3 class="name-product cut_string1"><?= $sanpham[$i]['name' . $lang] ?></h3>
                                            <div class="price-product">
                                                <span class="price-price">Giá: </span>
                                                <span class="price-new">Liên hệ</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                            <?php foreach($sanpham as $i) { ?>
                                <div class="product">
                                    <a class="box-product text-decoration-none" href="<?= $i[$sluglang] ?>" title="<?= $i['name' . $lang] ?>">
                                        <p class="pic-product zoom_hinh hover_sang">
                                            <?= $func->getImage(['sizes' => '286x283x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $i['photo'], 'alt' => $i['name' . $lang]]) ?>
                                        </p>
                                        <div class="product-price">
                                            <h3 class="name-product cut_string1"><?= $i['name' . $lang] ?></h3>
                                            <div class="price-product">
                                                <span class="price-price">Giá: </span>
                                                <span class="price-new">Liên hệ</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>                  
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <?php if (count($sanpham) > 4) { ?>
                        <div class="sanpham-bottom">
                            <a href="<?=$sanpham[$sluglang]?>" title="<?=$sanpham['name'.$lang]?>" class="btn btn--slide-right">Xem tất cả</a>
                        </div>
                    <?php } ?>
                </div>
                <?php }?>
        <?php } else { ?>
            <div class="col-12">
                <div class="alert alert-warning w-100" role="alert">
                    <strong><?=khongtimthayketqua?></strong>
                </div>
            </div>
        <?php } ?>