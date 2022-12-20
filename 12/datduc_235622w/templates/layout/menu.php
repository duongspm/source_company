<div class="menu">
    <div class="wrap-content">
        <ul class="menu-list ">
            <li class="menu-line-hoz"></li>
            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition menu-line" href=""
                    title="<?=trangchu?>"><?=trangchu?></a></li>
            <li class="menu-line-hoz"></li>

            <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition menu-line" href="gioi-thieu"
                    title="<?=gioithieu?>"><?=gioithieu?></a></li>
            <li class="menu-line-hoz"></li>

            <li>
                <a class="has-child <?php if($com=='san-pham') echo 'active'; ?> transition menu-line" href="san-pham"
                    title="<?=sanpham?>"><?=sanpham?></a>
                <?php if(count($productlist)) { ?>
                <ul>
                    <?php foreach($productlist as $klist => $vlist) {
                            $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id'])); ?>
                    <li>
                        <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                        <?php if(!empty($spcat)) { ?>
                        <ul>
                            <?php foreach($spcat as $kcat => $vcat) {
                                            $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc",array($vcat['id'])); ?>
                            <li>
                                <a class="has-child transition" title="<?=$vcat['name'.$lang]?>"
                                    href="<?=$vcat[$sluglang]?>"><?=$vcat['name'.$lang]?></a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li class="menu-line-hoz"></li>

            <li>
                <a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition menu-line" href="tin-tuc"
                    title="Tin tức">Tin tức</a>
            </li>
            <li class="menu-line-hoz"></li>

            <li><a class="<?php if($com=='video') echo 'active'; ?> transition menu-line" href="video"
                    title="Video">Video</a></li>
            <li class="menu-line-hoz"></li>

        </ul>
    </div>
</div>