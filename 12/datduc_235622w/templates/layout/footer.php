<div class="footer bg">
    <div class="wrapper">
        <div class="footerr">
            <div class="footer-item">
                <div class="footer-title">
                    <div class="footer_line"></div>
                    <span>Thông tin liên hệ</span>
                </div>
                <div class="footer-name">
                    <span><?=$setting['name'.$lang]?></span>
                </div>
                <div class="footer-address">
                    <div class="item-address">
                        <img src="assets/images/i-f.png">
                        <span><?=$optsetting['address']?></span>
                    </div>
                    <div class="item-address">
                        <img src="assets/images/i-f-02.png">
                        <a href="tel:<?=$optsetting['phone']; ?>"><?=$func->formatPhone($optsetting['phone'])?>
                        </a>
                    </div>
                    <div class="item-address">
                        <img src="assets/images/i-f-03.png">
                        <span><?=$optsetting['email']?></span>
                    </div>
                    <div class="item-address">
                        <img src="assets/images/i-f-04.png">
                        <span><?=$optsetting['website']?></span>
                    </div>
                </div>

            </div>
            <div class="footer-item">
                <div class="footer-title">
                    <div class="footer_line"></div>
                    <span>Chính sách khách hàng</span>
                </div>
                <div class="chinhsach">
                    <ul>
                        <?php foreach($policy as $v){?>
                        <li><a href="<?=$v[$sluglang]?>"><?=$v['name'.$lang]?></a></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <div class="footer-item">
                <div class="footer-title">
                    <div class="footer_line"></div>
                    <span>Sản phẩm</span>
                </div>
                <div class="chinhsach sanphamlistft">
                    <ul>
                        <?php foreach($productlist as $v){?>
                        <li><a href="<?=$v[$sluglang]?>"><?=$v['name'.$lang]?></a></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="wrapper copyrightt">
            <div class="copyright-left">
                <span>Copyright © <span class="settingname">
                        <?=$setting['name'.$lang]?>
                    </span>. All rights reserved. Design by Nina Co.,Ltd</span>
            </div>
        </div>
    </div>
</div>

<?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>

<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>