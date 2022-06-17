<?php
/**
 * Template Name: alllist */
?>
<?php get_header(); ?>
<main id="pageworks">
    <div class="pageworks">
        <div class="pageworks-post">
            <h2 class="small-title">WORKS</h2>
            <p>webアプリ、webデザインの制作実績です</p>
        </div>
        <nav>
            <ul>
            <?php wp_list_categories('hide_empty=1&title_li='); ?>
            </ul>
        </nav>
        <div class="pageworks-list">
        <?php
            $paged = (int) get_query_var('paged');
            $args = array(
	            'posts_per_page' => 12,
	            'paged' => $paged,
	            'orderby' => 'post_date',
	            'order' => 'DESC',
	            'post_type' => 'post',
	            'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
	            while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
        <div>
            <a href="<?php the_permalink(); ?>">
                <div class="pageworks-list_image"><?php the_post_thumbnail(); ?></div>
                <div class="pageworks-list_content">
                    <div class="pageworks-list_content_title"><?php the_title(); ?></div>
                    <div class="pageworks-list_content_element"><?php the_category(' '); ?></div>
                </div>
            </a>
        </div>
        <?php endwhile; endif; ?>
        </div>
        <div class="page-nations">
        <?php
            if ($the_query->max_num_pages > 1) {
	            echo paginate_links(array(
		        'base' => get_pagenum_link(1) . '%_%',
		        'format' => 'page/%#%/',
		        'current' => max(1, $paged),
		        'total' => $the_query->max_num_pages
	            ));
            }
        ?>
        </div>
        <div class="linkhome"><a href="<?php echo home_url(); ?>">HOME</a></div>
    </div>
</main>
<?php get_footer(); ?>