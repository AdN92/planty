<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}



// Ajout du hook ADMIN dans la barre du menu

function ajouter_lien_personnalise_menu($items, $args) {  //Fonction pour filtrer éléments du menu
    // Vérifiez si l'utilisateur est connecté en tant qu'administrateur
    if (is_user_logged_in() && current_user_can('administrator')) { //Condition qui vérifie si on est connecté et si on est admin
        // Ajout du lien au menu
        $lien_admin = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>'; //Structure HTML du lien personnalisé
        $items .= $lien_admin; // Ajout du contenu $len_admin a la variable $items
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_personnalise_menu', 10, 2); // ajout fonction et permet à la fonction d'être exécutée lors de la génération des éléments du menu
