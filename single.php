<?php get_header(); ?>
<section class="head-section__blog">
   <div>
        <h2 class="title">СТАТЬИ</h2>
        <p class="head-section__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias labore ab odit nulla dolorem unde, ex similique, aperiam nobis sapiente nesciunt enim eum? Saepe obcaecati est debitis fugit cumque? Necessitatibus, delectus. Ullam quae perspiciatis maiores esse minus odit, recusandae iste temporibus dolorum fugiat quas atque quod ipsam, beatae voluptates vitae tempora dolorem quis necessitatibus! Quasi voluptatem recusandae voluptas eligendi laborum dolorum qui non reiciendis est corporis ullam libero veniam distinctio inventore obcaecati iure, repudiandae ab laboriosam quos! Necessitatibus quibusdam maiores repudiandae nemo molestiae incidunt asperiores illum fugiat ex, consequuntur similique repellendus cupiditate nesciunt facilis nulla mollitia quas, quos beatae iste!</p>
   </div>
</section>
<div class="section articles-sidebar__container">
    <section class="articles">
        <article class="article">
            <div class="article__content">
                <h2 class="article__title">Заголовок</h2>
                <div class="article__categories">
                    <a href="" class="article__category">Ближний восток - центр</a>
                </div>
                <p class="article__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias labore ab odit nulla dolorem unde, ex similique, aperiam nobis sapiente nesciunt enim eum? Saepe obcaecati est debitis fugit cumque? Necessitatibus, delectus. Ullam quae perspiciatis maiores esse minus odit, recusandae iste temporibus dolorum fugiat quas atque quod ipsam, beatae voluptates vitae tempora dolorem quis necessitatibus! Quasi voluptatem recusandae voluptas eligendi laborum dolorum qui non reiciendis est corporis ullam libero veniam distinctio inventore obcaecati iure, repudiandae ab laboriosam quos! Necessitatibus quibusdam maiores repudiandae nemo molestiae incidunt asperiores illum fugiat ex, consequuntur similique repellendus cupiditate nesciunt facilis nulla mollitia quas, quos beatae iste!</p>
                <button class="btn">Читать далее</button>
            </div>
            <div class="article__img--container">
                <img src="<?= get_template_directory_uri() ?>/assets/images/news_img.jpeg" alt="" class="article__img">
            </div>
        </article>
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
