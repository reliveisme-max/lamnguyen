<?php

declare(strict_types=1);

$profile_text = lamnguyen_get_option('sticky_profile_text', __('Tải Hồ sơ năng lực (Profile)', 'lamnguyen'));
$profile_url = lamnguyen_get_option('sticky_profile_url', '#');
$zalo_text = lamnguyen_get_option('sticky_zalo_text', __('Zalo Chat', 'lamnguyen'));
$zalo_url = lamnguyen_get_option('sticky_zalo_url', '#');
$hotline_text = lamnguyen_get_option('sticky_hotline_text', __('Hotline: 0916 08 6338', 'lamnguyen'));
$hotline_url = lamnguyen_get_option('sticky_hotline_url', 'tel:0916086338');
$back_to_top_text = lamnguyen_get_option('sticky_back_to_top_text', __('Về đầu trang', 'lamnguyen'));
?>
<a class="sticky-button sticky-button--profile" href="<?php echo esc_url($profile_url); ?>" target="_blank">
    <div class="sticky-button__text"><?php echo esc_html($profile_text); ?></div>
    <div class="sticky-button__icon">
        <i class="fas fa-cloud-arrow-down sticky-button__icon-symbol"></i>
    </div>
</a>
<a class="sticky-button sticky-button--zalo" href="<?php echo esc_url($zalo_url); ?>" target="_blank">
    <div class="sticky-button__text"><?php echo esc_html($zalo_text); ?></div>
    <div class="sticky-button__icon">
        <svg class="sticky-button__icon-svg" xmlns="http://www.w3.org/2000/svg"
            data-name="uuid-1f014997-de45-472d-a5ec-105163817406" viewBox="0 0 80 80">
            <path
                d="M37.9,37.39c-1.78-.05-3.13,1.43-3.23,3.54-.11,2.22,1.16,3.93,2.99,4.01,1.82.09,3.23-1.33,3.39-3.4.17-2.22-1.25-4.1-3.15-4.16Z"
                style="stroke-width: 0px;"></path>
            <path
                d="M61.63,37.41c-1.8-.03-3.09,1.4-3.2,3.55-.11,2.22,1.16,3.9,3,3.98,1.85.08,3.2-1.3,3.34-3.41.16-2.3-1.2-4.09-3.14-4.12Z"
                style="stroke-width: 0px;"></path>
            <path
                d="M75.46,20.54C67.02,4.89,48.36-3.25,30.26,1.22,15.97,4.75,5.77,13.51,1.6,28.16c-4.07,14.32-.25,26.88,10.17,37.28.94.94,1.13,1.89,1.02,3.11-.31,3.63-.56,7.26-.87,11.45,3.93-2,7.43-3.71,10.86-5.56,1.09-.59,1.98-.69,3.16-.26,9.53,3.46,19.11,3.41,28.6-.1,22.18-8.2,31.91-33.19,20.93-53.54ZM27.03,49.54c-4.13-.03-8.27-.02-12.4-.01-1.38,0-2.56-.34-3.26-1.66-.74-1.39-.08-2.52.73-3.57,3.25-4.23,6.53-8.43,9.98-12.88-2.49-.56-4.8-.22-7.07-.28-1.76-.04-3.45-.3-3.47-2.45-.02-2.21,1.71-2.41,3.46-2.4,3.65.02,7.3.01,10.95,0,1.32,0,2.63-.03,3.42,1.32.87,1.49.03,2.7-.78,3.78-2.97,3.95-6.01,7.84-9.03,11.75-.23.3-.47.61-1.01,1.34,3.17,0,5.82,0,8.48,0,1.76,0,3.15.64,3.17,2.56.03,1.98-1.4,2.5-3.16,2.49ZM46.12,46.45c-.09,2.58-1.8,3.56-4.08,2.36-.49-.26-.76-.55-1.46-.25-3.99,1.73-6.91,1.14-9.1-1.68-2.51-3.23-2.61-7.98-.23-11.07,2.44-3.17,5.56-3.94,9.17-2.1.74.38,1.05.16,1.66-.15,2.28-1.18,3.96-.14,4.05,2.46.06,1.7.01,3.4.01,5.09,0,1.78.05,3.56-.01,5.34ZM52.26,37.87c0,2.84-.03,5.67.01,8.51.02,1.74-.72,2.95-2.46,2.98-1.86.03-2.63-1.2-2.62-3.06.04-5.67.03-11.34,0-17.01-.01-1.82.69-3.11,2.59-3.1,1.93.02,2.53,1.38,2.49,3.18-.06,2.83-.02,5.67-.01,8.51ZM61.7,49.56c-4.93.02-8.4-3.42-8.42-8.33-.02-4.88,3.53-8.51,8.34-8.51,4.81,0,8.33,3.63,8.29,8.54-.04,4.85-3.43,8.27-8.21,8.3Z"
                style="stroke-width: 0px;"></path>
        </svg>
    </div>
</a>
<a class="sticky-button sticky-button--hotline" href="<?php echo esc_url($hotline_url); ?>" target="_blank">
    <div class="sticky-button__text"><?php echo esc_html($hotline_text); ?></div>
    <div class="sticky-button__icon button-ring">
        <i class="fas fa-phone sticky-button__icon-symbol"></i>
    </div>
</a>
<a class="sticky-button sticky-button--top sticky-button__back-to-top" href="#" rel="nofollow" data-back-to-top>
    <div class="sticky-button__text"><?php echo esc_html($back_to_top_text); ?></div>
    <div class="sticky-button__icon">
        <i class="ti-angle-up sticky-button__icon-symbol"></i>
    </div>
</a>