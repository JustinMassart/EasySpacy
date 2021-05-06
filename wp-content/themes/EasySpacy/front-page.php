<?php get_header(); ?>
    <!-- Commencer la boucle principale permettant d'afficher la page -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="content">
    <div class="content__wysiwyg">
        <?php the_content(); ?>
    </div>
    <section class="capsules">
        <h2 class="capsules__title sro">Voici les dernières capsules ajoutées sur le site</h2>
        <div class="capsules__container">
            <!-- Commencer la boucle des projets -->
            <?php
            $capsules = new WP_Query([
                'post_type' => 'Capsules',
                'orderby' => 'date',
                'order' => 'desc',
            ]);

            if ($capsules->have_posts()) : while ($capsules->have_posts()) :
                $capsules->the_post(); ?>
                <article class="capsule">
                    <h3 class="capsule__title"><?php the_title(); ?></h3>
                    <dl class="capsule__info">
                        <dt class="capsule__term sro"><?php the_title(); ?>&nbsp;</dt>
                        <dd class="capsule__description"><?php the_field('remplacement_text'); ?></dd>
                        <dt class="capsule__term">Difficulté :&nbsp;<?php the_field('difficulty'); ?></dt>
                    </dl>
                </article>
            <?php endwhile; else: ?>
                <p class="capsule__empty">Je n'ai pas encore de projet à afficher</p>
            <?php endif; ?>
            <!-- Fin de la boucle des projets -->
        </div>
    </section>
    <!-- Fin la boucle principale permettant d'afficher la page -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>