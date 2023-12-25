<?php
/**
 * The Template for displaying all single posts.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
global $post;
 ?>
<div class="main_container">
    <!-- section menu top -->
    <Section class="section">
        <div class="grid-container">
            <div class="menu_top_drive">
                <div class="menu_top_drive-box">
                    <ul class="menu-top-list">
                        <li class="menu-top-list-item"><a class="disable seprate" href="http://azglobal.test/">Trangchủ</a></li>
                        <!-- <div class="separate"></div> -->
                        <li class="menu-top-list-item"><a class="disable seprate" href="http://azglobal.test/tin-tuc">Tin tức</a></li>
                        <!-- <div class="separate"></div> -->
                        <li class="menu-top-list-item"><a href="<?= $_SERVER['REQUEST_URI']?>"><?= get_the_title() ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </Section>

    <section class="section">
        <div class="grid-container">
            <div class="details_post-box">
                <div class="details_post-box-wrap">
                    <h1 class="title">
                    Hungary chuẩn bị thay đổi luật định cư và cư trú cho người nước ngoài
                    </h1>
                    <div class="share_box flex_box jus_between">
                        <div class="share_box-left flex_box">
                            <span>20/10/2023</span>
                            <span>Định cư</span>
                        </div>
                        <div class="share_box-right flex_box">
                            <span>Chia sẻ </span>
                            <a href="#">
                                <img src="/wp-content/uploads/2023/12/Social-icon-fb.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="/wp-content/uploads/2023/12/Social-icon-twitter.svg" alt="">
                            </a>
                        </div>

                    </div>
                    <div class="details_post-content">
                        <p>
                            <strong>
                            Ngày 14/11/2023, chính phủ Hungary đã đưa ra dự luật điều chỉnh các loại hình nhập cư tại Hungary, trong đó bao gồm cả chương trình định cư Hungary diện đầu tư.
                            </strong>
                        </p>
                        <p>
                        Theo các thống kê của Viện Nghiên cứu Nhân khẩu học Hungary, dòng người nước ngoài nhập cư vào nước này đã tăng mạnh trong giai đoạn 2000-2020. Từ mức ổn định chỉ khoảng 20-25.000 người mỗi năm lên đỉnh điểm 55.000 người vào năm 2019.
                        </p>
                        <p>
                        Năm 2020, con số trên có sự suy giảm do đại dịch COVID-19, song vẫn ở mức rất cao là 44.000 người. Tổng số người nước ngoài hiện đang sinh sống tại Hungary hiện ở mức khoảng 200.000 người, cao gấp đôi so với giai đoạn năm 2000 đổ về trước.
                        </p>
                        <p>

                            Trong số những người nước ngoài sinh sống tại Hungary, phần đông vẫn là công dân các nước láng giềng tới định cư và làm việc. Điều này được cho là hệ quả của một chính sách được Chính phủ Hungary ban hành từ năm 2016, cho phép công dân các nước láng giềng được tới làm việc mà không cần phải có giấy phép đặc biệt. Đây là một biện pháp được áp dụng để giải quyết tình trạng thiếu hụt lao động của Hungary trong giai đoạn đó.
                        </p>
                        <p>
                            Nếu không tính các nước láng giềng, các nước có đông công dân sinh sống tại Hungary nhất là Đức – chiếm 1/3, và các nước châu Á – chiếm 1/4.
                            Trong số 200.000 người nước ngoài đang sống tại Hungary, có 71.000 người tới để làm việc, 29.000 người là du học sinh, 33.000 người có mong muốn định cư dài hạn, và hơn 23.000 tới đoàn tụ gia đình.
                        </p>
                        <p>
                            <img src="/wp-content/uploads/2023/12/Rectangle-858.png" alt="">
                        </p>
                        <p>
                        Nếu dự luật này được thông qua, chương trình đầu tư định cư Hungary diện đầu tư sẽ chính thức được ban hành bởi Chính phủ (thay vì Sở Di trú như hiện tại) với tên gọi là Guest Investor Program và có thể sẽ áp dụng vào đầu năm 2024.
                        </p>
                        <p>
                            <strong>
                            Định cư Hungary vì sao ngày càng trở nên hấp dẫn hơn trong mắt nhà đầu tư nước ngoài?
                            </strong>
                        </p>
                        <p>
                            Từ đó cho đến nay, chương trình định cư Hungary cũng nhận được rất nhiều sự quan tâm từ khắp nơi trên thế giới, trong đó có các nhà đầu tư Việt Nam, với những ưu điểm vượt trội:
                            + Chương trình DUY NHẤT cho phép nhận thẻ định cư trước rồi mới tiến hành đầu tư.
                            + Thời gian ra thẻ nhanh và quá trình xử lý hồ sơ đến khi ra thẻ có thể được thực hiện toàn bộ tại Việt Nam.
                            + Thẻ cư trú áp dụng cho cả vợ/chồng, bố mẹ trên 65 tuổi và con cái dưới 18 tuổi.
                            + Cả gia đình sống trong môi trường an toàn với hệ thống hạ tầng hiện đại, được chăm sóc sức khỏe theo chuẩn châu Âu.
                        </p>
                        <p>
                            <img src="/wp-content/uploads/2023/12/Rectangle-859.png" alt="">
                        </p>
                    </div>
                    <div class="bot_detail-post flex_box jus_between al_center">
                        <div class="flex_box jus_center flex_wrap al_center">
                            <span>Xem thêm: </span>
                            <a href="#">
                                Những quyền lợi của người được cấp visa định cư Hungary
                            </a>
                        </div>
                        <a href="#" class="arrow-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
                                <path d="M5.9375 19H32.0625" stroke="#333333" stroke-width="1.5" stroke-linecap="square"/>
                                <path d="M22 8.3125L32.6875 19L22 29.6875" stroke="#333333" stroke-width="1.5" stroke-linecap="square"/>
                            </svg>
                        </a>
                    </div>
                    <div class="tag_box">
                        <span>Tags: </span>
                        <a href="#">Hungary</a>
                        <a href="#">Đầu tư Định cư</a>
                        <a href="#">AZ Global</a>
                        <a href="#">Định cư Hungary</a>
                    </div>
                </div>
            </div>
            <div class="related-news-box">
                <h1 class="title">Tin tức liên quan</h1>
                <ul class="grid_box grid_3 mobile_grid_2 related-list">
                    <li class="related-item">
                        <div class="item_wrap">
                            <div class="img_wrap">
                                <a href="#">
                                    <img src="/wp-content/uploads/2023/12/Rectangle-17852-1.png" alt="">
                                </a>
                            </div>
                            <div class="text_wrap">
                                <div class="title-date flex_box">
                                    <span>08/12/2023</span>
                                    <span>Định cư</span>
                                </div>
                                <h1 class="title">
                                    <a href="#" class="limit_line limit_2">
                                    Chương trình định cư Hungary hấp dẫn hơn bao giờ hết sau những cập nhật mới
                                    </a>
                                </h1>
                                <p class="excertp limit_line limit_3">
                                    AZ Global luôn lấy khách hàng làm trọng tâm phát triển, luôn cố gắng mang lại trải nghiệm trọn vẹn cho khách hàng. Lắng nghe những phản hồi và từ đó dốc sức nâng cao chất lượng dịch vụ
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="related-item">
                        <div class="item_wrap">
                            <div class="img_wrap">
                                <a href="#">
                                    <img src="/wp-content/uploads/2023/12/Rectangle-17852-2.png" alt="">
                                </a>
                            </div>
                            <div class="text_wrap">
                                <div class="title-date flex_box">
                                    <span>08/12/2023</span>
                                    <span>Định cư</span>
                                </div>
                                <h1 class="title">
                                    <a href="#" class="limit_line limit_2">
                                    Chương trình định cư Hungary hấp dẫn hơn bao giờ hết sau những cập nhật mới
                                    </a>
                                </h1>
                                <p class="excertp limit_line limit_3">
                                   Lắng nghe những phản hồi và từ đó dốc sức nâng cao chất lượng dịch vụ
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="related-item">
                        <div class="item_wrap">
                            <div class="img_wrap">
                                <a href="#">
                                    <img src="/wp-content/uploads/2023/12/Rectangle-17852-3.png" alt="">
                                </a>
                            </div>
                            <div class="text_wrap">
                                <div class="title-date flex_box">
                                    <span>08/12/2023</span>
                                    <span>Định cư</span>
                                </div>
                                <h1 class="title">
                                    <a href="#" class="limit_line limit_2">
                                    Chương trình định cư Hungary hấp dẫn hơn bao giờ hết sau những cập nhật mới
                                    </a>
                                </h1>
                                <p class="excertp limit_line limit_3">
                                    AZ Global luôn lấy khách hàng làm trọng tâm phát triển, luôn cố gắng mang lại trải nghiệm trọn vẹn cho khách hàng. Lắng nghe những phản hồi và từ đó dốc sức nâng cao chất lượng dịch vụ
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
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