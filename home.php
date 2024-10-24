<?php get_header(); ?>
<section class="head-section__blog">
   <div>
        <h2 class="title">СТАТЬИ</h2>
        <p class="head-section__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias labore ab odit nulla dolorem unde, ex similique, aperiam nobis sapiente nesciunt enim eum? Saepe obcaecati est debitis fugit cumque? Necessitatibus, delectus. Ullam quae perspiciatis maiores esse minus odit, recusandae iste temporibus dolorum fugiat quas atque quod ipsam, beatae voluptates vitae tempora dolorem quis necessitatibus! Quasi voluptatem recusandae voluptas eligendi laborum dolorum qui non reiciendis est corporis ullam libero veniam distinctio inventore obcaecati iure, repudiandae ab laboriosam quos! Necessitatibus quibusdam maiores repudiandae nemo molestiae incidunt asperiores illum fugiat ex, consequuntur similique repellendus cupiditate nesciunt facilis nulla mollitia quas, quos beatae iste!</p>
   </div>
</section>
<div class="section articles-sidebar__container">
    <section class="articles">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Цикл WordPress -->
    <article class="article">
            <div class="article__content">
                <p class="article__time"><?php the_time('j F Y') ?></p>
                <h2 class="article__title"><?php the_title();?></h2>
                <div class="article__categories">
                    <?php 
                        $categories = get_the_category();
                        if( $categories ){
                            foreach( $categories as $category ) {
                                echo '<a class="article__category" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                            }
                        }
                    ?>
                </div>
                <p class="article__text"><?= get_the_excerpt();?></p>
                <a class="btn" href="<?= get_the_permalink() ?>">Читать далее</a>
            </div>
            <div class="article__img--container">
                <img src="<?= (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/news_img.jpeg' ?>" alt="" class="article__img">
            </div>
        </article>
    <?php endwhile; else : ?>
        <p>Записей нет.</p>
    <?php endif; ?>
        <?php the_posts_pagination([
            'show_all'     => false, // показаны все страницы участвующие в пагинации
            'end_size'     => 1,     // количество страниц на концах
            'mid_size'     => 1,     // количество страниц вокруг текущей
            'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
            'prev_text'    => __('« Назад'),
            'next_text'    => __('Вперёд »'),
            'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
            'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
            'screen_reader_text' => false,
            'class'        => 'pagination', // CSS класс, добавлено в 5.5.0.
        ]); ?>
    </section>
    <aside class="sidebar">
        <div class="sidebar-categories">
            <h3 class="sidebar-categories__title">Категории</h3>
            <div class="sidebar-categories__categories">
                <a href="" class="sidebar-categories__category">Ближний восток - центр</a>
                <a href="" class="sidebar-categories__category">Центр</a>
                <a href="" class="sidebar-categories__category">Ближний восток</a>
            </div>
        </div>
    </aside>


</div>

<?php get_footer(); ?>
