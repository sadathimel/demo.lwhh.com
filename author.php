<?php
get_header();
?>
<body <?php body_class(); ?>>
<?php get_template_part("/template-parts/common/hero");?>
<div class="posts text-center">
    <div class="container">
        <div class="authorsection">
            <div class="row">
                <div class="col-md-2 authorimage">
                    <?php 
                        echo get_avatar( get_the_author_meta("id") ); 
                    ?>
                </div>
                <div class="col-md-10">
                    <h4>
                        <?php echo get_the_author_meta('display_name'); ?>
                    </h4>
                    <p>
                        <?php echo get_the_author_meta('description'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

	<?php
		while (have_posts()) {
			the_post();
			?>
            <h2><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></h2></a>
            <?php
		}
	 ?>


    <div class="container mb-4">
    	<div class="row">
    		<div class="col-md-4"></div>
    		<div class="col-md-8">
    			<?php
    				the_posts_pagination(array(
    					"screen_reader_text"=>' ',
    					"prev_text" => "New Posts",
    					"next_text" => "Old Post"
    				));
    			 ?>
    		</div>
    	</div>
    </div>
</div>
<?php
get_footer();
?>
