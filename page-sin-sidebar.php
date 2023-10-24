<?php
/* 
Template name: Plantilla de pagina sin sidebar
*/

get_header();
printf('<h1 class="item title-template">Esta template no tendra sidebar</h1>');
get_template_part('content');
//get_sidebar();
get_footer();

