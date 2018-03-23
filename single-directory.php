<?php get_header(); ?>
<style>
.directory {display:flex;justify-content:space-between;}
.directory-left {
  flex-basis:100%;
  max-width:45%;
  
}
.directory-left .name {
    font-size: 68px;
    font-weight: bold;
    color: #000;
    margin-bottom:0;
}
.directory-left .position {
    color: #898989;
    font-size: 26px;
    border-left: 51px solid #898989;
    line-height: 26px;
    padding: 4px 0 0 10px;
    margin-bottom: 10px;
    margin-top: 0;
}
.directory-left .department {
    color: #cc0000;
    font-size: 20px;
    border-left: 51px solid #cc0000;
    line-height: 20px;
    padding: 4px 0 0 10px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
}
.directory-left .department a, .directory-left .team-phone a {
    color: #cc0000;
}
.team-contact-info {
    border-left: 51px solid #898989;
    padding: 4px 0 0 10px;
    font-weight: 700;
}
.directory-left .team-location {
    color: #898989;
}
.directory-left .team-email {
    color: #898989;
}
.directory-left .team-phone {
    color: #898989;
    margin-bottom: .5em;
}
.directory-left .connect .btn-red, .directory-left .connect .btn-red:hover, .directory-left .far-btn .btn-red, .directory-left .far-btn .btn-red:hover {
    border: 2px solid #cc0000;
}
.the-button-style, .btn.btn-red, .ms-protection-msg input[type="submit"], .gform_button[type="submit"] {
    background-color: #cc0000;
    color: #fff !important;
    padding: .5em 1.5em;
    border: 2px solid #cc0000;
    border-radius: 0;
    font-size: 16px;
    width: auto;
    margin: 1em 0;
    display: inline-block;
    text-shadow: none !important;
}
.btn-red {
    background: #cc0000;
}
.tab-button:hover .the-button-style, .btn.btn-red:hover {
    background-color: #fff;
    color: #cc0000 !important;
    border: 2px solid #cc0000;
}
.directory-left .connect .btn-red, .directory-left .connect .btn-red:hover, .directory-left .far-btn .btn-red, .directory-left .far-btn .btn-red:hover {
    border: 2px solid #cc0000;
}
.directory-left .att-section-title-short {
    font-size: 15px;
    text-transform: uppercase;
    font-weight: bold;
    color: #000;
    margin-bottom: 30px;
}
.directory-left .att-section-title {
    font-size: 15px;
    text-transform: uppercase;
    font-weight: bold;
    color: #000;
    margin-bottom: .3em;
}
.directory-left .att-section-title:before {
    content: '\f055';
    font-family: "FontAwesome";
    color: #cc0000;
    padding: 0 1em 0 0;
    font-size: 17px;
}
.directory-left .att-section-block.open {
    display: block;
    margin-bottom: 30px;
    float: left;
    width: 100%;
    border: 1px solid #cc0000;
    padding: 1em;
}
.directory-left .att-section-block {
    display: none;
}
.directory-left .social-section {
    float: left;
    width: 100%;
    margin-top: 1em;
    margin-bottom: 30px;
}
.directory-left .social-section ul {
    margin: 0;
    padding: 0;
}
.directory-left .social-section ul li {
    list-style-type: none;
    float: left;
    margin-right: 10px;
}
.directory-left .social-section ul li a .fa-circle {
    color: #c2c2c2;
}
.directory-left .back-btn {
    float: left;
    width: 100%;
    margin-bottom: 30px;
}
.directory-left .back-btn i.fa-arrow-left {
    color: #cc0000;
}

