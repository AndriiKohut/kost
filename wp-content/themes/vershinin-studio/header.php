<!DOCTYPE html>
<html lang="ua">

<head>
    <title><?php bloginfo( 'description' ); ?></title>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="shortcut icon" href="favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header class="header lock-padding">
            <div class="header__row" id="header__row">
                <div href="#" class="header_logo">
                    <img class="header_img" src="<?php the_field('header_logo') ?>" alt="">
                    <div class="header__title">
                        <span class="h3"><?php the_field('header__title1') ?></span><span class="h3 last"><?php the_field('header__title2') ?></span>
                    </div>
                </div>
                <nav class="menu_inner">
                    <ul class="header_menu" id="nav">
                        <li>
                            <a href="#port"><?php the_field('header_menu1') ?></a>
                        </li>
                        <li class="menu__point">.</li>
                        <li>
                            <a href="#video"><?php the_field('header_menu2') ?></a>
                        </li>
                        <li class="menu__point">.</li>
                        <li>
                            <a href="#about"><?php the_field('header_menu3') ?></a>
                        </li>
                        <li class="menu__point">.</li>
                        <li>
                            <a href="#vidguk"><?php the_field('header_menu4') ?></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
