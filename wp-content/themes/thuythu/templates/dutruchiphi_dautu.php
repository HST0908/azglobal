<?php
/**
 * Template name: Dự trù chi phí đầu tư
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
global $post;
// $banner = get_field("fields_banner", $post->ID, true);
?>
<div class="main_container">
<section class="section">
    <div class="popup_cost-estimate"></div>
</section>

<section class="section cost-estimate investment-planning">
    <div class="grid-container">
        <div class="heading-title">
            <p>dự trù chi phí đầu tư bất động sản</p>
            <div>
                <div class="btn btn-primary text_uppercase">Đăng ký tư vấn</div>
            </div>
        </div>
        <div class="cost-estimate-box investment-planning-box">
            <div class="box_list_1">
                <ul class="list-fee required-fee-list">
                    <li class="item required-fee-item">
                        <div class="item-left col_4 tablet_col_4 mobile_col_4">
                        <strong>Chi phí đầu tư Bất Động Sản</strong>
                        </div>
                        <div class="item-left col_4 tablet_col_4 mobile_col_4">
                        </div>
                        <div class="item-right col_4 tablet_col_4 mobile_col_4">
                            <input type="number">
                        </div>
                    </li>
                    <li class="item required-fee-item">
                        <div class="item-left col_4 tablet_col_4 mobile_col_4">
                        <strong>Thuế trước bạ</strong>
                        </div>
                        <div class="item-left col_4 tablet_col_4 mobile_col_4">
                            <span>1%</span>
                        </div>
                        <div class="item-right col_4 tablet_col_4 mobile_col_4">
                            <span>123132</span>
                        </div>
                    </li>
                    <li class="item required-fee-item">
                        <div class="item-left col_4 tablet_col_4 mobile_col_4">
                        <strong>Thuế nhà đất</strong>
                        </div>
                        <div class="item-left col_4 tablet_col_4 mobile_col_4">
                            <span>5%</span>
                        </div>
                        <div class="item-right col_4 tablet_col_4 mobile_col_4">
                            <span>123132</span>
                        </div>
                    </li>
                </ul>
                <div class="total-price dark">
                    <div class="col_8 tablet_col_8 mobile_col_8">
                       <strong>Tổng chi phí</strong>
                    </div>
                    <div class="col_4 tablet_col_4 mobile_col_4">
                        <span>€ 186.877.30</span>
                    </div>
                </div>
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