.directory-right {
  flex-basis:100%;
  max-width: 50%;
}
</style>
<div class="container directory">
	<div class="directory-left">
		<h3 class="name"><?php the_title(); ?></h3>
		<h4 class="position"><?php the_field('position'); ?></h4>
		<h4 class="department">
                  <?php 
                    $terms = get_the_terms( $post->ID, 'departments' );
                    if (!empty($terms)) {
		      $sep = '';
                      foreach($terms as $term) {	
                        $link = get_term_link( $term );    
			echo $sep . '<a href="' . $link . '">' . $term->name . '</a>';
			$sep = ', ';
                      }
                    }
                  ?>
		</h4>
		<div class="team-contact-info">
    	          <?php $has_loc = get_field('office_building'); ?>
    	          <?php if(!empty($has_loc)) { ?>
      	            <div class="team-location"><?php the_field('office_building'); ?>&nbsp;<?php the_field('office_room'); ?></div>
                  <?php } ?>
		  <div class="team-email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
		  <div class="team-phone"><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></div>
		</div>
                <?php
                  $terms = get_the_terms( $post->ID, 'ecclesRoles' );
                  if (!empty($terms)) {?>
                    <h4 class="ecclesRole department">
                    <?php
                      $sep = '';
                      foreach($terms as $term) {
                        $link = get_term_link( $term );
                        echo $sep . '<a href="' . $link . '">' . $term->name . '</a>';
                        $sep = ', ';
                      }
                  }
                ?>
                </h4>
		<div class="bio">
		  <?php the_field('bio'); ?>
		</div>
		<div class="connect">
                  <a class="btn btn-red" href="http://eccles.qualtrics.com/jfe/form/SV_6V6QuZOxWPoZ70h?page_url=<?php the_permalink(); ?>&email=<?php the_field('email'); ?>">Connect</a>
		</div>
		<?php $has_far = get_field('far_url'); ?>
		<?php if(!empty($has_far)) { ?>
		  <div class="far-btn">
		    <a class="btn btn-red" href="<?php the_field('far_url'); ?>" target="_blank">Faculty Profile</a>
		  </div>
		<?php } ?>
		<?php if(get_field('full_page_or_short') == 'short') { 
		  $values = get_field('areas_of_expertise_short'); 
		  if (!empty($values)){
		    if(in_array('include', $values )) { ?>
                      <div class="attribute-section">
                      <div class="att-section-title-short">Areas of Expertise</div>
                      <?php 
                        $terms = get_the_terms( $post->ID, 'areas_of_expertise' );
                        if (!empty($terms)) {
                          foreach($terms as $term) {
                            $link = get_term_link( $term );?>
                            <div class="red-box"><a href="<?php echo $link; ?>"><?php echo $term->name; ?></a></div>
                          <?php }
                        } ?>
            </div>
          <?php } ?>
        <?php } ?>  
		<?php } ?>
		
		
		<div class="attribute-section">
			<?php if(get_field('full_page_or_short') == 'full') { ?>
				<?php $values = get_field('areas_of_expertise_short'); 
            if (!empty($values)){
        ?>
            <?php if(in_array('include', $values )) { ?>
              <div class="attribute-section">
                <div class="att-section-title-short">Areas of Expertise</div>
                <?php 
      
                            $terms = get_the_terms( $post->ID, 'areas_of_expertise' );
                            if (!empty($terms)) {
                        ?>
                          <?php 
                                    foreach($terms as $term) {
                                        $link = get_term_link( $term );
                                        ?>
                        <div class="red-box"><a href="<?php echo $link; ?>"><?php echo $term->name; ?></a></div>
                               
                                        <?php
                                    }
                            ?>
                                         <?php 
                                }
                            ?>
              </div>
            <?php } ?>
          <?php } ?>  
      
					<p><a href="" class="expandall" style="font-size: 80%;"><i>Toggle All Sections</i></a></p>
          
			<?php } ?>
			<?php $i = 0; while(the_repeater_field('attribute_sections')): $i++; ?>
      
				<?php if(get_sub_field('open_or_closed') == 'open') { ?>
					<div class="att-section-title toggle-btn up" data-id="block-<?php echo $i; ?>"><?php the_sub_field('section_title'); ?></div>
					<div class="att-section-block block-<?php echo $i; ?> open">
				<?php } else { ?>
					<div class="att-section-title toggle-btn" data-id="block-<?php echo $i; ?>"><?php the_sub_field('section_title'); ?></div>
					<div class="att-section-block block-<?php echo $i; ?>">
				<?php } ?>
				
					<?php if(get_sub_field('options') == 'text') { ?>
						<?php the_sub_field('text'); ?>
					<?php } elseif(get_sub_field('options') == 'images') { ?>
						<?php while(the_repeater_field('images')): ?>
							<?php $has_link = get_sub_field('link'); ?>
							<?php $opt_image_image = get_sub_field('image');
								  $opt_image_image_size = 'content-thumbs';
								  $opt_image_image_url = $opt_image_image['sizes'][$opt_image_image_size];?>
							<?php if(!empty($has_link)) { ?>									
								<div class="opt-image">
									<a href="<?php echo $has_link; ?>"><img src="<?php echo $opt_image_image_url; ?>" alt="<?php the_title(); ?>" /></a>
								</div>
							<?php } else { ?>
								<img src="<?php echo $opt_image_image_url; ?>" alt="<?php the_title(); ?>" />
							<?php } ?>
						<?php endwhile;?>
					<?php } elseif(get_sub_field('options') == 'files') { ?>
						<?php while(the_repeater_field('files')): ?>
							<?php $has_file = get_sub_field('file'); ?>
							<a href="<?php echo $has_file; ?>"><img src="<?php the_sub_field('cover_image'); ?>" alt="" /></a>
						<?php endwhile;?>
					<?php } elseif(get_sub_field('options') == 'redbox') { ?>
						<?php while(the_repeater_field('red_boxes')): ?>
							<div class="red-box"><?php the_sub_field('text'); ?></div>
						<?php endwhile;?>
					<?php } elseif(get_sub_field('options') == 'titlesubtext') { ?>
						<?php while(the_repeater_field('title_subtitle_text')): ?>
							<div class="title-section">
								<div class="title-section-title"><?php the_sub_field('title'); ?></div>
								<div class="title-section-sub-title"><?php the_sub_field('sub-title'); ?></div>
								<div class="title-section-text"><?php the_sub_field('text'); ?></div>
							</div>
						<?php endwhile;?>
					<?php } elseif(get_sub_field('options') == 'include') { ?>
						<?php 

		                    $has_terms = get_the_terms( $post->ID, 'areas_of_expertise' );
		                    if (!empty($has_terms)) {
		                ?>
	                    <?php 
		                            foreach($has_terms as $term) {
		                                $link = get_term_link( $term );
		                                ?>
										<div class="red-box"><a href="<?php echo $link; ?>"><?php echo $term->name; ?></a></div>

		                                <?php
		                            }
		                    ?>
		                                 <?php 
		                        }
		                    ?>
					<?php } ?>
				</div>
			<?php endwhile;?>
		</div>
		
		<div class="social-section">
			<ul>
				<?php
					$has_linkedin = get_field('linkedin_url');
					$has_twitter = get_field('twitter_url');
					$has_facebook = get_field('facebook_url');
					$has_instagram = get_field('instagram_url');
					$has_youtube = get_field('youtube_url');
				?>
				<?php if(!empty($has_linkedin)) { ?>									
					<li><a href="<?php echo $has_linkedin; ?>" target="_blank"><span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
					</span></a></li>
				<?php } ?>
				<?php if(!empty($has_twitter)) { ?>									
					<li><a href="<?php echo $has_twitter; ?>" target="_blank"><span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
					</span></a></li>
				<?php } ?>
				<?php if(!empty($has_facebook)) { ?>									
					<li><a href="<?php echo $has_facebook; ?>" target="_blank"><span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
					</span></a></li>
				<?php } ?>
				<?php if(!empty($has_instagram)) { ?>									
					<li><a href="<?php echo $has_instagram; ?>" target="_blank"><span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
					</span></a></li>
				<?php } ?>
				<?php if(!empty($has_youtube)) { ?>									
					<li><a href="<?php echo $has_youtube; ?>" target="_blank"><span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
					</span></a></li>
				<?php } ?>
			</ul>
		</div>
		
		<div class="back-btn">
			<a href="<?php bloginfo('url'); ?>/directory">
				<span class="fa-stack fa-lg">
			  		<i class="fa fa-circle-thin fa-stack-2x"></i>
			  		<i class="fa fa-arrow-left fa-stack-1x fa-inverse"></i>		
				</span>
				Back to Directory
			</a>
		</div>
		
	</div>
	<div class="directory-right" id="desktop-right">
		<div class="person-image">
                  <div class="cover">
                    <?php $featured_image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                    <?php if ( ! empty( $featured_image_url ) ) {
                      the_post_thumbnail(medium_large); } 
                    else { ?>  
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/profile-backdrop.jpg" alt="No Photo Available" /> 
                    <?php }?>
                  </div>
		</div>	
		<?php
		if( have_rows('other_images') ): ?>	
		<div class="additional-images">
		   <?php while ( have_rows('other_images') ) : the_row(); ?>
			<?php $bio_additional_image = get_sub_field('image');
				  $bio_additional_image_size = 'bio-additional-pic';
				  $bio_additional_image_url = $bio_additional_image['sizes'][$bio_additional_image_size];?>
				<div class="add-image">
					<img src="<?php echo $bio_additional_image_url; ?>" alt="<?php the_title(); ?>" />
				</div>
		   <?php endwhile; ?>
		</div>
		<?php else : endif; ?>
		</div>
	</div>
</div>
<script type="text/javascript">
jQuery( document ).ready(function() {
	
	jQuery('.expandall').on('click', function(e) {
			jQuery(".att-section-block").toggleClass("open");
			jQuery(".toggle-btn").toggleClass("up");
			e.preventDefault();
	});
	
	
	jQuery('.toggle-btn').on('click', function(e) {
			var id = jQuery(this).attr('data-id');
			jQuery('.'+id).toggleClass("open");
	    jQuery(this).toggleClass('up');
			e.preventDefault();
	    });
});
</script>
<?php get_footer(); ?>
