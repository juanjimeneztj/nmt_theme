<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if (have_posts()) :
    while (have_posts()) : the_post();
        $cat = get_the_category(); 
    endwhile;
endif;

$catName = strtolower(str_replace(" ","-",$cat[0]->cat_name));

switch ($catName) {
    case 'newsletter':
        get_template_part( 'template_parts/archives/archive', $catName );
        break;
    default:
    get_template_part( 'template_parts/archives/archive', 'default' );
        break;
}
