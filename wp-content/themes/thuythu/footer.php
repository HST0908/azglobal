<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	</div>
</div>

<?php
/**
 * generate_before_footer hook.
 *
 * @since 0.1
 */
do_action( 'generate_before_footer' );
?>

<div <?php generate_do_attr( 'footer' ); ?>>
	<!-- code -->
	<div class="footer_main section">
		<div class="grid-container grid-parent">
			<div class="footer-box">
				<div class="grid-container grid-parent">
					<div class="flex-box jus_between flex_wrap">
						<div class="grid-50 mobile-grid-100 grid-parent">
							<div class="grid-50 tablet-grid-50 mobile-grid-100">
								<div class="footer-block">
									<div class="logo-footer">
										<img src="/wp-content/uploads/2023/12/Layer_1.png" alt="">
									</div>
									<ul class="list-item-footer">
										<li class="item-list">
											<img src="/wp-content/uploads/2023/11/MapPin.svg" alt="">
											<div class="grid_box">
												<span class="footer-text">
													<strong>Trụ sở chính: </strong>
													1068 Budapest, Felso Erdosor 8, Hungary
												</span>
												<span class="footer-text">
													<strong>Chi nhánh Hà Nội: </strong>
													Tầng 3, pax sky tower, 63-65 Ngô Thị Nhậm, Hai Bà Trưng, ​​Hà Nội
												</span>
											</div>
										</li>
										<li class="item-list">
											<img src="/wp-content/uploads/2023/11/Phone.svg" alt="">
											<span class="footer-text">
												<strong>Hotline: </strong>
												<a class="text_white" href="tel:+10900636109">
													10900 636109
												</a>
											</span>
										</li>
										<li class="item-list">
											<img src="/wp-content/uploads/2023/11/EnvelopeSimple.svg" alt="">
											<span class="footer-text">
												<strong>Email: </strong>
												<a class="text_white" href="mailto:info@azglobal.com.vn">
													info@azglobal.com.vn
												</a>
											</span>
										</li>
										<li class="item-list">
											<img src="/wp-content/uploads/2023/11/Barcode.svg" alt="">
											<span class="footer-text">
												<strong>Mã số thuế: </strong>
												0107729275
											</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="grid-50 tablet-grid-50 mobile-grid-100">
								<div class="footer-block">
									<div class="footer-block-about">
										<h2 class="title-footer">Về az global</h2>
										<ul class="list-item">
											<li class="item">
												<span class="title">Giới thiệu về AZ Global</span>
											</li>
											<li class="item">
												<span class="title">Tại sao chọn chúng tôi?</span>
											</li>
											<li class="item">
												<span class="title">Quá trình phát triển</span>
											</li>
											<li class="item">
												<span class="title">Thành tựu, chứng nhận</span>
											</li>
											<li class="item">
												<span class="title">Đội ngũ nhân sự AZ Global</span>
											</li>
											<li class="item">
												<span class="title">Đánh giá nhận xét từ khách hàng</span>
											</li>
											<li class="item">
												<span class="title">Văn hóa doanh nghiệp</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="grid-50 mobile-grid-100 grid-parent">
							<div class="grid-50 tablet-grid-50 mobile-grid-100">
								<div class="footer-block">
								<h2 class="title-footer">Chương trình định cư</h2>
								<ul class="list-item">
									<li class="item">
										<span class="title">Định cư Hungary</span>
									</li>
									<li class="item">
										<span class="title">Định cư Bồ Đào Nha</span>
									</li>
									<li class="item">
										<span class="title">Định cư Saint Lucia</span>
									</li>
									<li class="item">
										<span class="title">Định cư Đảo Síp</span>
									</li>
									<li class="item">
										<span class="title">Định cư Hy Lạp</span>
									</li>
									<li class="item">
										<span class="title">Định cư Mỹ</span>
									</li>
									<li class="item">
										<span class="title">Định cư Croatia</span>
									</li>
									<li class="item">
										<span class="title">Định cư Malta</span>
									</li>
								</ul>
								</div>
							</div>
							<div class="grid-50 tablet-grid-50 mobile-grid-100">
								<div class="footer-block">
									<h2 class="title-footer">Đăng ký nhận bản tin</h2>
									<form class="dk-nhan-tin relative" action="">
										<input type="text" class="email-dk" placeholder="Nhập email của bạn...">
										<button class="btn-dk-email">
											<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
												<path d="M5.15625 16.5H27.8438" stroke="white" stroke-width="1.5" stroke-linecap="square"/>
												<path d="M19.25 7.21875L28.5312 16.5L19.25 25.7812" stroke="white" stroke-width="1.5" stroke-linecap="square"/>
											</svg>
										</button>
									</form>
									<h2 class="title-footer">Kết nối với Az global</h2>
									<div class="social-media-box flex_box al-center">
										<div class="item-social">
											<a href="#">
												<img src="/wp-content/uploads/2023/12/zalo.svg" alt="">
											</a>
										</div>
										<div class="item-social">
											<a href="#">
												<img src="/wp-content/uploads/2023/12/Whatsapp.svg" alt="">
											</a>
										</div>
										<div class="item-social">
											<a href="#">
												<img src="/wp-content/uploads/2023/12/Capa-2.svg" alt="">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copy-right-box">
			<div class="grid-container">
				<div class="copy-right-box-content flex_box jus_between">
					<h2 class="title">Copyright © 2023 AZ Global. Design by ThuyThu</h2>
					<?php
						wp_nav_menu(array(
							'theme_location' => 'menu_footer_1',
							'container' => false,
							'menu_class' => 'menu_footer_policy flex_box',
							'fallback_cb' => false,
						));
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
/**
 * generate_after_footer hook.
 *
 * @since 2.1
 */
do_action( 'generate_after_footer' );

wp_footer();
?>

</body>
</html>
