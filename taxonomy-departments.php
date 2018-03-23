<?php get_header(); ?>
<?php include_once ('style-directory.css'); ?>
<div class="section team">
    <div class="section-title">
        <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?>
    </div>
    <div class="section-text"><?php the_field('section_text'); ?></div>

    <div class="container alm-reveal">
        <?php
        $args = array( 'post_type' => 'directory', 'posts_per_page' => -1, 'meta_key' => 'last_name', 'orderby' => 'meta_value', 'order' => 'ASC', get_query_var( 'taxonomy' ) => get_query_var( 'term' ) );
        $my_query = null;
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) {
          while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class="team-member">
                <div class="team-image-container">
                    <div class="team-image">
              <a href="<?php the_permalink(); ?>">
                <?php $featured_image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                    <?php if ( ! empty( $featured_image_url ) ) {
                      the_post_thumbnail(300,auto); }
                    else { ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/profile-backdrop.jpg" alt="No Photo Available" /> <?php }?>
            </a>
          </div>
                </div>
                <div class="team-title"><?php the_title(); ?></div>
                <div class="team-position"><?php the_field('position'); ?></div>
            </div>
        <?php endwhile;
        }
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>
    </div>
</div>
<?php get_footer(); ?>
