<?php
/**
 * Template name: Trang chủ
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
global $post;
$banner = get_field("fields_banner", $post->ID, true);
$body = get_field("body_page", $post->ID, true);
// echo wp_get_attachment_image()

?>

<div class="main_container">
    <!-- section-banner -->
    <section class="section_banner grid-container relative">
        <div class="section">
            <div class="swipper swiper-banner">
                <div class="swiper-wrapper">
                    <?php
                    foreach($banner as $item):?>
                        <div class="swiper-slide">
                            <div class="swiper-banner-item  relative">
                                <div class="img_wrap">
                                    <?= wp_get_attachment_image($item["img_banner"]["ID"],""); ?>
                                </div>
                                <div class="text_wrap <?= ($item["mapping_title"]) ? ($item["mapping_title"]) :"" ?>">
                                    <?php
                                    if(!empty($item["sub_title_banner"])){ ?>
                                        <h2 class="title2-banner"><?= $item["sub_title_banner"] ?></h2>
                                    <?php } ?>
                                    <h2 class="title-banner">
                                        <?= $item["title_banner"] ?>
                                    </h2>
                                    <?php if($item["link_banner"]){?>
                                        <a href="<?= $item["link_banner"] ?>" class="btn btn-primary active">
                                            XEM CHI TIẾT
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="swiper swiper-banner-thumbs">
                <div class="swiper-wrapper">
                    <?php $number = 1; foreach($banner as $item_2): ?>
                        <div class="swiper-slide">
                            <div class="swiper-banner-thumbs-item">
                                <div class="text_wrap">
                                    <h2 class="title">0<?=$number++?>.</h2>
                                    <span class="sub"><?=$item_2["decs_banner"] ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
    <!-- section about -->
    <section class="section">
        <div class="section-about">
            <div class="grid-container flex_box flex_wrap">
                <div class="grid-70 tablet-grid-70 mobile-grid-100 grid-parent">
                    <div class="section-about-left">
                        <h1 class="title"><?=$body["section_body_1"]["title_body"];?></h1>
                        <h2 class="sub-title"><?=$body["section_body_1"]["sub_title_1"];?></h2>
                        <h3 class="sub-title2"><?=$body["section_body_1"]["sub_title_2"];?></h3>
                        <?=$body["section_body_1"]["content_section"];?>
                        <div class="box-count flex_box flex_wrap ts_04">
                            <div class="item grid-25 tablet-grid-25 mobile-grid-100 ts_04">
                              <div class="item-icon flex_box">
                                <span class="counter ts_04"><?=$body["section_body_1"]["number_file_success"];?></span>
                                <span>+</span>
                              </div>
                              <div class="item-title text_center">Hồ sơ thành công</div>
                            </div>

                            <div class="item grid-25 tablet-grid-25 mobile-grid-100">
                              <div class="item-icon flex_box">
                                <span class="counter ts_04"><?=$body["section_body_1"]["num_acceptance"];?></span>
                                <span>%</span>
                              </div>
                              <div class="item-title text_center">Tỉ lệ hồ sơ được chấp thuận</div>
                            </div>

                            <div class="item grid-25 tablet-grid-25 mobile-grid-100">
                              <div class="item-icon flex_box">
                                <span class="counter ts_04"><?=$body["section_body_1"]["real_estate_managerman"];?></span>
                                <span>+</span>
                              </div>
                              <div class="item-title text_center">Bất động sản đang quản lý</div>
                            </div>

                            <div class="item grid-25 tablet-grid-25 mobile-grid-100">
                              <div class="item-icon flex_box">
                                <span class="counter ts_04"><?=$body["section_body_1"]["staff"];?></span>
                                <span>+</span>
                              </div>
                              <div class="item-title text_center">Nhân sự</div>
                            </div>
                        </div>

                        <a href="<?=$body["section_body_1"]["link_post"];?>" class="btn btn-primary text_uppercase" style="position: relative;z-index: 1;">
                            Tìm hiểu thêm về az global
                        </a>
                    </div>
                </div>
                <div class="grid-30 tablet-grid-30 mobile-grid-100 grid-parent">
                    <div class="section-about-right">
                        <div class="box-year">
                            <h1 class="title flex_box">
                                <span class="counter ts_04"><?=$body["section_body_1"]["year_formed"];?></span>
                                <span>+</span>
                            </h1>
                            <h2 class="sub-title">năm hình thành & phát triển</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-img-thumb-about relative section">
                <div class="img_wrap">
                    <!-- <img src="<?=$body["section_body_1"]["image"];?>" alt=""> -->
                    <?= wp_get_attachment_image($body["section_body_1"]["image"]["ID"],""); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- section video -->
    <section class="section">
        <div class="section-video grid-container relative">
            <div class="bg-video">
                <div class="img_wrap">
                    <?= wp_get_attachment_image($body["section_body_1"]["bg_video"]["ID"],""); ?>
                </div>
                <button  class="btn-play-video">
                    <div class="img_wrap">
                        <img src="/wp-content/uploads/2023/11/Polygon-1.png" alt="">
                    </div>
                </button>

                <h2 class="title"><?=$body["section_body_1"]["thumnail_video"];?></h2>
            </div>
            <video class="video ts_04" id="video" src="<?=$body["section_body_1"]["video"];?>"></video>
        </div>
    </section>
    <!-- Section hoạt động -->
    <section class="section">
        <div class="section-active">
            <div class="grid-container">
                <h2 class="title">dịch vụ tại az global</h2>
                <h3 class="sub-title"><strong>Lĩnh vực</strong> hoạt động</h3>
                <div class="active-box">
                    <?php foreach($body["section_body_2"] as $value): ?>
                        <div class="item-active ts_04">
                            <div class="flex_box flex_wrap">
                                <div class="grid-60 tablet-grid-60 mobile-grid-100 grid-parent">
                                    <div class="item-image">
                                    <div class="img_wrap">
                                        <?= wp_get_attachment_image($value["image"]["ID"],"",array( "class" => "item-img" )); ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="grid-40 tablet-grid-40 mobile-grid-100 grid-parent">
                                    <div class="item-content">
                                        <h3 class="item-title"><?=$value["title"];?></h3>
                                        <?=$value["content"];?>
                                        <a href="<?=$value["link_post"];?>" class="btn btn-primary" style="display: block;">TÌM HIỂU THÊM</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="section-bottom realtive">
            <div class="img_wrap">
                <img src="/wp-content/uploads/2023/11/bg_img_bottom.png" alt="">
            </div>
            <div class="content-bot">
                <div class="grid-container h_full">
                    <div class="text_wrap text_center">
                        <h3 class="title text_white"><?= $body["section_body_3"]["title"] ?></h3>
                        <h2 class="sub-title">
                            <?= $body["section_body_3"]["sub_title"] ?>
                        </h2>
                        <?= $body["section_body_3"]["content"] ?>
                        <a href="<?= $body["section_body_3"]["link_dang_ky"] ?>" class="btn btn-primary">
                            ĐĂNG KÝ TƯ VẤN
                        </a>
                    </div>
                </div>
            </div>
            <div class="img-layer">
                <div class="img_wrap">
                    <img src="/wp-content/uploads/2023/11/NikesSoos-8955-1-e1701081065381.png" alt="">
                </div>
            </div>
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