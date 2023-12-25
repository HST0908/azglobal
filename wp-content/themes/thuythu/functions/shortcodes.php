<?php
function breadcrumbs() {
    $t_home = (ICL_LANGUAGE_CODE=='vi') ? 'Trang chủ':'Home';
    if(!is_home()) {
        echo '<section class="breadcrumbs"><div class="row"><div class="col-xl-12"><div id="breadcrumb" class="navigation"><nav class="breadcrumb"><ul>';
        echo '<li class="list_br"><a title="Home" itemprop="url" href="'.home_url().'"><cite itemprop="title">'.$t_home.'</cite></a></li><span class="divider">|</span>';
        if(is_singular('post')){
            $tax_parent = $tax_child = 0;
            $categories = wp_get_object_terms(get_the_ID(),'category');
            foreach ($categories as $cat){
                $tax_parent = ($cat->parent == 0)?$cat->term_id:$tax_parent;
                $tax_child = ($cat->parent <> 0)?$cat->term_id:$tax_child;
            }
            $cat = array($tax_parent,$tax_child);
            $html = '';
            foreach ($cat as $c) {
                if($c <> 0){
                    $cc = get_term_by( 'id', $c, 'category' );
                    $link = '<li><a title="View all posts in '.$cc->name.'" href="'.get_term_link($cc).'"><cite itemprop="title">'.$cc->name.'</cite></a></li>';
                    $html .= $link.'<span class="divider">|</span>';
                }
            }
            $html .= '<li title="'.get_the_title().'" class="title_single"><cite itemprop="title">'.get_the_title().'</cite></li>';
            echo $html;
        }
        if(is_singular('learning')){
            $tax_parent = $tax_child = 0;
            $categories = wp_get_object_terms(get_the_ID(),'category');
            foreach ($categories as $cat){
                $tax_parent = ($cat->parent == 0)?$cat->term_id:$tax_parent;
                $tax_child = ($cat->parent <> 0)?$cat->term_id:$tax_child;
            }
            $cat = array($tax_parent,$tax_child);
            $html = '';
            foreach ($cat as $c) {
                if($c <> 0){
                    $cc = get_term_by( 'id', $c, 'category' );
                    $link = '<li><a title="View all posts in '.$cc->name.'" href="'.get_term_link($cc).'"><cite itemprop="title">'.$cc->name.'</cite></a></li>';
                    $html .= $link.'<span class="divider">|</span>';
                }
            }
            $html .= '<li title="'.get_the_title().'" class="title_single"><cite itemprop="title">'.get_the_title().'</cite></li>';
            echo $html;
        }
        if(is_tax('product-category')) {
            $tax_parent = 0;
            $tax_child = 0;
            $categories = get_queried_object();
            $tax_child =(isset($categories->term_id))?$categories->term_id:0;
            $tax_parent = $categories->parent ;
            $cat = array($tax_parent,$tax_child);
            $html = '';
            foreach ($cat as $c) {
                if($c <> 0){
                    $cc = get_term_by( 'id', $c, 'admission-categories' );
                    $class = ($c == $tax_child ) ? 'active_term':'';
                    $link = '<li class="list_br '.$class.'"><a title="'.$cc->name.'" href="'.get_term_link($cc).'"><cite itemprop="title">'.$cc->name.'</cite></a></li>';
                    $html .= $link;
                }
            }
            echo $html;
        }
        elseif(is_archive('category')) {
            $tax_parent = 0;
            $tax_child = 0;
            $categories = get_queried_object();
            $tax_child =(isset($categories->term_id))?$categories->term_id:0;
            $tax_parent = $categories->parent ;
            $cat = array($tax_parent,$tax_child);
            $html = '';
            foreach ($cat as $c) {
                if($c <> 0){
                    $cc = get_term_by( 'id', $c, 'category' );
                    $class = ($c == $tax_child ) ? 'active_term':'';
                    $link = '<li class="list_br '.$class.'"><a title="'.$cc->name.'" href="'.get_term_link($cc).'"><cite itemprop="title">'.$cc->name.'</cite></a></li>';
                    $html .= $link;
                }
            }
            echo $html;
        }
        elseif(is_date()) {
            $monthnum = get_query_var('monthnum');
            $year     = get_query_var('year');
            $mydate = 'Archives for '. $GLOBALS['wp_locale']->get_month($monthnum).' '.$year;
            $html = '';
            $html = '<li class="list_br"><cite itemprop="title">'.$mydate.'</cite></li>';
            echo $html;
        }
        elseif(is_tag()) {
            $tax_parent = 0;
            $tax_child = 0;
            $categories = get_queried_object();
            $tax_child =(isset($categories->term_id))?$categories->term_id:0;
            $tax_parent = $categories->parent ;
            $cat = array($tax_parent,$tax_child);
            $html = '';
            foreach ($cat as $c) {
                if($c <> 0){
                    $cc = get_term_by( 'id', $c, 'post_tag' );
                    $class = ($c == $tax_child ) ? 'active_term':'';
                    $link = '<li class="list_br '.$class.'"><a title="'.$cc->name.'" href="'.get_term_link($cc).'"><cite itemprop="title">'.$cc->name.'</cite></a></li>';
                    $html .= $link.'<span class="divider '.$class.'">|</span>';
                }
            }
            echo $html;
        }
        elseif (is_page()) {
            $page_parent = $page_child = 0;
            $page_child = get_post();
            $page_parent = get_post($page_child->post_parent);
            $pages = array($page_parent->post_parent,$page_child->post_parent);
            $html = '';
            foreach ($pages as $p){
                if($p <> 0){
                    $pp = get_post($p);
                    $link = '<li class="list_br"><a title="'.get_the_title($pp->ID).'" href="'.get_permalink($pp->ID).'"><cite itemprop="title">'.get_the_title($pp->ID).'</cite></a></li>';
                    $html .= $link.'<span class="divider">|</span>';
                }
            }
            echo $html;
            echo '<li title="'.get_the_title().'" class="title_single"><cite itemprop="title">'.get_the_title().'</cite></li>';
        }
        echo '</ul></nav></div></div></div></section>';
    }
}
add_shortcode( 'breadcrumbs', 'breadcrumbs' );

// Sidebar
function sidebar_default()
{
    ?>
    <?php if(is_singular( 'post' )){?>
    <div id="sidebar_other_news">
        <h2 class="sidebar_title"><?php _e('Other news','thuythu');?></h2>
        <?php
        $post_per_page = '4';
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => $post_per_page,
            'orderby' => array('date' => 'DESC'),
            'suppress_filters' => false,
            'update_post_meta_cache' => false,
            'update_post_term_cache' => false,
            'ignore_sticky_posts' => true,
            'no_found_rows' => true
        );
        $lang_posts = new WP_Query($args);
        $arrs = $lang_posts->posts;
        ?>
        <ul>
            <?php foreach ($arrs as $arr) { ?>
                <li>
                    <div class="sidebar_other_news_img">
                        <a href="<?php echo get_permalink($arr) ?>"><?php echo get_the_post_thumbnail( $arr->ID, 'thumbnail', array( 'class' => 'alignleft' ) );?></a>
                    </div>
                    <h4><a href="<?php echo get_permalink($arr) ?>"><?php echo $arr->post_title; ?></a></h4>
                </li>
            <?php } ?>
        </ul>
        <a href="<?php echo tt_get_page_link('templates/news.php');?>" class="sidebar_view_all"><?php _e('VIEW ALL NEWS','thuythu');?></a>
    </div>
<?php } ?>

<?php }
add_shortcode( 'sidebar', 'sidebar_default' );