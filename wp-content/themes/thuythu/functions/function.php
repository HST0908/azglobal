<?php
$upload_folder = wp_upload_dir();
define('UPLOAD_URI', $upload_folder['baseurl']);
define('UPLOAD_DIR', $upload_folder['basedir']);
/******** All function ********/
function hr_cropt($media_id,$w,$h){
    if(is_numeric($w) and is_numeric($h)){
        $url = wp_get_attachment_url($media_id);
        $ext = substr(strrchr($url, '/'),1);
        $cropt=UPLOAD_URI.'/cropt/';
        if($url=="") return $url;
        if(file_exists($cropt.$media_id."_".$w."x".$h."_".$ext)){
            $url=$cropt.$media_id."_".$w."x".$h."_".$ext;
        }
        else{
            $resizeObj = new resize($url);
            $resizeObj -> resizeImage($w,$h, "crop");
            $resizeObj -> saveImage(UPLOAD_DIR.'/cropt/'.$media_id."_".$w."x".$h."_".$ext, 100);
            $url=$cropt.$media_id."_".$w."x".$h."_".$ext;
        }
        return $url;
    }
    return "";
}
/** unsing str **/
function hr_unsign($str){
    $arrs = array(
        'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
        'd'=>'đ',
        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'i'=>'í|ì|ỉ|ĩ|ị',
        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
        'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
        'D'=>'Đ',
        'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
        'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
        'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
        'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
        'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
    );
    foreach($arrs as $val=>$name){
        $str = preg_replace("/($name)/i", $val, $str);
    }
    return $str;
}
/** Mes **/
function mes($text, $color){
    ob_start();
    $color=($color==1)?'green':'red';
    ?>
    <font color="<?php echo $color; ?>"><?php echo $text; ?></font>
    <?php
    return ob_get_clean();
}
/** Notice **/
function add_notice($text, $color, $unload=''){
    ob_start();
    $color=($color==1)?'green':'red';
    ?>
    <script>
        add_notice('<font color="<?php echo $color; ?>"><?php echo htmlspecialchars($text,ENT_QUOTES); ?></font>');
        <?php
        if($unload){
        ?>
        unloading('<?php echo $unload; ?>');
        <?php
        }
        ?>
    </script>
    <?php
    echo ob_get_clean();
}
/** Pagination **/
function dev_posts_count($args, $all = true) {
    global $wpdb;
    $args['posts_per_page'] = -1;
    $the_query = new WP_Query( $args );
    $sql = "SELECT count(*) as count from (".str_replace("SQL_CALC_FOUND_ROWS ",'',$the_query->request).") as sub";
    $row = $wpdb->get_row( $sql );
    return ($row->count)?$row->count:0;
}
function dev_page_link($page = 1, $link='') {
    if(!$link) return;
    $newLink = '';
    $subLink = '';
    $pos =  strpos($link,'page');
    $pos = ($pos!==false)?$pos:strpos($link,'paged');
    if($pos!==false){
        $newLink = substr($link,0,$pos-1);
    }
    $newLink = $newLink?$newLink:$link;

    $page = is_numeric($page)?$page:1;

    $pos =  strpos($link,'/?');
    if($pos!==false){
        $newLink = substr($newLink,0,$pos);
        $subLink = substr($link,$pos);
    }
    if($page > 1 && is_archive()){
        $newLink .='/?page='.$page;
    }
    elseif($page > 1 ) {
        $newLink .='/page/'.$page;
    }

    $newLink .= $subLink;
    return $newLink;
}
function dev_pagination($args,$params = array(),$page='') {
    if(!$page) {
        global $wp;
        $current_url = home_url(add_query_arg(array(),$wp->request));
    }
    else {
        $current_url = $page;
    }
    $number = $args['posts_per_page'];
    $args['posts_per_page'] = -1;
    $all = dev_posts_count($args);
    if($all) {
        $percent = $all % $number;
        $number_p = ($percent)?(($all-$percent)/$number + 1):($all/$number);
        if($number_p>1){
            $display = wp_is_mobile()?3:5;
            if($display%2==0) {
                $display -= 1;
            }
            $paged = (isset($args['paged']) && $args['paged']>1)?$args['paged']:1;
            $data = ' data-link='.$current_url;
            if(is_array($params) && count($params)) {
                foreach ($params as $key=>$param){
                    $data.= ' data-'.$key.'="'.$param.'"';
                }
            }
            $number_plus = floor($display/2);
            ?>
            <ul class="thenativePagination">
                <?php $url = dev_page_link( 1,$current_url ); ?>
                <?php $start = 1; ?>
                <?php $urlstart = dev_page_link( $start,$current_url ); ?>
                <li class="thenativePaginationStart"><a<?php echo $data; ?> data-page="<?php echo $start; ?>" href="<?php echo $urlstart; ?>"> ≤ </a></li>

                <?php $prev = $paged>1?$paged-1:1; ?>
                <?php $url = dev_page_link( $prev,$current_url );?>
                <li class="thenativePaginationPrev"><a<?php echo $data; ?> data-page="<?php echo $prev; ?>" href="<?php echo $url; ?>"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </a></li>

                <?php if($number_p < $display): ?>
                    <?php for($i=1; $i<=$number_p;$i++): ?>
                        <?php $url = dev_page_link( $i,$current_url ); ?>
                        <li<?php echo ($i==$paged)?' class="active"':''; ?>><a<?php echo $data; ?> data-page="<?php echo $i ?>" href="<?php echo $url; ?>"><?php echo $i ?></a></li>
                    <?php endfor; ?>
                <?php elseif($paged > $number_p - $number_plus) :?>
                    <?php for($i=$number_p-$display+1; $i<=$number_p;$i++): ?>
                        <?php $url = ($i==$paged)?'javascript:void(0)':dev_page_link( $i,$current_url ); ?>
                        <li<?php echo ($i==$paged)?' class="active"':''; ?>><a<?php echo $data; ?> data-page="<?php echo $i ?>" href="<?php echo $url; ?>"><?php echo $i ?></a></li>
                    <?php endfor; ?>
                <?php else: ?>
                    <?php if($paged <= $number_plus): ?>
                        <?php for($i=1; $i<=$display;$i++): ?>
                            <?php $url = ($i==$paged)?'javascript:void(0)':dev_page_link( $i,$current_url ); ?>
                            <li<?php echo ($i==$paged)?' class="active"':''; ?>><a<?php echo $data; ?> data-page="<?php echo $i ?>" href="<?php echo $url; ?>"><?php echo $i ?></a></li>
                        <?php endfor; ?>
                    <?php else: ?>
                        <?php for($i=$paged-$number_plus; $i<$paged;$i++): ?>
                            <?php $url = dev_page_link( $i,$current_url ); ?>
                            <li><a<?php echo $data; ?> data-page="<?php echo $i ?>" href="<?php echo $url; ?>"><?php echo $i ?></a></li>
                        <?php endfor; ?>

                        <li class="active"><a<?php echo $data; ?> data-page="<?php echo $paged ?>" href="javascript:void(0)"><?php echo $i ?></a></li>

                        <?php for($i=$paged+1; $i<=$paged+$number_plus;$i++): ?>
                            <?php $url = dev_page_link( $i,$current_url ); ?>
                            <li><a<?php echo $data; ?> data-page="<?php echo $i ?>" href="<?php echo $url; ?>"><?php echo $i ?></a></li>
                        <?php endfor; ?>
                    <?php endif; ?>
                <?php endif; ?>
                <?php $next = $paged < $number_p?$paged+1:$number_p; ?>
                <?php $url = dev_page_link( $next,$current_url ); ?>
                <li class="thenativePaginationNext"><a<?php echo $data; ?> data-page="<?php echo $next; ?>" href="<?php echo $url; ?>"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></li>
                <?php $end = $number_p; ?>
                <?php $urlend = dev_page_link( $end,$current_url ); ?>
                <li class="thenativePaginationEnd"><a<?php echo $data; ?> data-page="<?php echo $end; ?>" href="<?php echo $urlend; ?>"> ≥ </a></li>
            </ul>
            <?php
        }
    }
}
/** Get taxonomy **/
function html_get_taxonomies($post_id = '',$taxonomy='',$only_id = false) {
    $post_id = $post_id?$post_id:get_the_ID();
    $taxonomy = $taxonomy?$taxonomy:'category';
    $categories = wp_get_post_terms($post_id,$taxonomy);
    if($only_id) {
        $array = array();
        foreach ($categories as $category){
            $array[] = $category->term_id;
        }
        return $array;
    }
    return $categories;
}
function html_the_taxonomies($post_id = '',$taxonomy='',$separator = '',$menu = false) {
    $categories = html_get_taxonomies($post_id,$taxonomy);
    $html = '';
    foreach ($categories as $key=>$category) {

        $temp = "<a class='item_categories' href='".get_category_link($category->term_id)."'>{$category->name}</a>";
        if($menu) {
            $temp = "<li>{$temp}</li>";
        }
        else {
            if($key && $separator) {
                $temp = $separator.$temp;
            }
        }
        $html .= $temp;
    }
    if($menu) {
        $html = "<ul>{$temp}</ul>";
    }
    return $html;
}
function html_the_tags($post_id = '',$taxonomy='',$separator = '',$menu = false) {
    $categories = html_get_taxonomies($post_id,$taxonomy);
    $html = '';
    foreach ($categories as $key=>$category) {

        $temp = "<a class='tag' href='".get_category_link($category->term_id)."'>#{$category->name}</a>";
        if($menu) {
            $temp = "<li>{$temp}</li>";
        }
        else {
            if($key && $separator) {
                $temp = $separator.$temp;
            }
        }
        $html .= $temp;
    }
    if($menu) {
        $html = "<ul>{$temp}</ul>";
    }
    return $html;
}
function get_exclude_cat($id){
    $exclude_ids   = array();
    $exclude_names = array($id);

    foreach( $exclude_names as $name ){
        $excluded_term = get_term_by( 'id', $name, 'category' );
        $exclude_ids[] = (int) $excluded_term->term_id;
    }

    $term_args = array(
        'taxonomy' => 'category',
        'orderby' => 'name',
        'order'   => 'ASC',
        'exclude' => $exclude_ids
    );

    if( $terms = get_terms( $term_args ) ){
        foreach( $terms as $term ){
            echo '<li><a class="" href="'.get_category_link($term->term_id).'">'.$term->name.'</a></li>';
        }
    }
}
function get_relate_cat($cat,&$arrs){
    $arrs[]=$cat->term_id;
    if($cat->parent<>0){
        $cat_p=get_term_by('id',$cat->parent,$cat->taxonomy);
        return get_relate_cat($cat_p,$arrs);
    }
    return $arrs;
}
function get_all_cat($tax,$langs){
    $term_args = array(
        'taxonomy' => $tax,
        'hide_empty' => false,
        'orderby ' => 'id',
    );
    $class_ac='';
    $cat = get_queried_object();
    $cat_id =(isset($cat->term_id))?$cat->term_id:0;
    global $sitepress;
    $new_lang = $langs;
    $sitepress->switch_lang($new_lang);
    if( $terms = get_terms( $term_args ) ){ $num = 0;
        foreach( $terms as $term ){
            $class_ac = ($cat_id == $term->term_id) ? 'active_term': '' ;
            echo '<li class="'.$class_ac.'" data-scrolly-down="blurInTop, delay:0.'.$num.'s"><a class="cat-item cat-item-'.$term->term_id.'" title="View all posts filed under '.$term->name.'" href="'.get_category_link($term->term_id).'">'.$term->name.'</a></li>';
            $num++;}
    }
}
function arrs_all_cat($tax){
    $term_args = array(
        'taxonomy' => $tax,
        'hide_empty' => false,
        'orderby ' => 'id',
    );
    global $sitepress;
//        $original_lang = ICL_LANGUAGE_CODE;
//
//        $new_lang = $original_lang;
//
//        $sitepress->switch_lang($new_lang);
    $terms = get_terms( $term_args );
    return $terms;
}
function pp_get_tree_taxonomy ($taxonomy = '',$term_id=0, $only_id = false){
    $taxonomy = $taxonomy?$taxonomy:'category';
    $taxonomies = (array) get_terms($taxonomy, array('hide_empty' => 1,'parent'=>$term_id, 'orderby'=>'id'));
    $new_taxonomies = array();
    if(!empty($taxonomies)){
        if($only_id) {
            foreach ($taxonomies as $key => $tax) {
                $new_taxonomies[] = $tax->term_id;
            }
        }
        else {
            foreach ($taxonomies as $key => $tax) {
                $taxonomies[$key] = (array)$tax;
                $taxonomies[$key]['sub'] = (array)pp_get_tree_taxonomy($taxonomy, $tax->term_id);
                $new_taxonomies[] = $taxonomies[$key];
            }
        }
    }
    return $new_taxonomies;
}
/** Get page link **/
function dev_get_page_link($template_name)
{
    $pages = get_posts([
        'post_type' => 'page',
        'post_status' => 'publish',
        'suppress_filters' => false,
        'meta_query' => [
            [
                'key' => '_wp_page_template',
                'value' => $template_name,
                'compare' => '='
            ]
        ]
    ]);
    if(!empty($pages))
    {
        foreach($pages as $pages__value)
        {
            return get_permalink($pages__value->ID);
        }
    }
    return get_bloginfo('url');
}
function get_child_page($hidden_parent){
    $post = get_post();
    $parent = '';
    $post_parent = get_post($post->post_parent);
    $p_parent_id = $post_parent->post_parent == 0 ? $post_parent->ID : '';
    $p_parent_id = ($hidden_parent  <> 1 ) ? $p_parent_id : $post->ID;
    if($post_parent->post_parent <> 0){
        $parent = $post_parent->post_parent;
    }elseif ($post->post_parent == 0){
        $parent = $post->ID;
    }else{
        $parent = $post->post_parent;
    }
    $args = array(
        'post_parent' => $parent,
        'post_type' => 'page',
        'order' => 'ASC',
        'orderby' => 'menu_order',
        'numberposts' => -1,
    );
    $arrs = get_posts ( $args );
    return $arrs;
}
/** Rewrite function var_dump **/
function var_dumps($object) {
    var_dump('<pre>',$object,'</pre>');
}
/** Get ACF **/
function get_button_acf_flex($button_arr=''){

    $buttons = $button_arr['button'];

    if($buttons) {

        foreach ($buttons as $button) {

            $title = $button['button_title'];

            $link = ($button['button_type'] == 0) ? $button['button_page_link'] : $button['button_link'];

            $action = ($button['button_action'] == 0) ? '' : '_blank';

            echo '<div class="border_bt"><a title="' . $title . '" class="btn-style btn_hook btn-style link-view" target="' . $action . '" href="' . $link . '"><span>' . $title . '</span></a></div>';

        }

    }

}
function get_button_acf($post_id='', $field_name=''){
    $buttons = get_field($field_name,$post_id);
    $buttons = $buttons['button'];
    foreach ($buttons as $button){
        $title = $button['button_title'];
        $link = ($button['button_type'] ==  0) ? $button['button_page_link'] : $button['button_link'];
        $action = ($button['button_action'] ==  0) ? '' : '_blank';
        echo '<a title="'.$title.'" class="btn-style btn_hook" target="'.$action.'" href="'.$link.'">'.$title.'</a>';
    }
}
function get_editor_acf($limit = 20,$cont_data='') {
    $limit = (is_numeric($limit) && $limit)?$limit:20;
    if(empty($cont_data))
        return '';
    $content = $cont_data;
    $content = trim(preg_replace('/<[^>]*>/', ' ', $content));
    $content = explode(' ',$content);
    if($limit > count($content)){
        $count = count($content);
    }
    else {
        $count = $limit;
    }
    $new_content = '';
    for($i = 0; $i < $count; $i++) {
        $new_content .= ' '.$content[$i];
    }
    if($count == $limit){
        $new_content .= '...';
    }
    return trim($new_content);
}
function the_editor_acf($limit = '',$cont_data='') {
    echo get_editor_acf($limit,$cont_data);
}
/** Get content single **/
function get_post_excerpt($post_id='',$limit = 20) {
    $limit = (is_numeric($limit) && $limit)?$limit:20;
    $post_id = $post_id?$post_id:get_the_ID();
    if(!get_post_field('post_content',$post_id))
        return '';
    $content = get_post_field('post_content',$post_id);
    $content = trim(preg_replace('/<[^>]*>/', ' ', $content));
    $content = explode(' ',$content);
    if($limit > count($content)){
        $count = count($content);
    }
    else {
        $count = $limit;
    }
    $new_content = '';
    for($i = 0; $i < $count; $i++) {
        $new_content .= ' '.$content[$i];
    }
    if($count == $limit){
        $new_content .= '...';
    }
    return trim($new_content);
}
function the_post_excerpt($post_id='',$limit = '') {
    echo get_post_excerpt($post_id,$limit);
}
/** Custom paging **/
function paging($baseUrl, $showItem, $totalPages, $currentPage, $limit) {
    if ($totalPages <= 1) {
        return null;
    }
    $numberDecrement = 0;



    if ($showItem % 2 === 0) {

        $numberDecrement = 1;

    }



    if (floor($showItem / 2) >= $currentPage) {

        $startIndex = 1;

        $limitIndex = $showItem > $totalPages ? $totalPages : $showItem;

    } else if ($currentPage + floor($showItem / 2) > $totalPages ) {

        $startIndex = $totalPages - $showItem < 0 ? 1 : $totalPages - $showItem + 1;

        $limitIndex = $totalPages;

    } else {

        $startIndex = $currentPage - floor($showItem / 2) < 1 ? 1 : $currentPage - floor($showItem / 2) + $numberDecrement;

        $limitIndex = $currentPage + floor($showItem / 2) > $totalPages ? $totalPages : $currentPage + floor($showItem / 2);

    }



    ?>

    <div class="paging">

        <ul>

            <?php

            for ($index = $startIndex; $index <= $limitIndex; $index++) {

                $url = $baseUrl.'?page='.$index;



                $classActive = '';



                if ($index == $currentPage) {

                    $classActive = 'active';

                }

                ?>

                <li page="<?php echo $index; ?>">

                    <a data-limit="<?php echo $limit; ?>" data-paging="<?php echo $index; ?>" class="load_paging <?php echo $classActive ?>" href="javascript:void(0)"><?php echo $index; ?></a>

                </li>

                <?php

            }

            ?>

        </ul>

    </div>

    <?php

}
/** Get total page **/
function get_num_page($total,$num){
    $percent = $total % $num;
    return ($percent)?(($total-$percent)/$num + 1):($total/$num);
}

// WPML MENU
function menu_wpml(){
    if (function_exists('icl_get_languages')) {
        $languages = icl_get_languages('skip_missing=0');
        if(1 < count($languages)){
            $items ='';
            foreach($languages as $l){
                $items = $items.'<li class="menu-item-'.$l['language_code'].'"><a href="'. $l['url'].'"><img src="'.$l['country_flag_url'].'" alt="'.$l['code'].'" /></a></li>';
            }
        }
    }
    echo  '<ul class="menu_wpml">'.$items.'</ul>';
}

register_nav_menus(
    array(
    'menu_footer' => 'Menu Footer',
    'menu_footer_1' => 'Menu Footer 1',
    'menu_footer_2' => 'Menu Footer 2',
    'menu_news' => 'Menu Tin tức',
    'menu_hd' => 'Menu Hướng dẫn',

));