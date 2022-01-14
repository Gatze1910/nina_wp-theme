<?php
$context = Timber::get_context();
$args = array(
'category_name' => 'rezepte',
'orderby' => array(
    'date' => 'DESC'
));

$context['post'] = Timber::get_posts( $args ); 

Timber::render('/timber/rezepte.twig', $context); ?>

  