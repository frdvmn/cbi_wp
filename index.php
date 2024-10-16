<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЦБИ</title>

    <?php wp_head(); ?>
</head>

<body class="landing">
    <!-- Начальная секция -->
    <nav class="navigation">
        <ul class="navigation__list">
            <a href="#news-section" class="navigation__item">Новости</a>
            <a href="#project-section" class="navigation__item">Наши проекты</a>
            <!-- <a href="#experts-section" class="navigation__item">Эксперты</a> -->
            <a href="#contacts" class="navigation__item">Контакты</a>
            <a href="#head-section" class="navigation__item">В начало</a>
        </ul>
    </nav>
    <!-- Начальная секция -->
    <section class="section head-section" id="head-section">
        <button class="menu" aria-label="Main Menu">
            <svg width="100" height="100" viewbox="0 0 100 100">
                <path class="line line1"
                    d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                <path class="line line2" d="M 20,50 H 80" />
                <path class="line line3"
                    d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
            </svg>
        </button>
        <div class="head__row">
            <img src="<?= has_custom_logo() ? wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] : '' ?>" alt="Центр ближневосточных исследований - логотип" class="head__logo">
            <div class="head__text">
                <h1 class="head__title" data-aos="fade-up" data-aos-duration="1500"><?= get_bloginfo('name'); ?></h1>
                <p class="head__subtitle" data-aos="fade-up" data-aos-duration="2000"><?= get_bloginfo('description'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Основная миссия -->
    <section class="section mission-section" id="mission-section">
        <h2 class="title">Основная миссия ЦБИ</h2>
        <p class="mission-text_first" data-aos="fade-right" data-aos-duration="1500">
            <?= ( get_field('main-mission__first' ) ) ? esc_html( get_field('main-mission__first') ) : '';?>
       </p>
        <p class="mission-text_second" data-aos="fade-left" data-aos-duration="2000">
            <?= ( get_field('main-mission__second' ) ) ? esc_html( get_field('main-mission__second') ) : '';?>
        </p>
        <div class="mission-card" data-aos="zoom-in" data-aos-duration="2000">
            <h2 class="mission-card__title">Совет правления</h2>
            <div class="mission-card__content">
                <div class="mission-card__container">
                    <h2 class="expert__title">Мурад Садыгзаде</h2>
                    <p class="mission-card__description">президент и основатель
                        ЦБИ, руководитель Центра образования и сотрудничества ИВ РАН, приглашенный
                        преподаватель НИУ ВШЭ, РАНХиГС и МГИМО, эксперт РСМД, МДК “Валдай”,
                        международник, специалист по региону БВСА.</p>
                </div>
                <img src="<?= get_template_directory_uri() ?>/assets/images/murad_photo.jpeg" alt="Мурад Садыгзаде" class="mission-card__photo">
            </div>
        </div>
        <div class="mission-slider">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                <?php
                    global $post;

                    $query = new WP_Query( [
                        'post_type'        => 'directors',
                    ] );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
                            <li class="glide__slide">
                                <div class="expert__card">
                                    <?= has_post_thumbnail() ? '<img src="' . get_the_post_thumbnail_url() . '" alt="'  . get_the_title() . '" class="expert__image">' : '' ?>
                                        
                                    <div class="expert__content">
                                        <h2 class="expert__title"><?= get_the_title(); ?></h2>
                                        <p class="expert__description"><?= get_the_content(); ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php
                        }
                    } else {
                        echo "Добавьте членов совета правления в админ-панели";
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                ?>

                </ul>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
                <button 0="0" class="glide__arrow glide__arrow--left" data-glide-dir="<">
                    <svg width="
                        131.008179" height="
                        26.643555" viewBox="
                        131.008=" 131.008" 26.6436" fill="
                        none" xmlns="
                        http://www.w3.org/2000/svg" xmlns:xlink="
                        http://www.w3.org/1999/xlink"="
                        http://www.w3.org/1999/xlink""=" http://www.w3.org/1999/xlink" "">
                        <defs />
                        <path id="Arrow 2"
                            d="M6.83 15.32L14.73 23.22C15.52 24.01 15.52 25.25 14.73 26.04C13.94 26.84 12.69 26.84 11.9 26.04L0.59 14.73C-0.2 13.94 -0.2 12.69 0.59 11.9L11.9 0.59C12.69 -0.2 13.94 -0.2 14.73 0.59C15.52 1.38 15.52 2.63 14.73 3.42L6.83 11.32L131 11.32L131 15.32L6.83 15.32Z"
                            fill="#FFFFFF" fill-opacity="1.000000" fill-rule="evenodd" />
                    </svg>
                </button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                    <svg width="131.008179" height="26.643555" viewbox="0 0 131.008 26.6436" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs />
                        <path id="Arrow 1"
                            d="M124.17 11.32L116.27 3.42C115.48 2.63 115.48 1.38 116.27 0.59C117.06 -0.2 118.3 -0.2 119.1 0.59L130.41 11.9C131.2 12.69 131.2 13.94 130.41 14.73L119.1 26.04C118.3 26.84 117.06 26.84 116.27 26.04C115.48 25.25 115.48 24.01 116.27 23.22L124.17 15.32L0 15.32L0 11.32L124.17 11.32Z"
                            fill="#FFFFFF" fill-opacity="1.000000" fill-rule="evenodd" />
                    </svg>
                </button>
            </div>

    </section>

    <!-- Новости -->
    <section class="section news-section" id="news-section">
        <h2 class="title">Новости</h2>

        <div class="news-slider">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                <?php
                    global $post;

                    $query = new WP_Query( [
                        'post_type'        => 'news',
                    ] );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
                                <li class="glide__slide">
                                    <div class="news-card">
                                        <div class="news-card__content">
                                            <h2 class="news-card__title"><?= get_the_title(); ?></h2>
                                            <p class="news-card__tags">
                                                <?= ( get_field('categories_news' ) ) ? esc_html( get_field('categories_news') ) : '';?>
                                            </p>
                                            <p class="news-card__description">
                                                <?= ( get_field('excerpt_news' ) ) ? esc_html( get_field('excerpt_news') ) : '';?>
                                            </p>
                                            <button data-micromodal-trigger="modal-news-<?=get_the_ID()?>" class="btn">Читать далее</button>
                                        </div>
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?= get_the_post_thumbnail_url()?>" alt="Новостная картинка"
                                                class="news-card__image">
                                        <?php endif;  ?>
                                    </div>
                                </li>
                            <?php
                        }
                    } else {
                        echo "Добавьте новость";
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                ?>

                </ul>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
                <button 0="0" class="glide__arrow glide__arrow--left" data-glide-dir="<">
                    <svg width="
                        131.008179" height="
                        26.643555" viewBox="
                        131.008=" 131.008" 26.6436" fill="
                        none" xmlns="
                        http://www.w3.org/2000/svg" xmlns:xlink="
                        http://www.w3.org/1999/xlink"="
                        http://www.w3.org/1999/xlink""=" http://www.w3.org/1999/xlink" "">
                        <defs />
                        <path id="Arrow 2"
                            d="M6.83 15.32L14.73 23.22C15.52 24.01 15.52 25.25 14.73 26.04C13.94 26.84 12.69 26.84 11.9 26.04L0.59 14.73C-0.2 13.94 -0.2 12.69 0.59 11.9L11.9 0.59C12.69 -0.2 13.94 -0.2 14.73 0.59C15.52 1.38 15.52 2.63 14.73 3.42L6.83 11.32L131 11.32L131 15.32L6.83 15.32Z"
                            fill="#FFFFFF" fill-opacity="1.000000" fill-rule="evenodd" />
                    </svg>
                </button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                    <svg width="131.008179" height="26.643555" viewbox="0 0 131.008 26.6436" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs />
                        <path id="Arrow 1"
                            d="M124.17 11.32L116.27 3.42C115.48 2.63 115.48 1.38 116.27 0.59C117.06 -0.2 118.3 -0.2 119.1 0.59L130.41 11.9C131.2 12.69 131.2 13.94 130.41 14.73L119.1 26.04C118.3 26.84 117.06 26.84 116.27 26.04C115.48 25.25 115.48 24.01 116.27 23.22L124.17 15.32L0 15.32L0 11.32L124.17 11.32Z"
                            fill="#FFFFFF" fill-opacity="1.000000" fill-rule="evenodd" />
                    </svg>
                </button>
            </div>

        </div>

    </section>

    <!-- Наши проекты -->
    <section class="section our-projects" id="project-section">
        <h2 class="title">Наши проекты</h2>
        <div class="projects-slider__special">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                <?php
                    global $post;

                    $query = new WP_Query( [
                        'post_type'        => 'projects',
                    ] );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
                            <?php if (get_field('project-special')) : ?>
                                <li class="glide__slide">
                                    <div class="project-card">
                                        <div class="project-card__content">
                                            <span class="project-card__special">Специальные проекты</span>
                                            <h2 class="project-card__title"><?= get_the_title(); ?></h2>
                                            <p class="project-card__tags"><?= ( get_field('project-subtitle' ) ) ? esc_html( get_field('project-subtitle') ) : '';?></p>
                                            <p class="project-card__description"> <?= ( get_field('project-excertp' ) ) ? esc_html( get_field('project-excertp') ) : '';?></p>
                                            <button data-micromodal-trigger="modal-project-special-<?=get_the_ID()?>" class="btn">Читать далее</button>
                                        </div>
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?= get_the_post_thumbnail_url()?>" alt="Проект" class="project-card__image">
                                        <?php endif;  ?>
                                    </div>
                                </li>
                            <?php endif;  ?>
                            <?php
                        }
                    } else {
                        echo "Добавьте проект";
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                ?>
                </ul>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
                <button 0="0" class="glide__arrow glide__arrow--left" data-glide-dir="<">
                    <svg width="
                    131.008179" height="
                    26.643555" viewBox="
                    131.008=" 131.008" 26.6436" fill="
                    none" xmlns="
                    http://www.w3.org/2000/svg" xmlns:xlink="
                    http://www.w3.org/1999/xlink"="
                    http://www.w3.org/1999/xlink""=" http://www.w3.org/1999/xlink" "">
                        <defs />
                        <path id="Arrow 2"
                            d="M6.83 15.32L14.73 23.22C15.52 24.01 15.52 25.25 14.73 26.04C13.94 26.84 12.69 26.84 11.9 26.04L0.59 14.73C-0.2 13.94 -0.2 12.69 0.59 11.9L11.9 0.59C12.69 -0.2 13.94 -0.2 14.73 0.59C15.52 1.38 15.52 2.63 14.73 3.42L6.83 11.32L131 11.32L131 15.32L6.83 15.32Z"
                            fill="#FFFFFF" fill-opacity="1.000000" fill-rule="evenodd" />
                    </svg>
                </button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                    <svg width="131.008179" height="26.643555" viewbox="0 0 131.008 26.6436" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs />
                        <path id="Arrow 1"
                            d="M124.17 11.32L116.27 3.42C115.48 2.63 115.48 1.38 116.27 0.59C117.06 -0.2 118.3 -0.2 119.1 0.59L130.41 11.9C131.2 12.69 131.2 13.94 130.41 14.73L119.1 26.04C118.3 26.84 117.06 26.84 116.27 26.04C115.48 25.25 115.48 24.01 116.27 23.22L124.17 15.32L0 15.32L0 11.32L124.17 11.32Z"
                            fill="#FFFFFF" fill-opacity="1.000000" fill-rule="evenodd" />
                    </svg>
                </button>
            </div>

        </div>

        <div class="projects-slider">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php
                    global $post;

                    $query = new WP_Query( [
                        'post_type'        => 'projects',
                    ] );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
                            <?php if (get_field('project-special') !== true) : ?>
                                <li class="glide__slide">
                                    <div class="project-card">
                                        <div class="project-card__content">
                                            <h2 class="project-card__title"><?= get_the_title(); ?></h2>
                                            <p class="project-card__tags"><?= ( get_field('project-subtitle' ) ) ? esc_html( get_field('project-subtitle') ) : '';?></p>
                                            <p class="project-card__description"> <?= ( get_field('project-excertp' ) ) ? esc_html( get_field('project-excertp') ) : '';?></p>
                                            <button data-micromodal-trigger="modal-project-special-<?=get_the_ID()?>" class="btn">Читать далее</button>
                                        </div>
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?= get_the_post_thumbnail_url()?>" alt="Проект" class="project-card__image">
                                        <?php endif;  ?>
                                    </div>
                                </li>
                            <?php endif;  ?>
                            <?php
                        }
                    } else {
                        echo "Добавьте проект";
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                ?>
                </ul>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
                <button 0="0" class="glide__arrow glide__arrow--left" data-glide-dir="<">
                    <svg width="
                131.008179" height="
                26.643555" viewBox="
                131.008=" 131.008" 26.6436" fill="
                none" xmlns="
                http://www.w3.org/2000/svg" xmlns:xlink="
                http://www.w3.org/1999/xlink"="
                http://www.w3.org/1999/xlink""=" http://www.w3.org/1999/xlink" "">
                        <defs />
                        <path id="Arrow 2"
                            d="M6.83 15.32L14.73 23.22C15.52 24.01 15.52 25.25 14.73 26.04C13.94 26.84 12.69 26.84 11.9 26.04L0.59 14.73C-0.2 13.94 -0.2 12.69 0.59 11.9L11.9 0.59C12.69 -0.2 13.94 -0.2 14.73 0.59C15.52 1.38 15.52 2.63 14.73 3.42L6.83 11.32L131 11.32L131 15.32L6.83 15.32Z"
                            fill="#FFFFFF" fill-opacity="1.000000" fill-rule="evenodd" />
                    </svg>
                </button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                    <svg width="131.008179" height="26.643555" viewbox="0 0 131.008 26.6436" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs />
                        <path id="Arrow 1"
                            d="M124.17 11.32L116.27 3.42C115.48 2.63 115.48 1.38 116.27 0.59C117.06 -0.2 118.3 -0.2 119.1 0.59L130.41 11.9C131.2 12.69 131.2 13.94 130.41 14.73L119.1 26.04C118.3 26.84 117.06 26.84 116.27 26.04C115.48 25.25 115.48 24.01 116.27 23.22L124.17 15.32L0 15.32L0 11.32L124.17 11.32Z"
                            fill="#FFFFFF" fill-opacity="1.000000" fill-rule="evenodd" />
                    </svg>
                </button>
            </div>

        </div>

    </section>

    <!-- <section class="section experts-section" id="experts-section">
    <h2 class="title">Эксперты</h2>
    <div class="experts-slider">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <li class="glide__slide">
                    <div class="expert__card">
                        <img src="assets/images/businessman-writing-clipboard.jpg" alt="мужик" class="expert__image">
                        <div class="expert__content">
                            <h2 class="expert__title">Иванов Иван Иванович</h2>
                            <p class="expert__subtitle">Исполнительный директор</p>
                            <p class="expert__description">Мы организуем лекции, семинары, круглые столы, концерты, интервью и другие мероприятия, которые направлены на углубление знаний о Большом Ближнем Востоке среди российской аудитории, а также на распространение знаний о России среди общественности стран региона...</p>
                        </div>
                    </div>
                </li>
                <li class="glide__slide">
                    <div class="expert__card">
                        <img src="assets/images/businessman-writing-clipboard.jpg" alt="" class="expert__image">
                        <div class="expert__content">
                            <h2 class="expert__title">Иванов Иван Иванович</h2>
                            <p class="expert__subtitle">Исполнительный директор</p>
                            <p class="expert__description">Мы организуем лекции, семинары, круглые столы, концерты, интервью и другие мероприятия, которые направлены на углубление знаний о Большом Ближнем Востоке среди российской аудитории, а также на распространение знаний о России среди общественности стран региона...</p>
                        </div>
                    </div>
                </li>
                <li class="glide__slide">
                    <div class="expert__card">
                        <img src="assets/images/businessman-writing-clipboard.jpg" alt="" class="expert__image">
                        <div class="expert__content">
                            <h2 class="expert__title">Иванов Иван Иванович</h2>
                            <p class="expert__subtitle">Исполнительный директор</p>
                            <p class="expert__description">Мы организуем лекции, семинары, круглые столы, концерты, интервью и другие мероприятия, которые направлены на углубление знаний о Большом Ближнем Востоке среди российской аудитории, а также на распространение знаний о России среди общественности стран региона...</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
            <button
                0="0"
                class="glide__arrow glide__arrow--left"
                data-glide-dir="<">
                <svg width="
                131.008179" height="
                26.643555" viewBox="
                131.008="131.008"
                26.6436" fill="
                none"
                    xmlns="
                http://www.w3.org/2000/svg" xmlns:xlink="
                http://www.w3.org/1999/xlink"="
                http://www.w3.org/1999/xlink""="http://www.w3.org/1999/xlink"
                "">
                <defs/>
                <path
                    id="Arrow 2"
                    d="M6.83 15.32L14.73 23.22C15.52 24.01 15.52 25.25 14.73 26.04C13.94 26.84 12.69 26.84 11.9 26.04L0.59 14.73C-0.2 13.94 -0.2 12.69 0.59 11.9L11.9 0.59C12.69 -0.2 13.94 -0.2 14.73 0.59C15.52 1.38 15.52 2.63 14.73 3.42L6.83 11.32L131 11.32L131 15.32L6.83 15.32Z"
                    fill="#FFFFFF"
                    fill-opacity="1.000000"
                    fill-rule="evenodd"/>
            </svg>
        </button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
            <svg
                width="131.008179"
                height="26.643555"
                viewbox="0 0 131.008 26.6436"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs/>
                <path
                    id="Arrow 1"
                    d="M124.17 11.32L116.27 3.42C115.48 2.63 115.48 1.38 116.27 0.59C117.06 -0.2 118.3 -0.2 119.1 0.59L130.41 11.9C131.2 12.69 131.2 13.94 130.41 14.73L119.1 26.04C118.3 26.84 117.06 26.84 116.27 26.04C115.48 25.25 115.48 24.01 116.27 23.22L124.17 15.32L0 15.32L0 11.32L124.17 11.32Z"
                    fill="#FFFFFF"
                    fill-opacity="1.000000"
                    fill-rule="evenodd"/>
            </svg>
        </button>
    </div>
</section>  -->

    <footer class="footer-section" id="contacts">
        <h2 class="footer__title">Контакты</h2>
        <p class="footer__email"><a href="mailto:cmesrussia@yandex.ru">Задавайте вопросы по электронной почте:
                cmesrussia@yandex.ru</a></p>
        <div class="footer-icons">
            <a href="https://vk.com/cmesrussia" class="icons__vk" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50"
                    fill="white">
                    <path
                        d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37.72,33l-3.73-0.01 c0,0-0.08,0.01-0.21,0.01c-0.3,0-0.92-0.08-1.65-0.58c-1.31-0.91-2.56-3.17-3.55-3.17c-0.07,0-0.13,0.01-0.19,0.03 c-0.86,0.27-1.12,1.13-1.12,2.18c0,0.37-0.26,0.54-0.96,0.54h-1.93c-2.16,0-4.25-0.05-6.6-2.62c-3.46-3.79-6.7-10.53-6.7-10.53 s-0.18-0.39,0.01-0.62c0.18-0.21,0.6-0.23,0.76-0.23c0.04,0,0.06,0,0.06,0h4c0,0,0.37,0.07,0.64,0.27c0.23,0.17,0.35,0.48,0.35,0.48 s0.68,1.32,1.53,2.81c1.43,2.46,2.2,3.28,2.75,3.28c0.09,0,0.18-0.02,0.27-0.07c0.82-0.45,0.58-4.09,0.58-4.09s0.01-1.32-0.42-1.9 c-0.33-0.46-0.96-0.59-1.24-0.63c-0.22-0.03,0.14-0.55,0.62-0.79c0.62-0.3,1.65-0.36,2.89-0.36h0.6c1.17,0.02,1.2,0.14,1.66,0.25 c1.38,0.33,0.91,1.62,0.91,4.71c0,0.99-0.18,2.38,0.53,2.85c0.05,0.03,0.12,0.05,0.21,0.05c0.46,0,1.45-0.59,3.03-3.26 c0.88-1.52,1.56-3.03,1.56-3.03s0.15-0.27,0.38-0.41c0.22-0.13,0.22-0.13,0.51-0.13h0.03c0.32,0,3.5-0.03,4.2-0.03h0.08 c0.67,0,1.28,0.01,1.39,0.42c0.16,0.62-0.49,1.73-2.2,4.03c-2.82,3.77-3.14,3.49-0.8,5.67c2.24,2.08,2.7,3.09,2.78,3.22 C39.68,32.88,37.72,33,37.72,33z">
                    </path>
                </svg>
            </a>
            <a href="https://t.me/cmesrussia" class="icons__vk" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50"
                    fill="white">
                    <path
                        d="M25,2c12.703,0,23,10.297,23,23S37.703,48,25,48S2,37.703,2,25S12.297,2,25,2z M32.934,34.375	c0.423-1.298,2.405-14.234,2.65-16.783c0.074-0.772-0.17-1.285-0.648-1.514c-0.578-0.278-1.434-0.139-2.427,0.219	c-1.362,0.491-18.774,7.884-19.78,8.312c-0.954,0.405-1.856,0.847-1.856,1.487c0,0.45,0.267,0.703,1.003,0.966	c0.766,0.273,2.695,0.858,3.834,1.172c1.097,0.303,2.346,0.04,3.046-0.395c0.742-0.461,9.305-6.191,9.92-6.693	c0.614-0.502,1.104,0.141,0.602,0.644c-0.502,0.502-6.38,6.207-7.155,6.997c-0.941,0.959-0.273,1.953,0.358,2.351	c0.721,0.454,5.906,3.932,6.687,4.49c0.781,0.558,1.573,0.811,2.298,0.811C32.191,36.439,32.573,35.484,32.934,34.375z">
                    </path>
                </svg>
            </a>
        </div>
    </footer>
    <!-- Модальное окно -->
    <!-- [1] -->
    <div id="modal-1" class="modal" aria-hidden="true">
        <div class="modal-overlay" data-micromodal-close="data-micromodal-close"></div>
        <div class="modal-container" aria-modal="true" role="dialog" aria-labelledby="modal-2-title">
            <button class="btn-close">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30px" height="30px"
                    aria-label="Close modal" data-micromodal-close="data-micromodal-close">
                    <path fill="white"
                        d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z" />
                    </svg>
            </button>
            <div id="modal-1-content">
                <h2 class="modal__title">Ближний Восток - Европа</h2>
                <p class="modal__tags">Руководитель: Ярослав Берестов, Первый Вице-президент, Член Совета Правления ЦБИ
                </p>
                <p class="modal__content">Программа включает в себя организацию открытых и закрытых дискуссий с участием
                    ведущих экспертов и специалистов в области международных отношений, политологии, экономики и
                    истории. Важным направлением является подготовка аналитических материалов, отчетов и прогнозов,
                    отражающих современные процессы взаимодействия Ближнего Востока с Европой. Также в рамках программы
                    осуществляется построение и укрепление контактов с международными экспертами и профессиональными
                    организациями, что способствует более глубокому пониманию региональных процессов и выработке
                    рекомендаций по дальнейшему развитию сотрудничества между двумя регионами.</p>
            </div>
        </div>
    </div>

    <?php
    global $post;

    $query = new WP_Query( [
        'post_type'        => 'news',
    ] );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            ?>

            <div id="modal-news-<?= get_the_ID() ?>" class="modal" aria-hidden="true">
                    <div class="modal-overlay" data-micromodal-close="data-micromodal-close"></div>
                    <div class="modal-container" aria-modal="true" role="dialog" aria-labelledby="modal-2-title">
                        <button class="btn-close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30px" height="30px"
                                aria-label="Close modal" data-micromodal-close="data-micromodal-close">
                                <path fill="white"
                                    d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z" />
                                </svg>
                        </button>
                        <div id="modal-1-content">
                            <h2 class="modal__title"><?= get_the_title(); ?></h2>
                            <p class="modal__tags">
                                <?= ( get_field('categories_news' ) ) ? esc_html( get_field('categories_news') ) : '';?>
                            </p>
                            <p class="modal__content"><?= the_content() ?></p>
                        </div>
                    </div>
                </div>
   
            <?php
        }
    } else {
        echo "Добавьте новость";
    }

    wp_reset_postdata(); // Сбрасываем $post
?>

<?php
global $post;

$query = new WP_Query( [
    'post_type'        => 'projects',
] );

if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        ?>
        <?php if (get_field('project-special')) : ?>
            <div id="modal-project-special-<?= get_the_ID() ?>" class="modal" aria-hidden="true">
                    <div class="modal-overlay" data-micromodal-close="data-micromodal-close"></div>
                    <div class="modal-container" aria-modal="true" role="dialog" aria-labelledby="modal-2-title">
                        <button class="btn-close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30px" height="30px"
                                aria-label="Close modal" data-micromodal-close="data-micromodal-close">
                                <path fill="white"
                                    d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z" />
                                </svg>
                        </button>
                        <div id="modal-1-content">
                            <h2 class="modal__title"><?= get_the_title(); ?></h2>
                            <p class="modal__tags">
                                <?= ( get_field('project-subtitle' ) ) ? esc_html( get_field('project-subtitle') ) : '';?>
                            </p>
                            <p class="modal__content"><?= the_content() ?></p>
                        </div>
                    </div>
                </div>
        <?php endif;  ?>
        <?php
    }
} else {
    echo "Добавьте проект";
}

wp_reset_postdata(); // Сбрасываем $post
?>




    <?php wp_footer() ?>

</body>

</html>