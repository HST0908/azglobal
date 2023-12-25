<?php
/* ADD PLL */
add_action('init','TTaddStringPLL');
function TTaddStringPLL(){
    $arrs = array(
        'no_result' => false,
        'search_result' => false,
        'search_all' => false,
    );
    foreach($arrs as $string=>$multi){
        pll_register_string( 'TT', $string, 'TT', $multi);
    }
}