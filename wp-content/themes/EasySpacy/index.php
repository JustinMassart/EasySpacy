<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="content">
        <div class="content__wysiwyg">
            <?php the_content(); ?>
        </div>
    </main>
<?php endwhile; else: ?>
    <div class="empty">
        <p class="empty__message">Oups, nous n'avons encore rien publié ici !</p>
    </div>
<?php endif; ?>
<?php get_footer(); ?>