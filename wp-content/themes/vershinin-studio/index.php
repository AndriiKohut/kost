
<?php get_header(); ?>

        <div class="header__slider slider">
            <div class="header__slider-item slider__item">
                <img src="<?php the_field('header__slider1') ?>" alt="">
            </div>
            <div class="header__slider-item slider__item">
                <img src="<?php the_field('header__slider2') ?>" alt="">
            </div>
            <div class="header__slider-item slider__item">
                <img src="<?php the_field('header__slider3') ?>" alt="">
            </div>
            <div class="header__slider-item slider__item">
                <img src="<?php the_field('header__slider4') ?>" alt="">
            </div>
            <div class="header__slider-item slider__item">
                <img src="<?php the_field('header__slider5') ?>" alt="">
            </div>
        </div>
        <div class="header__slider-vertical slider">
            <div class="header__slider-item slider__item">
                <img src="<?php the_field('header__slider-vertical1') ?>" alt="">
            </div>
            <div class="header__slider-item slider__item">
                <img src="<?php the_field('header__slider-vertical2') ?>" alt="">
            </div>
            <div class="header__slider-item slider__item">
                <img src="<?php the_field('header__slider-vertical3') ?>" alt="">
            </div>
            <div class="header__slider-item slider__item">
                <img src="<?php the_field('header__slider-vertical4') ?>" alt="">
            </div>
            <div class="header__slider-item slider__item">
                <img src="<?php the_field('header__slider-vertical5') ?>" alt="">
            </div>
        </div>
        <div class="massege__inner">
            <a href="#popup" class="massege__form popup-link lock-padding"><img class="form__ico" src="/img/form.png" alt=""></a>
        </div>
        <div class="container section__gallery">
            <div class="gallery__title title">
                <span class="h1" id="port"><?php the_field('gallery__title') ?></span>
            </div>
            <div class="gallery__content">
                <div class="gallery__inner col1">
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col1_photo1_big') ?>"><img src="<?php the_field('gallery_col1_photo1_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col1_photo2_big') ?>"><img src="<?php the_field('gallery_col1_photo2_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col1_photo3_big') ?>"><img src="<?php the_field('gallery_col1_photo3_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col1_photo4_big') ?>"><img src="<?php the_field('gallery_col1_photo4_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col1_photo5_big') ?>"><img src="<?php the_field('gallery_col1_photo5_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col1_photo6_big') ?>"><img src="<?php the_field('gallery_col1_photo6_small') ?>"></a>
                </div>
                <div class="gallery__inner col2">
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col2_photo1_big') ?>"><img src="<?php the_field('gallery_col2_photo1_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col2_photo2_big') ?>"><img src="<?php the_field('gallery_col2_photo2_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col2_photo3_big') ?>"><img src="<?php the_field('gallery_col2_photo3_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col2_photo4_big') ?>"><img src="<?php the_field('gallery_col2_photo4_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col2_photo5_big') ?>"><img src="<?php the_field('gallery_col2_photo5_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col2_photo6_big') ?>"><img src="<?php the_field('gallery_col2_photo6_small') ?>"></a>
                </div>
                <div class="gallery__inner col3">
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col3_photo1_big') ?>"><img src="<?php the_field('gallery_col3_photo1_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col3_photo2_big') ?>"><img src="<?php the_field('gallery_col3_photo2_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col3_photo3_big') ?>"><img src="<?php the_field('gallery_col3_photo3_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col3_photo4_big') ?>"><img src="<?php the_field('gallery_col3_photo4_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col3_photo5_big') ?>"><img src="<?php the_field('gallery_col3_photo5_small') ?>"></a>
                    <a class="gallery__img" data-fancybox="gallery" href="<?php the_field('gallery_col3_photo6_big') ?>"><img src="<?php the_field('gallery_col3_photo6_small') ?>"></a>
                </div>
            </div>
        </div>

        <div class="container section__video">
            <div class="video__title title">
                <span class="h1" id="video"><?php the_field('video__title') ?></span>
            </div>
            <div class="video__content">
                <div class="video__box first"><iframe src="<?php the_field('video__box_first') ?>" width="768" height="432" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
                <div class="video__box second"><iframe src="<?php the_field('video__box_second') ?>" width="768" height="432" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
            </div>
        </div>
        <div class="container section__about">
            <div class="about__title title">
                <span class="h1" id="about"><?php the_field('about__title') ?></span>
            </div>
            <div class="about__inner">
                <div class="about__photo">
                    <img src="<?php the_field('about__photo') ?>" alt="">
                </div>
                <text>
                        <span><?php the_field('about__subtitle') ?></span>
                        <br>
                        <p><?php the_field('about__text1') ?></p>
                        <br>
                        <p><?php the_field('about__text2') ?></p>
                </text>
            </div>
        </div>
        <div class="container section__vidguk">
            <div class="vidguk__title title">
                <span class="h1" id="vidguk"><?php the_field('vidguk__title') ?></span>
            </div>
            <div class="vidguk__slider slider">
                <div class="vidguk__slider-item slider__item">
                    <text>
                        <span><?php the_field('vidguk__subtitle1') ?></span>
                        <br>
                        <p><?php the_field('vidguk__text1') ?></p>
                    </text>
                    <div class="vidguk__slider-photo">
                        <img src="<?php the_field('vidguk__photo1') ?>" alt="">
                    </div>
                </div>
                <div class="vidguk__slider-item slider__item">
                <text>
                        <span><?php the_field('vidguk__subtitle2') ?></span>
                        <br>
                        <p><?php the_field('vidguk__text2') ?></p>
                    </text>
                    <div class="vidguk__slider-photo">
                        <img src="<?php the_field('vidguk__photo2') ?>" alt="">
                    </div>

                </div>
                <div class="vidguk__slider-item slider__item">
                <text>
                        <span><?php the_field('vidguk__subtitle3') ?></span>
                        <br>
                        <p><?php the_field('vidguk__text3') ?></p>
                    </text>
                    <div class="vidguk__slider-photo">
                        <img src="<?php the_field('vidguk__photo3') ?>" alt="">
                    </div>
                </div>
                <div class="vidguk__slider-item slider__item">
                <text>
                        <span><?php the_field('vidguk__subtitle4') ?></span>
                        <br>
                        <p><?php the_field('vidguk__text4') ?></p>
                    </text>
                    <div class="vidguk__slider-photo">
                        <img src="<?php the_field('vidguk__photo4') ?>" alt="">
                    </div>

                </div>
                <div class="vidguk__slider-item slider__item">
                <text>
                        <span><?php the_field('vidguk__subtitle5') ?></span>
                        <br>
                        <p><?php the_field('vidguk__text5') ?></p>
                    </text>
                    <div class="vidguk__slider-photo">
                        <img src="<?php the_field('vidguk__photo5') ?>" alt="">
                    </div>

                </div>


            </div>

        </div>
    </div>
    

    <div id="popup" class="popup">
        <div class="popup__body">
            <div class="popup__content">

                <form id="form-contact" method="POST" class="form-element" autocomplete="off" class="section_form">
                    <div class="form__logo">
                        <img class="form__logo-img" src="img/logo.png" alt="">
                        <h3 class="form__logo-title">Konstantin Vershinin</h3>
                    </div>
                    <h3 class="form__title">Заповніть форму та я Вам відтелефоную</h3>
                    <div class="form">
                        <div class="form_name-inner">
                            <h3 class="form_name">ім'я</h3>
                            <input name="name" type="text" class="form-input__name" tabindex="0" placeholder="Введите ваше имя" required>

                        </div>
                        <div class="form_name-inner">
                            <h3 class="form_name">номер телефону</h3>
                            <input name="phone" type="tel" class="form-input__phone" tabindex="0" pattern="^[ 0-9]+$" placeholder="Введите ваш телефон" required>
                        </div>
                        <input name="theme" type="hidden" class="form-input__theme" value="Заявка с сайта">
                    </div>
                    <div class="form__button">
                        <input type="submit" class="btn" value="Відправити">
                        <input type="submit" class="btn close-popup" value="Відмінити">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
   