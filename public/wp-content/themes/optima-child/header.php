<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
    <?php echo((gt3_option('responsive') == "1") ? '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">' : ''); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('slick/slick-theme.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('slick/slick.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/style.css'); ?>">
    <?php 
        wp_head(); 
    ?>
</head>

<body <?php body_class(); ?> data-theme-color="<?php echo esc_attr(gt3_option("theme-custom-color")); ?>">
    <?php 
        gt3_preloader();
        gt3_get_header_builder(get_queried_object_id());
    ?>
    <div class="reserve-btn sp-none">
        <a href=""><img src="<?php echo esc_url(get_theme_file_uri('images/common/reserve-btn.png')); ?>" alt="24時間　診療WEB予約"></a>
    </div>
    <div class="bottom-btn tb-none pc-none">
        <div class="lefter box">
            <a href=""><div class="a-inner"><img src="<?php echo esc_url(get_theme_file_uri('images/common/tel-w.png')); ?>"><span>電話で予約</span></div></a>
        </div>
        <div class="righter box">
            <a href=""><div class="a-inner"><img src="<?php echo esc_url(get_theme_file_uri('images/common/reserve-w.png')); ?>"><span>24時間<br>WEB予約</span></div></a>
        </div>
    </div>
    <div class="site_wrapper fadeOnLoad">
        <?php
            $page_shortcode = '';
            if (class_exists( 'RWMB_Loader' )) {
                $page_shortcode = rwmb_meta('mb_page_shortcode');
                if (strlen($page_shortcode) > 0) {
                    echo do_shortcode($page_shortcode);
                }
            }
        ?>
        <div class="main_wrapper">