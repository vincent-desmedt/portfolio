<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta content="initial-scale=1" name="viewport">
        <title><?php the_title();?>, site web réalisé par Vincent De Smedt</title>
        <meta name="description" content="Le site web <?php the_title();?> a été réalisé par moi même (Vincent De Smedt). Vous trouverez sur cette page un descriptif du projet.">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/styles.css'; ?>">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <header class="header project-page">
            <h1 class="header__heading"><?php the_title();?></h1>
            <nav class="navigation">
                <h2 class="navigation__heading">Navigation</h2>
                <label class="navigation__label-burger projet" for="burger" name="menu">menu</label>
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
            <section class="work-description">
                <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                <h2 class="work-description__heading">Description du projet</h2>
                <?php the_content();?>
                <img class="work-description__img" src="<?php the_post_thumbnail_url('full');?>">
                <?php endwhile; endif; ?>
                <a class="work-description__link" href="<?php echo get_field('lien_vers_le_site_du_projet'); ?>" title="lien vers le site du projet">voir le site du projet</a>
            </section>
        </main>
<?php
get_footer();
