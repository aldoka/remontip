<?php

function remontip_preprocess_html(&$variables) {
    $variables['attributes_array']['id'] = $variables['is_front'] ? 'page1' : 'page';
}
