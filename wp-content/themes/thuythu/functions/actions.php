<?php
define('THEME_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());
define('AJAX_URI', admin_url('admin-ajax.php'));

add_action('wp_enqueue_scripts', 'pp_style');
function pp_style()
{
    wp_enqueue_script('jquery');

    wp_enqueue_style('aos', THEME_URI . '/assets/css/aos.css', array(), GENERATE_VERSION);
    wp_enqueue_style('fancybox', THEME_URI . '/assets/css/fancybox.min.css', array(), GENERATE_VERSION);
    wp_enqueue_style('swiper', THEME_URI . '/assets/css/swiper-bundle.min.css', array(), GENERATE_VERSION);
    wp_enqueue_style('frontend-style', THEME_URI . '/assets/css/frontend.css', array(), GENERATE_VERSION);
    wp_enqueue_style('opensan', THEME_URI . '/assets/fonts/Opensan/stylesheet.css', array(), GENERATE_VERSION);
    wp_enqueue_style('montserrat', THEME_URI . '/assets/fonts/monsterrat/stylesheet.css', array(), GENERATE_VERSION);
    wp_enqueue_style('owald', THEME_URI . '/assets/fonts/Owald/stylesheet.css', array(), GENERATE_VERSION);
    wp_enqueue_style('unsematic', THEME_URI . '/assets/css/unsemantic-grid.css', array(), GENERATE_VERSION);

    wp_enqueue_script('aos', THEME_URI . '/assets/js/aos.js', '', '', true);
    wp_enqueue_script('countup', THEME_URI . '/assets/js/counterUp.js', '', '', true);
    wp_enqueue_script('waypoin', THEME_URI . '/assets/js/waypoints.min.js', '', '', true);
    wp_enqueue_script('swiper', THEME_URI . '/assets/js/swiper-bundle.min.js', '', '', true);
    wp_enqueue_script('fancybox', THEME_URI . '/assets/js/fancybox.min.js', '', '', true);
    wp_enqueue_script('front-end', THEME_URI . '/assets/js/frontend.js', '', '', true);
    wp_enqueue_script('ajax', THEME_URI . '/assets/js/ajax.js', array('jquery'), '', true);
    wp_enqueue_script('labory', THEME_URI . '/assets/js/labory.js', '', '', true);
    wp_localize_script('ajax', 'hr', array('p_url' => THEME_URI, 'a_url' => AJAX_URI));
}

add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
    wp_enqueue_style( 'admin_css', THEME_URI . '/assets/css/admin.css', false, '1.0.0' );
}

add_action( 'wp_footer', 'hr_datas',100 );
function hr_datas(){
    ob_start();
    ?>
    <div style="display:none">
        <div id="hide_me"></div>
    </div>
    <div class="meta-popup">
        <div class="cd-popup" role="alert">
            <div class="cd-popup-container">
            </div> <!-- cd-popup-container -->
        </div> <!-- cd-popup -->
    </div>
    <?php
    echo  ob_get_clean();
}

// Create theme options
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page('Theme Options');
}

//Banner
add_action('banner_group','banner_group',10,2);
function banner_group($field_name='',$id=''){
    if(is_tax() || is_category()){
        $term = get_queried_object();
        $banner_group = get_field($field_name,$term);
        $title_banner = get_field('title_banner',$term);
    }else{
        $banner_group = get_field($field_name,$id);
        $banner_def = get_field('img_banner_def_op','options');
        $banner_group = $banner_group ? $banner_group: $banner_def;
        $title = get_the_title($id);
        $title_banner = get_field('title_banner',$id);
    }
    ?>
    <div id="banner_gr" class="banner_gr section">
        <div class="banner_def"></div>
        <img src="<?php echo $banner_group['url']; ?>" alt="<?php echo $banner_group['alt']; ?>">
        <div class="gr_head">
            <div class="container">
                <?php echo do_shortcode('[breadcrumbs]'); ?>
                <?php if ($title_banner){?>
                    <h1><?php echo $title_banner ;?></h1>
                <?php }?>
            </div>
        </div>
    </div>
    <?php
}

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo THEME_URI; ?>/images/logo.png);
            height: 70px;
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 0;
            filter: brightness(0) contrast(3) hue-rotate(-360deg) saturate(0) ;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function CRtranslate_text($vi, $en){
    if (function_exists('pll_current_language')) {
        $lang = pll_current_language() ?: 'vi';
    }
    else {
        $lang = 'vi';
    }
    return ($lang == 'vi') ? $vi : $en;
}