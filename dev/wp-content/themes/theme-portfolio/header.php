<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta content="initial-scale=1" name="viewport">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="Je m'appelle Vincent De Smedt, je suis étudiant en web en 2e année à la Haute École de la Province de Liège. Vous trouverez sur ce site mes travaux réalisés.">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/styles.css'; ?>">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <header class="header">
            <h1 class="header__heading"><?php echo get_field('1er_element'); ?><span class="header__heading-job"><?php echo get_field('2e_element'); ?></span></h1>
            <nav class="navigation">
                <h2 class="navigation__heading">Navigation</h2>
                <label class="navigation__label-burger" for="burger" name="menu">menu</label>
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
            <a class="header__more" href="#main" title="Plus d'infos">plus d'infos</a>
        </header>
