<?php 

single_cat_title(); 

$alpha_current_term = get_queried_object();

$alpha_get_thumbnail_id = get_field("thumbnail",$alpha_current_term);

if ($alpha_get_thumbnail_id) {
	 $file_thumbnail_details = wp_get_attachment_image_src($alpha_get_thumbnail_id,"thumbnail");
	 echo "<br/><img src = '".esc_url($file_thumbnail_details[0])."'>";

}