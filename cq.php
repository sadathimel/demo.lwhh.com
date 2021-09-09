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
            'post__in' => [ 484, 643, 526 ],
			'orderby'=> 'post__in'
        ] );

        foreach ( $_p as $post ) {
            setup_postdata( $post );
        ?>
            <h2><a href="<?php the_permalink();?>"><?php the_title();?></h2></a>
            <?php
                }
            ?>

</div>
<?php
    get_footer();
?>
