<?php
/**
 * Template name: Trang giới thiệu
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header();
global $post;
// $banner = get_field("fields_banner", $post->ID, true);
// $body = get_field("body_page", $post->ID, true);
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
                        <li class="menu-top-list-item"><a href="<?= $_SERVER['REQUEST_URI']?>">Về AZ Global</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </Section>
    <!-- section banner -->
    <section class="section">
        <div class="section-banner">
            <div class="img_wrap">
                <img src="/wp-content/uploads/2023/12/banner_gioithieu.png" alt="">
            </div>
        </div>
    </section>
    <!-- section 1 -->
    <section class="section">
        <div class="section-overview_Introduction">
            <div class="overview-box">
                <div class="overview-box-top">
                    <div class="grid-container text_center">
                        <h1 class="title">Giới thiệu tổng quan</h1>
                        <h2 class="sub-title">
                            <p>Về <strong>AZ Global</strong></p>
                        </h2>
                        <div class="content">
                            <p>AZ Global là công ty tư vấn di trú, trải qua nhiều năm hoạt động chúng tôi đã giải quyết hàng nghìn hồ sơ thành công và đưa gần một nghìn công dân trở thành công dân toàn cầu.</p>
                            <p>
                                Đến nay, AZ Global đã có 7 văn phòng làm việc tại Đức, Hungary, Bồ Đào Nha, Pháp, Croatia, Việt Nam và Australia Với bề dày kinh nghiệm cùng sự tận tâm, 
                                chúng tôi hiểu rằng mỗi cá nhân đều mang trong mình câu chuyện và mục tiêu riêng.AZ Global luôn lắng nghe và tư vấn những giải pháp tối ưu nhất dành cho khách hàng. 
                                Chúng tôi đã và luôn là người bạn,người đồng hành của các nhà đầu tư trên chặng đường trở thành Công Dân Toàn Cầu.
                            </p>
                        </div>
                        <div class="box-list-img-about">
                            <div class="list-img-about">
                                <div class="grid-50 tablet-grid-50 mobile-grid-100 grid-parent">
                                    <div class="item-img ts_04">
                                        <div class="grid-50 tablet-grid-50 mobile-grid-50">
                                            <div class="img_wrap">
                                                <img src="/wp-content/uploads/2023/12/Rectangle-17783.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-img ts_04">
                                        <div class="grid-50 tablet-grid-50 mobile-grid-50">
                                            <div class="img_wrap">
                                                <img src="/wp-content/uploads/2023/12/Rectangle-17784.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-50 tablet-grid-50 mobile-grid-100 grid-parent">
                                    <div class="item-img ts_04">
                                        <div class="grid-50 tablet-grid-50 mobile-grid-50">
                                            <div class="img_wrap">
                                                <img src="/wp-content/uploads/2023/12/Rectangle-17785.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-img ts_04">
                                        <div class="grid-50 tablet-grid-50 mobile-grid-50">
                                            <div class="img_wrap">
                                                <img src="/wp-content/uploads/2023/12/Rectangle-17786.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overview-box-bot">
                    <div class="box-list-content">
                        <div class="list-content-about">
                            <div class="item-list-content-about">
                                <div class="grid-100 tablet-grid-100 mobile-grid-100 grid-parent">
                                    <div class="box">
                                        <div class="grid-50 tablet-grid-50 mobile-grid-100">
                                            <div class="item-left">
                                                <div class="title">
                                                    <p>
                                                        <strong>Tầm nhìn</strong>
                                                        &
                                                        <strong>Sứ mệnh</strong>
                                                    </p>
                                                </div>
                                                <div class="box-content-list">
                                                    <div class="item flex_box">
                                                        <div class="item-icon">
                                                            <div class="img_wrap">
                                                                <img src="/wp-content/uploads/2023/12/Mask-group.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <h1 class="title">Tầm nhìn</h1>
                                                            <p>Khẳng định vị trí tiên phong của công ty trong lĩnh vực thẻ định cư toàn cầu với dịch vụ chuyên nghiệp & chất lượng vượt trội</p>
                                                        </div>
                                                    </div>
                                                    <div class="item flex_box">
                                                        <div class="item-icon">
                                                            <div class="img_wrap">
                                                                <img src="/wp-content/uploads/2023/12/Mask-group2.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <h1 class="title">Sứ mệnh</h1>
                                                            <p>Đơn giản hóa hành trình,kết nối các nền văn hóa khác nhau và từ đó mở ra một thế giới mới</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-50 tablet-grid-50 mobile-grid-100 grid-parent">
                                            <div class="item-right">
                                                <div class="img_wrap">
                                                    <img src="/wp-content/uploads/2023/12/Rectangle-17801.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-list-content-about">
                                <div class="grid-100 tablet-grid-100 mobile-grid-100 grid-parent">
                                    <div class="box">
                                        <div class="grid-50 tablet-grid-50">
                                        <div class="item-left">
                                                <div class="title">
                                                    <p>
                                                        <strong>
                                                            Giá trị cốt lõi
                                                        </strong>
                                                    </p>
                                                </div>
                                                <div class="box-content-list">
                                                    <div class="item  flex_box">
                                                        <div class="item-icon">
                                                            <div class="img_wrap">
                                                                <img src="/wp-content/uploads/2023/12/Mask-group3.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <h1 class="title">Lấy khách hàng làm trung tâm</h1>
                                                            <p>AZ Global luôn lấy khách hàng làm trọng tâm phát triển, luôn cố gắng mang lại trải nghiệm trọn vẹn cho khách hàng. Lắng nghe những phản hồi và từ đó dốc sức nâng cao chất lượng dịch vụ</p>
                                                        </div>
                                                    </div>
                                                    <div class="item  flex_box">
                                                        <div class="item-icon">
                                                            <div class="img_wrap">
                                                                <img src="/wp-content/uploads/2023/12/Mask-group4.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <h1 class="title">Đáng tin cậy và có tính bảo mật cao</h1>
                                                            <p>Xuyên suốt chặng đường 20 năm hoạt động với nhiều đối tác trong và ngoài nước, AZ Global luôn là đối tác đáng tin cậy, thông tin và tại liệu của các khách hàng đều được chúng tôi bảo mật chặt chẽ.</p>
                                                        </div>
                                                    </div>
                                                    <div class="item  flex_box">
                                                        <div class="item-icon">
                                                            <div class="img_wrap">
                                                                <img src="/wp-content/uploads/2023/12/Mask-group5.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <h1 class="title">Hòa nhập văn hóa</h1>
                                                            <p>Là cầu nối cho khách hàng bước ra thế giới</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-50 tablet-grid-50 grid-parent">
                                        <div class="item-right">
                                                <div class="img_wrap">
                                                    <img src="/wp-content/uploads/2023/12/Rectangle-17800.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- quá trình phát triển -->
    <section class="section">
        <div class="section_development">
            <div class="grid-container">
                <div class="development-box">
                    <h1 class="title">Quá trình phát triển</h1>
                    <div class="sub-title">
                        <p>
                            <strong>Lịch sử</strong>
                            hình thành
                        </p>
                    </div>
                    <div class="describe-title">
                        <p>
                            <strong>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </strong>
                        </p>
                    </div>
                    <div class="development-box-video">
                        <div class="development-video-inner video_page_gt">
                            <video id="video_page_gt" src="/wp-content/uploads/2023/12/video-hinhthanh-phattrien.mp4"></video>
                        </div>
                    </div>
                    <div class="box-tree-development">
                        <ul class="list-tree">
                            <li class="item-tree">
                                <div class="grid-50 tablet-grid-50 mobile-grid-50">
                                    <div class="left-item">
                                        <div class="content_wrap">
                                            <h1 class="title">Thành lập HNS Travel</h1>
                                            <p>
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-50 tablet-grid-50 mobile-grid-50">
                                    <div class="right-item">
                                        <div class="content_wrap">
                                            <h1 class="title2">thang 8/2023</h1>
                                            <div class="grid-img">
                                                <img src="/wp-content/uploads/2023/12/Rectangle-17788.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item-tree">
                                <div class="grid-50 tablet-grid-50 mobile-grid-50">
                                    <div class="left-item">
                                        <div class="content_wrap">
                                            <h1 class="title">Mở rộng HNS Travel, HNS Education và HNS Immigration</h1>
                                            <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-50 tablet-grid-50 mobile-grid-50">
                                    <div class="right-item">
                                        <div class="content_wrap">
                                            <h1 class="title2">nam 2005</h1>
                                            <div class="grid-img">
                                                <img src="/wp-content/uploads/2023/12/Group-19402.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item-tree">
                                <div class="grid-50 tablet-grid-50 mobile-grid-50">
                                    <div class="left-item">
                                        <div class="content_wrap">
                                            <h1 class="title">AZ Global được thành lập</h1>
                                            <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-50 tablet-grid-50 mobile-grid-50">
                                    <div class="right-item">
                                        <div class="content_wrap">
                                            <h1 class="title2">nam 2010</h1>
                                            <div class="grid-img">
                                                <img src="/wp-content/uploads/2023/12/Group-19401.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box_image">
                <div class="img_wrap">
                    <img src="/wp-content/uploads/2023/12/Rectangle-17802.png" alt="">
                </div>
                <div class="text-box">
                    <div class="grid-container">
                        <div class="text_inner">
                            <div class="text_wrap">
                                <h1 class="title">AZ GLOBAL</h1>
                                <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                </p>
                                <h2 class="slogan">Where your dream gets built</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Thành viên hình thành -->
    <section class="section">
        <div class="grid-container grid-parent">
            <div class="section-members_formed">
                <div class="title-top flex_box">
                    <div class="title-top-left grid-66 tablet-grid-66 mobile-grid-100 grid-parent">
                        <div class="title">Thành viên công ty</div>
                        <div class="sub-title">
                            <p>
                                <strong>Thành viên</strong>
                                hình thành
                            </p>
                        </div>
                    </div>
                    <div class="title-top-right grid-33 tablet-grid-33 mobile-grid-100 grid-parent">
                        <p>
                            <strong>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="Board-of-manager-box">
                    <div class="manager-banner-title">
                        Ban giám đốc
                    </div>
                    <div class="manager-box-list">
                        <ul class="manger-list grid-100 grid-parent">
                            <li class="manger-list-item grid-33 tablet-grid-33 mobile-grid-50">
                                <div class="box">
                                    <h1 class="title">tổng giám đốc</h1>
                                    <div class="box_image">
                                        <h2 class="title-img">Mrs.hoàng ninh</h2>
                                        <div class="img_wrap">
                                            <img src="/wp-content/uploads/2023/12/Rectangle-17808.png" alt="">
                                        </div>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                                <path d="M15 0V31" stroke="white"/>
                                                <path d="M31 16L0 16" stroke="white"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="manger-list-item grid-33 tablet-grid-33 mobile-grid-50">
                                <div class="box">
                                    <h1 class="title">tổng giám đốc</h1>
                                    <div class="box_image">
                                        <h2 class="title-img">Mrs.hoàng ninh</h2>
                                        <div class="img_wrap">
                                            <img src="/wp-content/uploads/2023/12/Rectangle-17817.png" alt="">
                                        </div>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                                <path d="M15 0V31" stroke="white"/>
                                                <path d="M31 16L0 16" stroke="white"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="manger-list-item grid-33 tablet-grid-33 mobile-grid-50">
                                <div class="box">
                                    <h1 class="title">tổng giám đốc</h1>
                                    <div class="box_image">
                                        <h2 class="title-img">Mrs.hoàng ninh</h2>
                                        <div class="img_wrap">
                                            <img src="/wp-content/uploads/2023/12/Rectangle-17816.png" alt="">
                                        </div>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                                <path d="M15 0V31" stroke="white"/>
                                                <path d="M31 16L0 16" stroke="white"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="manger-list-item grid-33 tablet-grid-33 mobile-grid-50">
                                <div class="box">
                                    <h1 class="title">tổng giám đốc</h1>
                                    <div class="box_image">
                                        <h2 class="title-img">Mrs.hoàng ninh</h2>
                                        <div class="img_wrap">
                                            <img src="/wp-content/uploads/2023/12/Rectangle-17812.png" alt="">
                                        </div>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                                <path d="M15 0V31" stroke="white"/>
                                                <path d="M31 16L0 16" stroke="white"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="manger-list-item grid-33 tablet-grid-33 mobile-grid-50">
                                <div class="box">
                                    <h1 class="title">tổng giám đốc</h1>
                                    <div class="box_image">
                                        <h2 class="title-img">Mrs.hoàng ninh</h2>
                                        <div class="img_wrap">
                                            <img src="/wp-content/uploads/2023/12/Rectangle-17813.png" alt="">
                                        </div>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                                <path d="M15 0V31" stroke="white"/>
                                                <path d="M31 16L0 16" stroke="white"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="manger-list-item grid-33 tablet-grid-33 mobile-grid-50">
                                <div class="box">
                                    <h1 class="title">tổng giám đốc</h1>
                                    <div class="box_image">
                                        <h2 class="title-img">Mrs.hoàng ninh</h2>
                                        <div class="img_wrap">
                                            <img src="/wp-content/uploads/2023/12/Rectangle-17814.png" alt="">
                                        </div>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                                <path d="M15 0V31" stroke="white"/>
                                                <path d="M31 16L0 16" stroke="white"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="manager-banner-title">
                       Đội ngũ chuyên gia
                    </div>
                    <div class="manager-box-list">
                        <ul class="manger-list grid-100 grid-parent">
                            <li class="manger-list-item grid-33 tablet-grid-33 mobile-grid-50">
                                <div class="box">
                                    <h1 class="title">tổng giám đốc</h1>
                                    <div class="box_image">
                                        <h2 class="title-img">Mrs.hoàng ninh</h2>
                                        <div class="img_wrap">
                                            <img src="/wp-content/uploads/2023/12/Rectangle-17808.png" alt="">
                                        </div>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                                <path d="M15 0V31" stroke="white"/>
                                                <path d="M31 16L0 16" stroke="white"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="manger-list-item grid-33 tablet-grid-33 mobile-grid-50">
                                <div class="box">
                                    <h1 class="title">tổng giám đốc</h1>
                                    <div class="box_image">
                                        <h2 class="title-img">Mrs.hoàng ninh</h2>
                                        <div class="img_wrap">
                                            <img src="/wp-content/uploads/2023/12/Rectangle-17817.png" alt="">
                                        </div>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                                <path d="M15 0V31" stroke="white"/>
                                                <path d="M31 16L0 16" stroke="white"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="manger-list-item grid-33 tablet-grid-33 mobile-grid-50">
                                <div class="box">
                                    <h1 class="title">tổng giám đốc</h1>
                                    <div class="box_image">
                                        <h2 class="title-img">Mrs.hoàng ninh</h2>
                                        <div class="img_wrap">
                                            <img src="/wp-content/uploads/2023/12/Rectangle-17816.png" alt="">
                                        </div>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                                <path d="M15 0V31" stroke="white"/>
                                                <path d="M31 16L0 16" stroke="white"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>           
            </div>
        </div>
    </section>
    <section class="section">
        <div class="section_partner relative">
            <div class="grid-container">
                <h1 class="title">Đối tác khách hàng</h1>
                <h2 class="sub_title"><p>
                    <strong>Đối tác</strong>
                    quốc tế
                </p></h2>
                <div class="logo-partner-box">
                    <div class="swiper swiper-partner">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <table>
                                    <tr>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-1.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-2.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-3.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-4.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-5.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-6.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-7.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-8.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-9.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-10.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-11.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-12.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-13.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-14.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="swiper-slide">
                                <table>
                                    <tr>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-1.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-2.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-3.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-4.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-5.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-6.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-7.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-8.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-9.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-10.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-11.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-12.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-13.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                        <td> 
                                            <span class="logo_partner">
                                                <div class="image">
                                                    <img src="/wp-content/uploads/2023/12/Logo-14.svg" alt="">
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                        <div class="swiper-pagination-partner text_center"></div>
                    </div>
                    <!-- <table>
                        <tr>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo.svg" alt="">
                                    </div>
                                </span>
                            </td>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-1.svg" alt="">
                                    </div>
                                </span>
                            </td>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-2.svg" alt="">
                                    </div>
                                </span>
                            </td>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-3.svg" alt="">
                                    </div>
                                </span>
                            </td>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-4.svg" alt="">
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-5.svg" alt="">
                                    </div>
                                </span>
                            </td>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-6.svg" alt="">
                                    </div>
                                </span>
                            </td>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-7.svg" alt="">
                                    </div>
                                </span>
                            </td>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-8.svg" alt="">
                                    </div>
                                </span>
                            </td>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-9.svg" alt="">
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-10.svg" alt="">
                                    </div>
                                </span>
                            </td>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-11.svg" alt="">
                                    </div>
                                </span>
                            </td>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-12.svg" alt="">
                                    </div>
                                </span>
                            </td>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-13.svg" alt="">
                                    </div>
                                </span>
                            </td>
                            <td> 
                                <span class="logo_partner">
                                    <div class="image">
                                        <img src="/wp-content/uploads/2023/12/Logo-14.svg" alt="">
                                    </div>
                                </span>
                            </td>
                        </tr>
                    </table> -->
                </div>
            </div>
        </div>
    </section>
</div>
<div class="over_lay over_lay-boss">
    <div class="popup_box">
        <div class="popup_inner">
            <span class="btn_close_popup" >
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                    <path d="M47.8063 16.3408L16.3401 47.8071" stroke="#BBBBBB"/>
                    <path d="M48.1599 47.8066L16.6937 16.3404" stroke="#BBBBBB"/>
                </svg>
            </span>
            <div class="popup_wrap flex_box">
                <div class="col_4 tablet_col_4 mobile_col_4">
                    <div class="img_wrap">
                        <img src="/wp-content/uploads/2023/12/Rectangle-17808.png" alt="">
                    </div>
                </div>
                <div class="col_8 tablet_col_8 mobile_col_8">
                    <div class="content_wrap">
                        <h1 class="title">mrs.hoàng ninh</h1>
                        <h2 class="sub_title">Tổng giám đốc</h2>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a id="scroll-to-top" title="Scroll back to top" aria-label="Scroll back to top" rel="nofollow" href="#" class="generate-back-to-top generate-back-to-top__show" data-scroll-speed="400" data-start-scroll="300">
    <span class="gp-icon icon-arrow-up">
        <svg viewBox="0 0 330 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
            <path d="M305.863 314.916c0 2.266-1.133 4.815-2.832 6.514l-14.157 14.163c-1.699 1.7-3.964 2.832-6.513 2.832-2.265 0-4.813-1.133-6.512-2.832L164.572 224.276 53.295 335.593c-1.699 1.7-4.247 2.832-6.512 2.832-2.265 0-4.814-1.133-6.513-2.832L26.113 321.43c-1.699-1.7-2.831-4.248-2.831-6.514s1.132-4.816 2.831-6.515L158.06 176.408c1.699-1.7 4.247-2.833 6.512-2.833 2.265 0 4.814 1.133 6.513 2.833L303.03 308.4c1.7 1.7 2.832 4.249 2.832 6.515z" fill-rule="nonzero"></path>
        </svg>
    </span>
</a>



<?php get_footer();