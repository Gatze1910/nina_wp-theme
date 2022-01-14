<?php
$context = Timber::get_context();
$context['post'] = Timber::get_post(); 
Timber::render('/timber/frontpage-header.twig', $context); 


// hier sind dann die Videos
$context2 = Timber::get_context();
$args = array(
'category_name' => 'videos',
'posts_per_page'=> 3,
'orderby' => array(
    'date' => 'DESC'
));
$context2['post'] = Timber::get_posts( $args ); 
Timber::render('/timber/frontpage.twig', $context2 ); 


// das sind unten die Features von Nina
$context3 = Timber::get_context();
$args = array(
'category_name' => 'features',
'orderby' => array(
    'date' => 'ASC'
));
$context3['post'] = Timber::get_posts( $args ); 
Timber::render('/timber/frontpage-features.twig', $context3); ?>


    

   