	<?php
		function get_posts_arrayy(){
			$args = array(
				//'category__in' => 1,
				'category__in' => array(7, 1),
				'post_type' => 'post',
				'post_per_page' => 20,
				'numberposts' => 50, 
			);
			$myposts = get_posts($args);
			
			if ( !empty($args) ) {
				$html1 ="";
				foreach ( $myposts as $post ) : 
					setup_postdata( $post );
					$html1 .= (" <li><a href='" .get_the_permalink($post). "'> " .get_the_title($post). "</a></li>");
				endforeach;
				
			}
			return print($html1);
		}
	printf('<aside class="item  i-b  w-30  aside">
	        <h1>Categorías</h1><br>
		    <h4>Contenido secundario</h4><br>');
		get_posts_arrayy();
		wp_reset_postdata();
		printf('<hr></aside>');
		?>
