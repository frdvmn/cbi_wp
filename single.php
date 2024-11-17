<?php get_header(); ?>
<section class="head-section__blog">
   <div>
        <h2 class="title blog__title"><?= get_the_category()[0]->name  ?></h2>
        <p class="head-section__text"><?= get_the_category()[0]->description ? get_the_category()[0]->description : 'Центр ближневосточных исследований (ЦБИ) представляет собой уникальную общественную платформу, созданную для тех, кто увлечён изучением политических, социально-экономических, исторических, культурных и гуманитарных процессов в странах Большого Ближнего Востока. '?></p>
   </div>
</section>
<div class="section articles-sidebar__container">
    <section class="articles">
        <article class="article">
            <div class="article__content">
                <p class="article__time"><?php the_time('j F Y') ?></p>
                <h2 class="article__title"><?= the_title()?></h2>
                <div class="article__categories">
                    <a href="" class="article__category">Ближний восток - центр</a>
                </div>
                <p class="article__text"><?= the_content();?></p>
            </div>
            <div class="article__img--container">
                <img src="<?= get_template_directory_uri() ?>/assets/images/news_img.jpeg" alt="" class="article__img">
            </div>
        </article>
    </section>
    <?php get_sidebar() ?>


</div>

<?php get_footer(); ?>
