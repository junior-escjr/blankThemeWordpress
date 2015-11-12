<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');

function retornaEvento(){
	global $post;

	$args = array(
            	//colocar argumentos do loop
            );
   	$the_query = new WP_Query($args);

   if ($the_query->have_posts()):
       while ($the_query->have_posts()) : $the_query->the_post(); ?>

			<!-- colocar o html aqui -->

	<?php
		endwhile;
	endif;
   wp_reset_postdata();
   die();
}


add_action('wp_ajax_retornaEvento', 'retornaEvento');
add_action('wp_ajax_nopriv_retornaEvento', 'retornaEvento');

?>
