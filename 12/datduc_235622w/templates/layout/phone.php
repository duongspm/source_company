

<div class="widget-mobile">
    <div id="my-phone-circle">
        <div class="wcircle-icon"><i class="fa fa-bell shake-anim"></i></div>
        <div class="wcircle-menu">
            <div class="wcircle-menu-item">
                <a href="tel:<?=$func->parsePhone($optsetting['hotline'])?>"><i class="fa fa-phone"></i></a>
            </div>
            <div class="wcircle-menu-item">
                <a href="lien-he" target="_blankl"><i class="fa fa-map"></i></a>
            </div>
            <div class="wcircle-menu-item">
                <a href="<?=$optsetting['fanpage']?>"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="wcircle-menu-item">
                <a href="//zalo.me/<?=$func->parsePhone($optsetting['zalo'])?>"
                    target="_blank"><?=$func->getImage(['class' => 'lazy w-100', 'size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'zalo-mb.png', 'alt' => 'Zalo'])?><br></a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/jQuery.WCircleMenu-min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    /* Phone circle */
    $('#my-phone-circle').WCircleMenu({
        angle_start: -Math.PI,
        delay: 50,
        distance: 70,
        angle_interval: Math.PI / 4,
        easingFuncShow: "easeOutBack",
        easingFuncHide: "easeInBack",
        step: 5,
        openCallback: false,
        closeCallback: false,
    });

    /* Phone support */
    $('.support-content').hide();
    $('a.btn-support').click(function(e) {
        e.stopPropagation();
        $('.support-content').slideToggle();
    });
    $('.support-content').click(function(e) {
        e.stopPropagation();
    });
    $(document).click(function() {
        $('.support-content').slideUp();
    });
})
</script>
