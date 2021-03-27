<?php 
/*
*Template Name: Custom Query
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
    $_p = get_posts(array(
        'posts_per_page' => 2,
        'post__in'       => array(15,18,9,2,80),
        'orderby'        => 'post__in',
        'paged'          => $paged
    ));
		foreach ($_p as $post) {
			setup_postdata($post);
			?>
            <h2><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></h2></a>
            <?php
		}
        wp_reset_postdata();
	 ?>

    <div class="container post-pagination">
        <div class="row">
            <div class="col-md-4"> </div>
            <div class="col-md-8">
                <?php
                the_posts_pagination( array(
                    "screen_reader_text"=>' ',
                    "prev_text" => "New Posts",
                    "next_text" => "Old Posts"
                ));
                ?>
            </div>
        </div>
    </div>

</div>
<?php
get_footer();
?>
