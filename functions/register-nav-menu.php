<?php

// MENU PRINCIPAL
function nav_principal(){
    //$walker = new Menu_With_Description;
    wp_nav_menu(
    array(
        'theme_location'  => 'menu-principal',
        'container'       => 'nav',
        'container_class' => '',
        'menu_class'      => 'cf dropdown'
        //'walker'          => $walker
        )
    );
}

register_nav_menu( 'menu-principal', 'Menu Principal' );
