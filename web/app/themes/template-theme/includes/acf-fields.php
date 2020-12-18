<?php
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Настроить сайт',
        'menu_title'	=> 'Настроить сайт',
        'menu_slug' 	=> 'theme-acf-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Контактные данные',
        'menu_title'	=> 'Контактные данные',
        'menu_slug' 	=> 'contacts',
        'parent_slug'	=> 'theme-acf-settings',
    ));

}