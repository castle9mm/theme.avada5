<?php
/*
 * * Template Name: Directory Search Results
 * */
?>
<title>Directory Search Results</title>
<?php get_header(); ?>
<?php include_once ('style-directory.css'); ?>
<div class="section team">
<div class="section-title">Search Results</div>
<div class="back-btn"> <a href="<?php bloginfo('url'); ?>/directory"> <span class="fa-stack fa-lg"> <i class="fa fa-circle-thin fa-stack-2x"></i> <i class="fa fa-arrow-left fa-stack-1x fa-inverse"></i> </span> Back to Directory </a> </div>
<div class="container alm-reveal">
  <?php
if ( have_posts() ) {
      while ( have_posts() ) {
                the_post(); ?>
  <div class="team-member">
    <div class="team-image-container">
      <div class="team-image">
              <a href="<?php the_permalink(); ?>">
                    <?php $featured_image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                    <?php if ( ! empty( $featured_image_url ) ) {
                      the_post_thumbnail(300,auto); }
                    else { ?>
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/profile-backdrop.jpg" alt="No Photo Available" />
                    <?php }?>
            </a>
          </div>
    </div>
    <div class="team-title">
      <?php the_title(); ?>
    </div>
    <div class="team-position">
      <?php the_field('position'); ?>
    </div>
    <div class="team-department">
            <?php
                       $terms = get_the_terms( $post->ID, 'departments' );
                      if (!empty($terms)) {
                      ?>
                  <?php
                  $sep = '';
                              foreach($terms as $term) {
                                  $link = get_term_link( $term );

                                                      echo $sep . '<a href="' . $link . '">' . $term->name . '</a>';
                                                      $sep = ', ';


                                                                                    }
                                        ?>
                                   <?php
                          }
                      ?>
      </div>
  </div>
  <?php
    } // end while
} // end if
?>
</div>
<?php get_footer(); ?>
