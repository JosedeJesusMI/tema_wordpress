
	<?php
	
	printf('<main class="item  i-b  w-70  main">');
	//query_posts ('order=ASC');
	if (have_posts()) :
		while (have_posts()) :
			the_post();
			$html = '
<article class="post">
<a href="%s" class="letrab">
<h1>%s</h1>
</a><br>
<p>%s</p>
<p>%s</p><br>
<p>%s</p>
<p class="ala">%s</p><br>
<p class="ala">%s</p><br><br>
</article>
<hr>
';

			printf(
				$html,
				get_the_permalink(),
				get_the_title(),
				get_the_time('d-M-Y'),
				get_the_author(),
				get_the_excerpt(),
				get_the_category_list(' - '),
				get_the_tag_list( '<i>', ', ', '</i>')
			);
		endwhile;
	else :
		printf('<p class="error">No hay entradas</p>');
	endif;
	rewind_posts();
	//wp_reset_postdata();
	printf('</main>');
