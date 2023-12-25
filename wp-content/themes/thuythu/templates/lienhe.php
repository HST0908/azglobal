<?php
/**
 * Template name: Trang liên hệ
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
global $post;
$banner = get_field("head_page", $post->ID, true);
$contacs = get_field("contacs", $post->ID, true);
// echo wp_get_attachment_image()

?>
<div class="main_container">
    <!-- section menu top -->
    <Section class="section">
        <div class="grid-container">
            <div class="menu_top_drive">
                <div class="menu_top_drive-box">
                    <ul class="menu-top-list">
                        <li class="menu-top-list-item"><a class="disable seprate" href="http://azglobal.test/">Trangchủ</a></li>
                        <div class="separate"></div>
                        <li class="menu-top-list-item"><a href="<?= $_SERVER['REQUEST_URI']?>">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </Section>
    <!-- section banner -->
    <section class="section">
        <div class="section-banner">
            <div class="img_wrap">
                <!-- <img src="/wp-content/uploads/2023/12/bg_banner-lienhe.png" alt=""> -->
                <?= wp_get_attachment_image($banner["photo_banner"]["ID"],'full',"",array( "class" => "item-img" )); ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="grid-container">
            <div class="section_news section_contacts">
                <h1 class="title"><?= the_field("title") ?></h1>
                <h2 class="sub_title">
                    <?= the_field("sub_title") ?>
                </h2>
                <h3 class="sub_title2"><?= the_field("description") ?></h3>

                <div class="flex_box contacs_list">
                    <?php foreach($contacs as $item):?>
                    <div class="contacs_list-item">
                        <div class="content_wrap">
                            <div class="content_inner">
                                <div class="icon">
                                    <!-- <img src="/wp-content/uploads/2023/12/location.svg" alt=""> -->
                                    <?= wp_get_attachment_image($item["photo"]["ID"],'full',"",array( "class" => "item-img" )); ?>
                                </div>
                                <div class="text_wrap">
                                    <h1 class="title"><?=$item["title"]?></h1>
                                    <p><?=$item["description"]?></p>
                                    <p><?=$item["description_2"]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <!-- <div class="contacs_list-item">
                        <div class="content_wrap">
                            <div class="content_inner">
                                <div class="icon">
                                    <img src="/wp-content/uploads/2023/12/tower.svg" alt="">
                                </div>
                                <div class="text_wrap">
                                    <h1 class="title">Giờ làm việc</h1>
                                    <p>
                                        Thứ 2 - Chủ nhật
                                    </p>
                                    <p>
                                        Từ 8h00 đến 17h00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacs_list-item">
                        <div class="content_wrap">
                            <div class="content_inner">
                                <div class="icon">
                                    <img src="/wp-content/uploads/2023/12/phone_contacs.svg" alt="">
                                </div>
                                <div class="text_wrap">
                                    <h1 class="title">Hotline & Email</h1>
                                    <p>
                                    10900 636109
                                    </p>
                                    <p>
                                    info@azglobal.com.vn
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="section-register-consultation">
            <div class="grid-container">
                <div class="register-consultation-box">
                    <div class="consultation-box-wrap">
                        <h1 class="title text_center">Đăng ký tư vấn tại az global</h1>
                        <?= the_field("contac_form") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_map">
            <iframe src="<?= the_field("map") ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</div>
<a id="scroll-to-top" title="Scroll back to top" aria-label="Scroll back to top" rel="nofollow" href="#" class="generate-back-to-top generate-back-to-top__show" data-scroll-speed="400" data-start-scroll="300">
    <span class="gp-icon icon-arrow-up">
        <svg viewBox="0 0 330 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
            <path d="M305.863 314.916c0 2.266-1.133 4.815-2.832 6.514l-14.157 14.163c-1.699 1.7-3.964 2.832-6.513 2.832-2.265 0-4.813-1.133-6.512-2.832L164.572 224.276 53.295 335.593c-1.699 1.7-4.247 2.832-6.512 2.832-2.265 0-4.814-1.133-6.513-2.832L26.113 321.43c-1.699-1.7-2.831-4.248-2.831-6.514s1.132-4.816 2.831-6.515L158.06 176.408c1.699-1.7 4.247-2.833 6.512-2.833 2.265 0 4.814 1.133 6.513 2.833L303.03 308.4c1.7 1.7 2.832 4.249 2.832 6.515z" fill-rule="nonzero"></path>
        </svg>
    </span>
</a>



<?php get_footer();