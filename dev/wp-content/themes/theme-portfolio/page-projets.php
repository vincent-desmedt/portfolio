<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta content="initial-scale=1" name="viewport">
        <title><?php the_title();?> réalisés par Vincent De Smedt</title>
        <meta name="description" content="L'ensemble des travaux réalisés par moi même (Vincent De Smedt).">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/styles.css'; ?>">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <header class="header projects-page">
            <h1 class="header__heading"><?php the_title();?></h1>
            <nav class="navigation">
                <h2 class="navigation__heading">Navigation</h2>
                <label class="navigation__label-burger projets" for="burger" name="menu">menu</label>
                <input class="navigation__input-burger" type="checkbox" name="name" id="burger">
                <ul class="navigation__list">
                    <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                        <li class="navigation__elt">
                            <a href="<?php echo $navItem->url; ?>" class="navigation__link <?php echo $navItem->icon; ?>">
                                <?php echo $navItem->label; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </header>
        <main id="main" class="main">
            <section class="works projects-page">
                <h2 class="works__heading">Aperçu de mes réalisations</h2>
                <?php
                  $posts = new WP_Query( ['posts_per_page' => -1] );
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
