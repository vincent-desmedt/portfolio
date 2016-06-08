<?php

// img for each post
add_theme_support( 'post-thumbnails' );


// defines navigation menu
register_nav_menu( 'main-nav', 'Menu principal, affiché dans le header');


// excerpt functons, homepage
function get_the_custom_excerpt($lenght = 1000) {
    $excerpt = get_the_content();
    $excerpt = strip_shortcodes( $excerpt );
    $excerpt = strip_tags( $excerpt ); // html pur
    return substr($excerpt, 0, $lenght); // reuperer 150 caract max

}

function the_custom_excerpt($lenght = 1000) {
    echo get_the_custom_excerpt($lenght);
}


function get_the_link($string, $replace = '%s')
{
      // Mode opératoire :
      // - On remplace la string "%s" (ou celle fournie par $replace) par le titre du post courant dans the_loop, entouré d'un span.
      // - Ne pas oublier d'ajouter une classe sur ce span (dans ce cas, une classe "sro" pour "Screen Readers Only"
      // - Via le CSS, on cible cette classe afin de lui attribuer les styles nécessaires pour la cacher.
      // Le but étant de créer un lien unique, tout en respectant un design demandant une répétition de liens qui, à priori, seraient identiques (par exemple : "Lire la suite", "Voir plus", ...).
      // Cette amélioration va impacter l'accessibilité de votre site, mais donc aussi son référencement.
      return str_replace($replace, '<span class="sro">' . get_the_title() . '</span>', __($string,'b'));
}
function the_link($string, $replace = '%s')
{
      echo get_the_link($string, $replace);
}


// generate custom menu array
function b_get_menu_id($location) {
    $a = get_nav_menu_locations();

     if (isset($a[$location])) $a[$location];
       if (isset($a[$location])) return $a[$location];
        return false;
}


function b_get_menu_items( $location )
{
    $navItems = [];
    foreach (wp_get_nav_menu_items ( b_get_menu_id($location) ) as $obj) {
        $item = new stdCLass();
        $item->url = $obj->url;
        $item->label = $obj->title;
        $item->icon = $obj->classes[0];
        array_push($navItems, $item);
    }
    return $navItems;
}
