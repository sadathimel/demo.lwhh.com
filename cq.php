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
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		$posts_per_page = 2;
		$post_ids = [484, 643, 526, 537, 535];
		$total = 9;
        $_p    = get_posts( [
            'posts_per_page' => $posts_per_page,
            // 'post__in'       => $post_ids,
			'author__in' => array(1),
			'numberposts' => $total,
            'orderby'        => 'post__in',
            'paged'          => $paged,
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
                echo paginate_links( [
                    'total' => ceil($total/$posts_per_page),
                ] )
            ?>
		</div>
	</div>
</div>

</div>
<?php
    get_footer();
?>
