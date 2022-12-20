<div class="header__top">
    <div class="wrapper">
        <div class="header__info">
            <div class="header__info-item">
                <div class="header__icon">
                    <img src="assets/images/icn-phone.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <span>Hotline:
                    <a
                        href="tel:<?=$func->formatPhone($optsetting['phone'])?>"><?=$func->formatPhone($optsetting['phone'])?></a></span>
            </div>
            <div class="header__info-item">
                <div class="header__icon">
                    <img src="assets/images/icon-email.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <span>Email:
                    <?=$optsetting['email']?>
                </span>
            </div>
            <div class="header__info-item">
                <div class="header__icon">
                    <img src="assets/images/icon-address.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <span>Email:
                    <?=$optsetting['address']?>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="header__buttom">
        <div class="header__logo">
            <a href="" title="<?=trangchu?>" class="peShiner">
                <?=$func->getImage(['sizes' => '135x100x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
            </a>
        </div>
        <div class="header__search">
            <div class="search w-clear">
                <input type="text" id="keyword" placeholder="Nhập từ khóa ..." onkeypress="doEnter(event,'keyword');" />
                <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
            </div>
        </div>
        <div class="header__social">
            <?php if(!empty($social)){ 
                foreach($social as $v){?>
            <a class="social-item" href="<?=$v['link']?>" title="<?=$setting['name'.$lang]?>">
                <?=$func->getImage(['sizes' => '48x48x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]])?>
            </a>
            <?php }}?>
        </div>
    </div>
</div>


<!-- <div class="header__banner">
    <div class="banner">
        <?=$func->getImage(['sizes' => '520x130x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner['photo'], 'alt' => $setting['name'.$lang]])?>
    </div>
</div> -->