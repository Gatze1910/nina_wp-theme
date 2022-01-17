<?php
$context = Timber::get_context();
$context['post'] = Timber::get_post(); 
Timber::render('/timber/frontpage-header.twig', $context); ?>


<!-- die video section ist leider in twig schwer umsetzbar und deshalb haben wir ihn so gelassen ;) -->
    <h3> Meine aktuellsten Videos </h3>
    <div class="clips">
        <?php $clips_query = new WP_Query( 'order=ASC&category_name=videos&posts_per_page=3' ); 
            if ( $clips_query->have_posts()){     
                while ( $clips_query->have_posts()) {
                    $clips_query->the_post();

                    $link = get_field('video_url'); 
                    $linkarray = explode('=', $link );
                    $videoidparams = explode('&', $linkarray[1]);
                    $id = $videoidparams[0];
                    $url = "https://i.ytimg.com/vi/".$id."/maxresdefault.jpg"; ?>
                    
                    <div class="clip"> 
                        <img src=<?php echo $url;?> alt="Vorschaubild des YouTube-Videos" />
        
                        <div>
                            <h4><a class="button" href="<?php echo esc_url( $link ); ?>"><?php echo the_title()?></a></h4>
                        </div>
                    </div>
                            
                    <?php } 
                }
            else {?>
                <p>Schau später nochmal vorbei...</p>
            <?php }
            wp_reset_postdata();?> 
    </div>
</div>
            
</section>

<?php


// das sind unten die Features von Nina
$context3 = Timber::get_context();
$args = array(
'category_name' => 'features',
'orderby' => array(
    'date' => 'ASC'
));
$context3['post'] = Timber::get_posts( $args ); 
Timber::render('/timber/frontpage-features.twig', $context3); ?>


    

   