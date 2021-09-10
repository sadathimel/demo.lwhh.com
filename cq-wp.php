<?php
    /*
     *Template Name: Custom Query WPQuery
     */
    get_header();
?>

<body<?php body_class();?>>
<?php get_template_part( "/template-parts/common/hero" );?>
<div class="posts text-center">

	<?php
        $paged          = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        $posts_per_page = 3;
        $post_ids       = [484, 643, 526, 537, 535];
        $total          = 9;
        $_p             = new WP_Query( [
            // 'category_name' => 'new',
            // 'tag' => 'special'
            // 'category_name'  => 'uncategorized',

            // 'tax_query' => array(
            //     'relation' => 'AND',
            //     array(
            //         'taxonomy' => 'movie_genre',
            //         'field'    => 'slug',
            //         'terms'    => array( 'action', 'comedy' ),
            //     ),
            'posts_per_page' => $posts_per_page,
            'paged'          => $paged,
            'tax-query' => array(
                'relation' => 'OR',
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => array('uncategorized'),
                ),
                array(
                    'taxonomy' => 'post_tag',
                    'field' => 'slug',
                    'terms' => array('special'),
                ),
            )
            

        ] );

        while ( $_p->have_posts() ) {
            $_p->the_post();
        ?>
            <h2><a href="<?php the_permalink();?>"><?php the_title();?></h2></a>
            <?php
                }
                wp_reset_query();
            ?>

<div class="container mb-4">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-8">
			<?php
                echo paginate_links( [
                    'total'     => $_p->max_num_pages,
                    'current'   => $paged,
                    'prev_text' => __( 'Old post', 'alpha' ),
                    'next_text' => __( 'Next post', 'alpha' ),
                ] )
            ?>
		</div>
	</div>
</div>

</div>
<?php
    get_footer();
?>

