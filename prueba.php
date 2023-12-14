<aside class="item  i-b  w-30  aside">
	Contenido secundario
	<br>
	<?php
		function get_posts_arrayy(){
			$args = array(
				//'category__in' => 1,
				'category__in' => array(1,6),
				'post_type' => 'post',
				'post_per_page' => 20,
				'numberposts' => 50, 
			);
			return get_posts($args);
		}
	?>
	<h1>Categorías</h1>
	<?php
		$myposts = get_posts_arrayy();
		
		if ( !empty($myposts) ) {
			foreach ( $myposts as $post ) : 
				setup_postdata( $post ); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php
			endforeach;
			wp_reset_postdata();
		}
	?>
	<hr>
</aside>
