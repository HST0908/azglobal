<?php
/**
 * Template name: Quản lý bất động sản
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
global $post;
// $banner = get_field("fields_banner", $post->ID, true);
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
                        <li class="menu-top-list-item"><a href="<?= $_SERVER['REQUEST_URI']?>">Quản lý bất động sản</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </Section>
    <!-- section banner -->
    <section class="section">
        <div class="section-banner">
            <div class="img_wrap">
                <img src="/wp-content/uploads/2023/12/banner_qlbds.png" alt="">
            </div>
        </div>
    </section>

    <!-- Section body -->
    <section class="section">
        <div class="grid-container">
            <div class="introduce-real-estate">
                <div class="col_6 tablet_col_6 mobile_col_12">
                    <div class="introduce-real-estate-left">
                        <div class="title-head">
                            <h1 class="title">Giới thiệu</h1>
                            <h2 class="sub_title">
                                <p>
                                    quản lý
                                </p>
                                <p><strong>Bất động sản</strong></p>
                            </h2>
                        </div>
                        <div class="content_box">
                            <p>
                                <strong>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                                </strong>
                            </p>
                            <p>
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                        <div class="flex_box jus_end introduce-service">
                            <div class="service-left">
                                <img src="/wp-content/uploads/2023/12/Group-882.svg" alt="">
                                <div>
                                <p>GIỚI THIỆU DỊCH VỤ</p>
                                <p>QUẢN LÝ BẤT ĐỘNG SẢN</p>
                                </div>
                            </div>
                            <div class="service-right">
                                <div class="img_wrap">
                                    <img src="/wp-content/uploads/2023/12/GkjAm9aVRr5bl7hqobnXgw-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_6 tablet_col_6 mobile_col_12">
                    <div class="introduce-real-estate-right">
                        <div class="img_wrap">
                            <img src="/wp-content/uploads/2023/12/z3489333299607_9e660972fb7f01161fe36266cf6a2509-1.png" alt="">
                        </div>
                        <div class="text_wrap">
                            <p>
                            Nhờ kinh nghiệm vững chắc và mối quan hệ của chúng tôi, các bất động sản của AZ Global luôn được xếp hạng ở vị trí hàng đầu trong kết quả tìm kiếm được khách truy cập xem.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="introduce-real-estate-bot">
                <div class="content_wrap">
                    <div class="list-real-estate">
                        <div class="item-real-estate">
                            <div class="flex_box">
                                <span class="counter">450</span>
                                <span>+</span>
                            </div>
                            <p>Bất động sản đang được quản lý</p>
                        </div>
                        <div class="item-real-estate">
                            <div class="flex_box">
                                <span><</span>
                                <span class="counter">15</span>
                                <span>-</span>
                                <span class="counter">20</span>
                                <span>%</span>
                            </div>
                            <p>Mức sinh lời cao hơn so với các BĐS xung quanh</p>
                        </div>
                        <div class="item-real-estate">
                            <div class="flex_box">
                                <span class="counter">50</span>
                                <span>+</span>
                            </div>
                            <p>Lượt tìm thuê vào mỗi tháng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dịch vụ quản lý -->
    <section class="section section-management-services">
        <div class="grid-container">
            <div class="management-services">
                <div class="flex_box flex_wrap al_center">
                    <h1 class="title col_6 tablet_col_6 mobile_col_12">
                        Dịch vụ quản lý
                    </h1>
                    <div class="col_6 tablet_col_6 mobile_col_12">
                    <p>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    </p>
                    </div>
                </div>
                <div class="management-services-box">
                    <div class="content_wrap">
                        <div class="item-left col_6 tablet_col_6 mobile_col_12">
                            <div class="img_box">
                                <img src="/wp-content/uploads/2023/12/Rectangle-18016.png" alt="">
                            </div>
                            <div class="text_wrap">
                                <div class="title">
                                quản lý bất động sản dài hạn
                                </div>
                                <ul class="management-services-box-list">
                                    <li>
                                        <h1 class="title">nền tảng cho thuê</h1>
                                        <p>Sale, Website</p>
                                    </li>
                                    <li>
                                        <h1 class="title">Thời gian cho thuê</h1>
                                        <p>Trung bình 3 tháng</p>
                                    </li>
                                    <li>
                                        <h1 class="title">Tỉ lệ sinh lời</h1>
                                        <p>3 - 4%</p>
                                    </li>
                                    <li>
                                        <h1 class="title">Phí quản lý</h1>
                                        <p>10%</p>
                                    </li>
                                </ul>
                                <a href="/bat-dong-san-dai-han/" class="btn btn-primary btn-block">Tìm hiểu dịch vụ</a>
                            </div>
                        </div>
                        <div class="item-right col_6 tablet_col_6 mobile_col_12">
                            <div class="img_box">
                                <img src="/wp-content/uploads/2023/12/Rectangle-18016-1.png" alt="">
                            </div>
                            <div class="text_wrap">
                                <div class="title">
                                quản lý bất động sản dài hạn
                                </div>
                                <ul class="management-services-box-list">
                                    <li>
                                        <h1 class="title">nền tảng cho thuê</h1>
                                        <p>Sale, Website</p>
                                    </li>
                                    <li>
                                        <h1 class="title">Thời gian cho thuê</h1>
                                        <p>Trung bình 3 tháng</p>
                                    </li>
                                    <li>
                                        <h1 class="title">Tỉ lệ sinh lời</h1>
                                        <p>3 - 4%</p>
                                    </li>
                                    <li>
                                        <h1 class="title">Phí quản lý</h1>
                                        <p>10%</p>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-block">Tìm hiểu dịch vụ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="grid-container">
            <div class="Choose-us-box">
                <h1 class="title">Vì sao chọn chúng tôi</h1>
                <div class="card-Choose-us-list">
                    <div class="item-card active">
                        <div class="inner">
                            <div class="img_wrap">
                                <img src="/wp-content/uploads/2023/12/Rectangle-18061.png" alt="">
                            </div>
                            <div class="text_wrap">
                                <h1 class="title">
                                Kinh nghiệm quản lý
                                </h1>
                                <p>
                                    Hơn 10 năm kinh nghiệm quản lý BĐS châu âu và là đơn vị đầu tiên có văn phòng đại diện tại Việt Nam
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="inner">
                            <div class="img_wrap">
                                <img src="/wp-content/uploads/2023/12/Rectangle-18061-1.png" alt="">
                            </div>
                            <div class="text_wrap">
                                <h1 class="title">
                                Quy trình thuận tiện
                                </h1>
                                <p>
                                Quy trình thuận tiện, dễ dàng tối ưu hoá thời gian quản lý cho khách hàng
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="inner">
                            <div class="img_wrap">
                                <img src="/wp-content/uploads/2023/12/Rectangle-18061-2.png" alt="">
                            </div>
                            <div class="text_wrap">
                                <h1 class="title">
                                mạng lưới môi giới
                                </h1>
                                <p>
                                Nhờ kinh nghiệm vững chắc và mối quan hệ của chúng tôi với các nền tảng cho thuê nhà nghỉ dưỡng hàng đầu .Các bất động sản của AZ Global luôn được xếp hạng ở vị trí hàng đầu trong kết quả tìm kiếm được khách truy cập xem. Ngoài ra, mạng lưới môi giới mà chúng tôi có luôn tìm được hơn 50 lượt thuê hàng tháng.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="inner">
                            <div class="img_wrap">
                                <img src="/wp-content/uploads/2023/12/Rectangle-18061-3.png" alt="">
                            </div>
                            <div class="text_wrap">
                                <h1 class="title">
                                Có Đội ngũ cải tạo & Bảo trì nội bộ
                                </h1>
                                <p>
                                Có Đội ngũ cải tạo & Bảo trì nội bộ.
                                -Chúng tôi nghiên cứu những căn hộ khách du lịch có xu hướng đặt nhiều đề xuất kế hoạch cải tạo tốt nhất để tối ưu hóa lợi nhuận bằng cách thay đổi nội thất, sắp xếp lại không gian của ngôi nhà 
                                - Kiểm tra và sửa chữa thường xuyên để đảm bảo chất lượng tốt nhất.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="inner">
                            <div class="img_wrap">
                                <img src="/wp-content/uploads/2023/12/Rectangle-18061-4.png" alt="">
                            </div>
                            <div class="text_wrap">
                                <h1 class="title">
                                Quản lý BĐS từ xa dành cho chủ nhà
                                </h1>
                                <p>
                                Quản lí bất động sản từ xa dành cho chủ nhà
                                -Theo dõi ai đến và đi khỏi nhà bạn bằng ổ khóa thông minh.
                                - Việc truy cập dữ liệu và cập nhật về căn hộ của bạn trở nên đơn giản hơn bao giờ hết
                                — thông qua một chiếc máy tính hoặc điện thoại thông minh của bạn. Xem các lượt đặt phòng sắp tới, kiểm tra hiệu suất doanh thu theo thời gian thực, quá trình dọn dẹp khi khách nhận phòng và trả phòng
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="inner">
                            <div class="img_wrap">
                                <img src="/wp-content/uploads/2023/12/Rectangle-18061-5.png" alt="">
                            </div>
                            <div class="text_wrap">
                                <h1 class="title">
                                mức sinh lời tốt so với thị trường
                                </h1>
                                <p>
                                Các căn hộ do công ty quản lí đều có mức sinh lời tốt hơn các căn hộ xung quanh từ 15 - 20%
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-revenue_forecast">
        <div class="grid-container">
            <div class="box-revenue">
                <div class="box_wrap">
                    <h1 class="title">Dự trù doanh thu</h1>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <?=the_field('form_du_tru') ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="grid-container">
            <div class="faq-section">
                <h1 class="title">
                    Câu hỏi thường gặp
                </h1>
                <div class="faq-box">
                    <div class="faq-item active">
                        <div class="faq-item-title flex_box jus_between al_center">
                            <span class="title">
                            Tôi có phải ký hợp đồng dài hạn không? Tôi có thể ở tại bất động sản trong thời gian kinh doanh không?
                            </span>
                            <div class="button_icon">
                                <img src="/wp-content/uploads/2023/12/Group-19424.svg" alt="">
                                <img src="/wp-content/uploads/2023/12/Group-19403.svg" alt="">
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>
                            Với tư cách là người bạn đồng hành của bạn trong dịch vụ quản lí căn hộ ,chúng tôi luôn hy vọng được tiếp tục mang đến cho bạn những giá trị tốt nhất. AZ Global mong rằng với 1 năm trải nghiệm những khách hàng của công ty cũng sẽ cảm thấy vậy. Để đảm bảo tối đa lợi ích từ việc kinh doanh và hồ sơ căn hộ, quý khách cần thông báo tối thiểu 15 ngày nếu quý khách dự định ở vào cuối tuần và tối thiểu 7 ngày nếu quý khách dự định ở vào các ngày trong tuần. Thời gian lưu trú tối đa tại BĐS trong thời gian vận hành của quý khách là 10 ngày.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title flex_box jus_between al_center">
                            <span class="title">
                            Phí quản lý căn hộ của AZ được tính như thế nào?
                            </span>
                            <div class="button_icon">
                                <img src="/wp-content/uploads/2023/12/Group-19424.svg" alt="">
                                <img src="/wp-content/uploads/2023/12/Group-19403.svg" alt="">
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>
                            Với tư cách là người bạn đồng hành của bạn trong dịch vụ quản lí căn hộ ,chúng tôi luôn hy vọng được tiếp tục mang đến cho bạn những giá trị tốt nhất. AZ Global mong rằng với 1 năm trải nghiệm những khách hàng của công ty cũng sẽ cảm thấy vậy. Để đảm bảo tối đa lợi ích từ việc kinh doanh và hồ sơ căn hộ, quý khách cần thông báo tối thiểu 15 ngày nếu quý khách dự định ở vào cuối tuần và tối thiểu 7 ngày nếu quý khách dự định ở vào các ngày trong tuần. Thời gian lưu trú tối đa tại BĐS trong thời gian vận hành của quý khách là 10 ngày.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title flex_box jus_between al_center">
                            <span class="title">
                            AZ Global hiện đang hoạt động những thị trường nào?
                            </span>
                            <div class="button_icon">
                                <img src="/wp-content/uploads/2023/12/Group-19424.svg" alt="">
                                <img src="/wp-content/uploads/2023/12/Group-19403.svg" alt="">
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>
                            Với tư cách là người bạn đồng hành của bạn trong dịch vụ quản lí căn hộ ,chúng tôi luôn hy vọng được tiếp tục mang đến cho bạn những giá trị tốt nhất. AZ Global mong rằng với 1 năm trải nghiệm những khách hàng của công ty cũng sẽ cảm thấy vậy. Để đảm bảo tối đa lợi ích từ việc kinh doanh và hồ sơ căn hộ, quý khách cần thông báo tối thiểu 15 ngày nếu quý khách dự định ở vào cuối tuần và tối thiểu 7 ngày nếu quý khách dự định ở vào các ngày trong tuần. Thời gian lưu trú tối đa tại BĐS trong thời gian vận hành của quý khách là 10 ngày.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item-title flex_box jus_between al_center">
                            <span class="title">
                            Căn hộ của tôi sẽ được quảng cáo như thế nào?
                            </span>
                            <div class="button_icon">
                                <img src="/wp-content/uploads/2023/12/Group-19424.svg" alt="">
                                <img src="/wp-content/uploads/2023/12/Group-19403.svg" alt="">
                            </div>
                        </div>
                        <div class="faq-item-content">
                            <p>
                            Với tư cách là người bạn đồng hành của bạn trong dịch vụ quản lí căn hộ ,chúng tôi luôn hy vọng được tiếp tục mang đến cho bạn những giá trị tốt nhất. AZ Global mong rằng với 1 năm trải nghiệm những khách hàng của công ty cũng sẽ cảm thấy vậy. Để đảm bảo tối đa lợi ích từ việc kinh doanh và hồ sơ căn hộ, quý khách cần thông báo tối thiểu 15 ngày nếu quý khách dự định ở vào cuối tuần và tối thiểu 7 ngày nếu quý khách dự định ở vào các ngày trong tuần. Thời gian lưu trú tối đa tại BĐS trong thời gian vận hành của quý khách là 10 ngày.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-video-bot">
            <div class="content-box">
                <div class="grid-container h_full flex_box al_center">
                    <div class="box_wrap">
                        <div class="image_logo">
                            <img src="/wp-content/uploads/2023/12/Layer_1-1.png" alt="">
                        </div>
                        <div class="text_wrap">
                            <h1 class="title">
                            liên hệ để được chuyên gia của chúng tôi tư vấn ngay hôm nay!
                            </h1>
                            <a href="#" class="btn btn-primary">
                                Đăng ký tư vấn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <video id="video_page_gt" loop src="/wp-content/uploads/2023/12/8a53-40e3-b5ba-d737d8bf43cb.mov" class="video_bg"></video>
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