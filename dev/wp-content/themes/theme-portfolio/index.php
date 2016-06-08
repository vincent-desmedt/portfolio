<?php
get_header();
?>
        <main id="main" class="main">
            <section class="description">
                <h2 class="description__heading">Qui suis-je&nbsp;?</h2>
                <?php echo get_field('qui_suis-je'); ?>
            </section>
            <section class="works">
                <h2 class="works__heading">Aperçu de mes réalisations</h2>
                <?php
                  $posts = new WP_Query( ['posts_per_page' => 3] );
                  if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
                ?>
                    <article class="work">
                        <div class="work__container">
                            <a class="work__link" href="<?php the_permalink();?>" title="voir ce projet">
                                <span class="work__link-container">
                                    <span class="work__link-elt">voir ce projet</span>
                                </span>
                                <span class="work__link-name"><?php the_title();?></span>
                                <img class="work__img" src="<?php the_post_thumbnail_url('full');?>">
                            </a>
                            <h3 class="work__heading"><?php the_title();?></h3>
                        </div>
                    </article>
                <?php endwhile; endif; ?>
            </section>
        </main>
<?php
get_footer();
