<?php
    /**
     * Template Name: Custom Query
     */

    get_header();
?>
<body<?php body_class();?>>
<?php get_template_part( "/template-parts/common/hero" );?>
<div class="posts text-center">

	<?php
        $_p = get_posts( [
            'posts_per_page' => 2,
            'post__in'       => [484, 643, 526, 537, 535],
            'orderby'        => 'post__in',
        ] );

        foreach ( $_p as $post ) {
            setup_postdata( $post );
        ?>
            <h2><a href="<?php the_permalink();?>"><?php the_title();?></h2></a>
            <?php
                }
                wp_reset_postdata();
            ?>

<div class="container mb-4">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-8">
			<?php
                the_posts_pagination( [
                    "screen_reader_text" => ' ',
                    "prev_text"          => "New Posts",
                    "next_text"          => "Old Post",
                ] );
            ?>
		</div>
	</div>
</div>

</div>
<?php
    get_footer();
?>
