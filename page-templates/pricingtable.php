<?php 

/*
 *   Template Name: Pricing Table
 */ 

get_header();
	$pricing = get_post_meta(get_the_ID(), "_alpha_pt_pricing_table",true);
?>
	
  <?php 
  	print_r($pricing);
   ?>

   <div class="container">
   	<div class="row">
   		
   	</div>
   </div>

<?php 
get_footer();

?>

