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
                <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail(); }
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
  </div>
  <?php
    } // end while
} // end if
?>
</div>
<?php get_footer(); ?>
