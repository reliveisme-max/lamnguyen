<?php

declare(strict_types=1);
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="brx-header" class="brx-sticky on-scroll">
        <?php get_template_part('template-parts/header/nav'); ?>
        <?php get_template_part('template-parts/header/offcanvas'); ?>
    </header>
    <main id="brx-content">