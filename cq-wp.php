<?php 
/*
*Template Name: Custom Query WPQuery
*/ 
?>
<?php
get_header();
?>
<body <?php body_class(); ?>>
<?php get_template_part("/template-parts/common/hero");?>
<div class="posts text-center">
	<?php
    $paged = get_query_var("paged") ? get_query_var("paged") : 1;
    // $posts_ids = array(15,18,9,2,80);
    $posts_per_page = 3;
    $total = 9;
    $_p = new WP_Query( array( 
        // 'category_name'  => 'new',

        'posts_per_page' => $posts_per_page,
        'paged'          => $paged,
        'meta_query'     => $array(
            'relation'   => 'AND',
            array(
                'meta_key'      => 'featured',
                'meta_value'    => '1',
                'compare'       => '=' 
            ),
            array(
                'meta_key'      => 'homepage',
                'meta_value'    => '1'
                'compare'       => '=' ); 
        );
        // 'meta_key'       => 'featured',
        // 'meta_value'     => '1',
        // 'tax_query'      => array( 
        //     // 'relation' => 'OR',
        //     array(
        //     'taxonomy' => 'post_format',
        //     'field' => 'slug',
        //     'terms'    => array( 
        //         'post-format-audio',
        //         'post-format-video'
        //     ),
        //     'operator' => 'NOT IN',
        // ),
        //     // array(
        //     //     'taxonomy' => 'post_tag',
            //     'field'     => 'slug',
            //     'terms' => array('special')
            //      ),
         // )

        // 'monthnum' => 4,
        // 'year'  => 2021,
        // 'post_status' => 'publish'


    ) );
		while ($_p -> have_posts()) {
			$_p -> the_post()
			?>
            <h2><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></h2></a>
            <?php
		}
        wp_reset_query();
	 ?>

        <div class="container post-pagination">
            <div class="row">
                <div class="col-md-12">
                    <?php 
                        echo paginate_links([
                            'current'   => $paged,
                            'total'     => $_p->max_num_pages,
                            'prev_next' => false
                        ])
                     ?>
                </div>                
            </div>
        </div>
    </div>

</div>
<?php
get_footer();
?>
