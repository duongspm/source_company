<?php  
	if(!defined('SOURCES')) die("Error");

    $productlist = $cache->get("select name$lang, slugvi, slugen, id from #_product_list where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'), 'result', 7200);
    $newsnb = $cache->get("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('tin-tuc'), 'result', 7200);
    //duongg
    $slider = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('slide'), 'result', 7200);
    $about = $cache->get("select name$lang,desc$lang,content$lang, photo from #_static where type = ? and find_in_set('hienthi',status) order by id desc", array('gioi-thieu'), 'result', 7200);
    $service = $cache->get("select name$lang, slugvi,desc$lang,content$lang,photo, id from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('dich-vu'), 'result', 7200);
    $videoclip = $cache->get("select name$lang, photo, link_video from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('videoclip'), 'result', 7200);
    $banner = $cache->get("select photo from #_photo where type = ? and act = ? limit 0,1", array('banner', 'photo_static'), 'fetch', 7200);
    $bannerpro = $cache->get("select photo from #_photo where type = ? and act = ? limit 0,1", array('banner-product', 'photo_static'), 'fetch', 7200);
    
    $productnb = $cache->get("select name$lang,photo,desc$lang,slugvi,slugen,regular_price, id from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('san-pham'), 'result', 7200);
    $product = $cache->get("select name$lang,photo,desc$lang,slugvi,slugen,regular_price, id from #_product where type = ? and find_in_set('hienthi',status)", array('san-pham'), 'result', 7200);
    //duongg

    /* SEO */
    $seoDB = $seo->getOnDB(0,'setting','update','setting');
    if(!empty($seoDB['title'.$seolang])) $seo->set('h1',$seoDB['title'.$seolang]);
    if(!empty($seoDB['title'.$seolang])) $seo->set('title',$seoDB['title'.$seolang]);
    if(!empty($seoDB['keywords'.$seolang])) $seo->set('keywords',$seoDB['keywords'.$seolang]);
    if(!empty($seoDB['description'.$seolang])) $seo->set('description',$seoDB['description'.$seolang]);
    $seo->set('url',$func->getPageURL());
    $imgJson = (!empty($logo['options'])) ? json_decode($logo['options'],true) : null;
    if(empty($imgJson) || ($imgJson['p'] != $logo['photo']))
    {
        $imgJson = $func->getImgSize($logo['photo'],UPLOAD_PHOTO_L.$logo['photo']);
        $seo->updateSeoDB(json_encode($imgJson),'photo',$logo['id']);
    }
    if(!empty($imgJson))
    {
        $seo->set('photo',$configBase.THUMBS.'/'.$imgJson['w'].'x'.$imgJson['h'].'x2/'.UPLOAD_PHOTO_L.$logo['photo']);
        $seo->set('photo:width',$imgJson['w']);
        $seo->set('photo:height',$imgJson['h']);
        $seo->set('photo:type',$imgJson['m']);
    }
    // Fanpage => Goi function face_index() de su dung
    function face_index()
    {
        global $optsetting;
        $mag = '';
        $mag .= '<div class="facebookforterin">
                    <div class="fb-page"
                    data-href="' . $optsetting['fanpage'] . '"
                    data-tabs="timeline"
                    data-width="500"
                    data-height="420"
                    data-small-header="true"
                    data-adapt-container-width="true"
                    data-hide-cover="false" data-show-facepile="true">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="' . $optsetting['fanpage'] . '">
                            <a href="' . $optsetting['fanpage'] . '">Facebook</a>
                        </blockquote>
                    </div>
                </div>
            </div>';
        return $mag;
    }
?>