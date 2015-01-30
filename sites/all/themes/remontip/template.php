<?php

function remontip_preprocess_html(&$variables) {
    $pageId = '';
    if ($variables['is_front'] === true) {
        $pageId = 'page1';
    }

    $node = menu_get_object();
    if (empty($pageId) === true && isset($node) === true) {
    	$pageId = 'page'.$node->nid;
    }

    $variables['attributes_array']['id'] = $pageId;

    drupal_add_js(
        "Cufon.now();
        jQuery(window).load(function () {
            jQuery('.slider')._TMS({
                duration: 800,
                easing: 'easeOutQuart',
                preset: 'simpleFade',
                slideshow: 7000,
                banners: false,
                pauseOnHover: true,
                waitBannerAnimation: false,
                prevBu: '.prev',
                nextBu: '.next'
            });
        });",
        array('type' => 'inline', 'scope' => 'footer', 'weight' => 5)
    );
}