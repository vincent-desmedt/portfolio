<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta content="initial-scale=1" name="viewport">
        <title>Contactez Vincent De Smedt</title>
        <meta name="description" content="Envie de faire appel à mes connaissance graphiques dans le monde du Web? C'est ici que ça se passe.">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/styles.css'; ?>">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <header class="header contact-page">
            <h1 class="header__heading"><?php echo get_field('titre_contact'); ?></h1>
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
            <a class="header__more" href="#main" title="me contacter">me contacter</a>
        </header>
        <main id="main" class="main">
            <form class="form" method="post" action="#">
                <div class="form__elt">
                    <label class="form__label" for="lastname">nom</label>
                    <input class="form__input" id="lastname" type="text" name="lastname" placeholder="De Smedt" maxlength="40" required>
                </div>
                <div class="form__elt">
                    <label class="form__label" for="firstname">prénom</label>
                    <input class="form__input" id="firstname" type="text" name="firstname" placeholder="Vincent" maxlength="30" required>
                </div>
                <div class="form__elt">
                    <label class="form__label" for="email">e-mail</label>
                    <input class="form__input" id="email" type="email" name="email" placeholder="vincent-desmedt@skynet.be" maxlength="50" required>
                </div>
                <div class="form__elt">
                    <label class="form__label" for="message">message</label>
                    <textarea class="form__textarea" id="message" name="message" rows="10" placeholder="votre message" required></textarea>
                </div>
                <div class="form__elt">
                    <label class="form__label" for="submit">envoyer</label>
                    <input class="form__submit" id="submit" type="submit" name="submit" required>
                </div>
            </form>
        </main>
<?php
get_footer();
