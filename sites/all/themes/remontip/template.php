<?php

function remontip_preprocess_html(&$variables) {
    $variables['attributes_array']['id'] = $variables['is_front'] ? 'page1' : 'page';
    drupal_add_js("
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
