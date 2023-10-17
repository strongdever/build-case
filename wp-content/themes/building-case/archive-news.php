<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$cat_slug = get_query_var('news-category') ? get_query_var('news-category') : "";

?>

    <main id="archive-news" class="news-page">
        <div class="sub-firstview">
            <h2>新着情報</h2>
            <span>News</span>
        </div>
        <div class="page-status">
            <a class="home" href="<?php echo HOME; ?>">トップページ</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <div class="this-page">新着情報</div>
        </div>
        <div class="container">
            <div class="content1100 content">
                <?php
                $args = [
                    'post_type' => 'news',
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'posts_per_page' => 12,
                    'orderby' => 'post_date',
                    'order' => 'DESC'
                ];
                $tax_query = [];

                if( $cat_slug ) {
                    $tax_query[] = [
                        'taxonomy' => 'news-category',
                        'field' => 'slug',
                        'terms' => $cat_slug
                    ];
                }
            
                if ( !empty($tax_query) ) {
                    $args['tax_query'] = $tax_query;
                }
                $custom_query = new WP_Query( $args );
                if( $custom_query->have_posts() ) :
                ?>
                <div class="left-wrapper">
                    <?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                    <article class="post single-post">
                        
                        <div class="single-post-title">

                            <h2 class="desc-20-bold">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2> <!--  end blog-post-title  -->

                            <p class="single-post-meta">
                            <?php 
                            $post_cats = get_the_terms(get_the_ID(), "news-category");
                            if($post_cats) :
                                foreach($post_cats as $post_cat) :
                            ?>
                                <a class="category" href="<?php echo get_term_link($post_cat); ?>"><?php echo $post_cat->name; ?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                                &nbsp;<i class="fa fa-calendar"></i>
                                &nbsp;<?php the_time('Y.m.d'); ?>
                            </p>

                            <p class="desc-16-normal"><?php the_excerpt(); ?></p>


                        </div> <!-- end col-sm-8  -->

                    </article>

                    <?php endwhile; ?>


                    <div class="blog-pagination text-center clearfix">                

                        <?php the_posts_pagination( array(
                            'next_text' => '<i class="fa fa-angle-right" style="font-size:36px"></i>',
                            'prev_text' => '<i class="fa fa-angle-left" style="font-size:36px"></i>',
                        ) ); ?>
        	        <?php wp_reset_query(); ?> <!-- end pagination  -->

                    </div> <!--  end blog-pagination -->

                </div> <!--  end col-sm-8 -->
                <?php endif; ?>


                <div class="right-wrapper">

                    <div class="widget site-sidebar">

                    <?php  
                        $cats_args = [
                            'taxonomy' => 'news-category',
                            'hide_empty' => false,
                        ];
                        $cats = get_terms( $cats_args );
                        if($cats) :
                    ?>
                        <h2 class="widget-title desc-20-normal">カテゴリ</h2>
                        
                        <ul class="widget-post-category clearfix">
                            <li>
                                <a class="<?php echo $cat_slug ? '' : ' active'; ?>" href="<?php echo HOME; ?>/news">全て</a>
                                <span class="float-right badge">
                                    <!-- getting the count of all the posts -->
                                    <?php
                                    $category_slug = $cat->slug;
                                    $args = array(
                                        'post_type' => 'news',
                                        'post_status' => 'publish',
                                        'posts_per_page' => -1,
                                    );

                                    $query = new WP_Query($args);

                                    $post_count = $query->post_count;
                                    echo $post_count;
                                    ?>
                                </span>
                            </li>
                            <?php foreach($cats as $cat) : ?>
                            <li>
                                <a class="<?php if($cat_slug == $cat->slug ){ echo ' active'; } else { echo ''; } ?>" title="View all posts filed under Environment" href="<?php echo get_term_link($cat); ?>"><?php echo $cat->name; ?></a>
                                <span class="float-right badge">
                                    <!-- getting the count of all the posts by category-->
                                    <?php
                                    $category_slug = $cat->slug;
                                    $args = array(
                                        'post_type' => 'news',
                                        'post_status' => 'publish',
                                        'posts_per_page' => -1,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'news-category',
                                                'field' => 'slug',
                                                'terms' => $category_slug
                                            )
                                        )
                                    );

                                    $query = new WP_Query($args);

                                    $post_count = $query->post_count;
                                    echo $post_count;
                                    ?>
                                </span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>

                    </div> <!--  end .widget -->

                    <div class="widget site-sidebar">
                    <?php
                        $args = [
                            'post_type' => 'news',
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'posts_per_page' => 5,
                            'orderby' => 'post_date',
                            'order' => 'DESC'
                        ];
                        $custom_query = new WP_Query( $args );
                        if( $custom_query->have_posts() ) :
                        ?>
                        <h2 class="widget-title desc-20-normal">最近の投稿</h2>
                        <?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                        <div class="single-recent-post">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <span><i class="fa fa-calendar"></i>&nbsp; <?php the_time('Y.m.d'); ?></span>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>

                    </div> <!--  end .widget -->

                </div> <!-- end .col-sm-4  -->
            </div>
        </div>
    </main>

	<?php get_footer(); ?>