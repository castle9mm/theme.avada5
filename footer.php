<?php
/**
 * The footer template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
					<?php do_action( 'avada_after_main_content' ); ?>

				</div>  <!-- fusion-row -->
			</main>  <!-- #main -->
			<?php do_action( 'avada_after_main_container' ); ?>

			<?php global $social_icons; ?>

			<?php if ( false !== strpos( Avada()->settings->get( 'footer_special_effects' ), 'footer_sticky' ) ) : ?>
				</div>
			<?php endif; ?>

			<?php
			/**
			 * Get the correct page ID.
			 */
			$c_page_id = Avada()->fusion_library->get_page_id();
			?>

			<?php
			/**
			 * Only include the footer.
			 */
			?>
			<?php if ( ! is_page_template( 'blank.php' ) ) : ?>
				<?php $footer_parallax_class = ( 'footer_parallax_effect' == Avada()->settings->get( 'footer_special_effects' ) ) ? ' fusion-footer-parallax' : ''; ?>

				<div class="fusion-footer<?php echo esc_attr( $footer_parallax_class ); ?>">

					<?php
					/**
					 * Check if the footer widget area should be displayed.
					 */
					$display_footer = get_post_meta( $c_page_id, 'pyre_display_footer', true );
					?>
					<?php if ( ( Avada()->settings->get( 'footer_widgets' ) && 'no' !== $display_footer ) || ( ! Avada()->settings->get( 'footer_widgets' ) && 'yes' === $display_footer ) ) : ?>
						<?php $footer_widget_area_center_class = ( Avada()->settings->get( 'footer_widgets_center_content' ) ) ? ' fusion-footer-widget-area-center' : ''; ?>

						<footer role="contentinfo" style="display: none" class="fusion-footer-widget-area fusion-widget-area<?php echo esc_attr( $footer_widget_area_center_class ); ?>">
							<div class="fusion-row">
								<div class="fusion-columns fusion-columns-<?php echo esc_attr( Avada()->settings->get( 'footer_widgets_columns' ) ); ?> fusion-widget-area">
									<?php
									/**
									 * Check the column width based on the amount of columns chosen in Theme Options.
									 */
									$footer_widget_columns = Avada()->settings->get( 'footer_widgets_columns' );
									$footer_widget_columns = ( ! $footer_widget_columns ) ? 1 : $footer_widget_columns;
									$column_width = ( '5' == Avada()->settings->get( 'footer_widgets_columns' ) ) ? 2 : 12 / $footer_widget_columns;
								
								/* Custom HTML Footer*/
									?>

  <div class="footer-sections" style="display: none">
        <div class="footer-section">
          <h5>About Us</h5>
          <ul>
            <li> <a href="http://eccles.utah.edu/directory/">Directory</a> </li>
            <li> <a href="http://eccles.utah.edu/about/">Eccles Experience</a> </li>
            <li> <a href="http://eccles.utah.edu/news/">Eccles Newsroom</a> </li>
            <li> <a href="http://eccles.utah.edu/about/connect/">Connect with Us</a> </li>
            <li> <a href="http://eccles.utah.edu/about/calendar/">Calendar of Events</a> </li>
            <li> <a href="http://eccles.utah.edu/about/campus-facilities/">Campus &amp; Facilities</a> </li>
            <li> <a href="http://eccles.utah.edu/about/lassonde-studios/">Lassonde Studios</a> </li>
            <li> <a href="http://eccles.utah.edu/about/salt-lake-city/">Salt Lake City</a> </li>
            <li> <a href="http://eccles.utah.edu/about/david-eccles/">David Eccles</a> </li>
            <li> <a href="http://eccles.utah.edu/about/diversity-inclusion/">Diversity &amp; Inclusion</a> </li>
            <li> <a href="http://eccles.utah.edu/about/school-values/">School Values</a> </li>
            <li> <a href="http://eccles.utah.edu/about/facts-figures/">Facts &amp; Figures</a> </li>
            <li> <a href="http://eccles.utah.edu/alumni/">Alumni</a> </li>
            <li> <a href="http://eccles.utah.edu/about/advisory-boards/">Advisory Boards</a> </li>
          </ul>
        </div>
        <!-- /.footer-section -->

        <div class="footer-section">
          <h5>Programs</h5>
          <ul>
            <li> <a href="http://eccles.utah.edu/programs/undergraduate/">Undergraduate Programs</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/undergraduate/accounting/">Accounting</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/undergraduate/business-administration/">Business Administration</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/undergraduate/entrepreneurship/">Entrepreneurship</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/undergraduate/finance/">Finance</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/undergraduate/information-systems/">Information Systems</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/undergraduate/management/">Management</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/undergraduate/marketing/">Marketing</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/undergraduate/operations-management/">Operations Management</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/undergraduate/academics/majors/qamo/">Quantitative Analysis of Markets &amp; Organizations</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/graduate/">Graduate Programs</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/master-of-accounting/">Master of Accounting</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/mba/">Master of Business Administration</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/master-of-healthcare-administration/">Master of Healthcare Administration</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/master-of-real-estate-development/">Master of Real Estate Development</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/master-of-science-in-business-analytics/">Master of Science in Business Analytics</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/master-of-science-in-finance/">Master of Science in Finance</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/master-of-science-in-information-systems/">Master of Science in Information Systems</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/master-of-science-in-information-systems-online">MSIS Online</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/phd-in-business-administration/">Ph.D.</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/executive-education/">Executive Education</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/certificates/">Certificates</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/online-courses">Online Courses</a> </li>
          </ul>
        </div>
        <!-- /.footer-section -->

        <div class="footer-section">
          <h5>Students</h5>
          <ul>
            <li> <a href="http://eccles.utah.edu/students/financial-aid-scholarships/">Financial Aid &amp; Scholarships</a> </li>
            <li> <a href="http://eccles.utah.edu/students/business-career-services/">Business Career Services</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/undergraduate/advising/">Advising</a> </li>
            <li> <a href="http://eccles.utah.edu//programs/undergraduate/business-tutoring-center">Tutoring</a> </li>
            <li> <a href="http://eccles.utah.edu/students/mentoring/">Mentoring</a> </li>
            <li> <a href="http://eccles.utah.edu/students/signature-experiences/">Signature Experiences</a> </li>
            <li> <a href="http://eccles.utah.edu/students/business-scholars/">Business Scholars</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/undergraduate/first-ascent-scholars/">First Ascent Scholars</a> </li>
            <li> <a href="http://eccles.utah.edu/students/innovation-scholars/">Innovation Scholars</a> </li>
            <li> <a href="http://eccles.utah.edu/programs/undergraduate/opportunity-scholars/">Opportunity Scholars</a> </li>
            <li> <a href="http://eccles.utah.edu/faculty-staff/institutes-centers/#A">Lassonde Entrepreneur Institute</a> </li>
            <li> <a href="http://eccles.utah.edu/students/clubs-organizations/">Clubs &amp; Organizations</a> </li>
            <li> <a href="http://eccles.utah.edu/students/military/">Military</a> </li>
            <li> <a href="https://orgsync.com/login/">OrgSync Login</a> </li>
          </ul>
        </div>
        <div class="footer-section">
          <h5>Faculty &amp; Staff</h5>
          <ul>
            <li> <a href="http://eccles.utah.edu/directory/">Directory</a> </li>
            <li> <a href="http://eccles.utah.edu/faculty-staff/academic-departments/">Academic Departments</a> </li>
            <li> <a href="http://eccles.utah.edu/faculty-staff/research/">Research</a> </li>
            <li> <a href="http://eccles.utah.edu/faculty-staff/institutes-centers/">Institutes &amp; Centers</a> </li>
            <li> <a href="http://eccles.utah.edu/faculty-staff/operational-departments/">Operational Departments</a> </li>
          </ul>
        </div>
        <!-- /.footer-section -->
      </div>




									<?php
									/**
									 * Render as many widget columns as have been chosen in Theme Options.
									 */
									?>
									<?php 
									/*changed 1 from 1 to 7 so for doesn't run*/
									for ( $i = 7; $i < 7; $i++ ) : ?>
										<?php if ( $i <= Avada()->settings->get( 'footer_widgets_columns' ) ) : ?>
											<div class="fusion-column<?php echo ( Avada()->settings->get( 'footer_widgets_columns' ) == $i ) ? ' fusion-column-last' : ''; ?> col-lg-<?php echo esc_attr( $column_width ); ?> col-md-<?php echo esc_attr( $column_width ); ?> col-sm-<?php echo esc_attr( $column_width ); ?>">
												<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 'avada-footer-widget-' . $i ) ) : ?>
													<?php
													/**
													 * All is good, dynamic_sidebar() already called the rendering.
													 */
													?>
												<?php endif; ?>
											</div>
										<?php endif; ?>
									<?php endfor; ?>

									<div class="fusion-clearfix"></div>
								</div> <!-- fusion-columns -->
							</div> <!-- fusion-row -->
						</footer> <!-- fusion-footer-widget-area -->
					<?php endif; // End footer wigets check. ?>

					<?php
					/**
					 * Check if the footer copyright area should be displayed.
					 */
					$display_copyright = get_post_meta( $c_page_id, 'pyre_display_copyright', true );
					?>
					<?php if ( ( Avada()->settings->get( 'footer_copyright' ) && 'no' !== $display_copyright ) || ( ! Avada()->settings->get( 'footer_copyright' ) && 'yes' === $display_copyright ) ) : ?>
						<?php $footer_copyright_center_class = ( Avada()->settings->get( 'footer_copyright_center_content' ) ) ? ' fusion-footer-copyright-center' : ''; ?>

						<footer id="footer" class="fusion-footer-copyright-area<?php echo esc_attr( $footer_copyright_center_class ); ?>">
							<div class="fusion-row">
								<div class="fusion-copyright-content">
									<?php
									/*Custom Footer*/
									?>
<div class="footer-bar">
		<div class="EcclesLogo"><img width="300px" src="http://eccles.utah.edu/wp-content/themes/uudesb/images/logo3.png"></div>
		<div class="shell clear">
			<div><ul class="eccles-links">
				<li class="first"><a href="http://www.business.utah.edu">David Eccles School of Business</a></li>
				<li>Spencer Fox Eccles Business Building,  1655 East Campus Center Drive,  Salt Lake City, Utah  84112-8939</li>
			</ul></div>
                        <div><ul class="uni-links">
                                <li class="first"><a rel="nofollow" href="tel:18015817676">801-581-7676</a></li>
                                <li><a rel="nofollow" href="http://eccles.utah.edu/contact">Contact</a></li>
                                <li><a rel="nofollow" href="http://eccles.utah.edu/directory">Eccles Directory</a></li>
                                <li><a rel="nofollow" href="http://cis.utah.edu">CIS</a></li>
                                <li><a rel="nofollow" href="http://www.umail.utah.edu/a-z/">UMail</a></li>
                                <li><a rel="nofollow" href="http://eccles.link/help">IT Support</a></li>
                                <li><a rel="nofollow" href="http://intranet.eccles.utah.edu">Intranet</a></li>
                        </ul></div>
			<div><ul class="uni-links" style="display: none !important">
				<li class="first">© <a href="http://www.utah.edu">University of Utah</a></li>
				<li><a href="http://www.utah.edu/a-z/">A - Z Index</a></li>
				<li><a href="http://people.utah.edu/uWho/basic.hml">U of U Directory</a></li>
				<li><a href="http://map.utah.edu/">Map</a></li>
				<li><a href="http://www.utah.edu/disclaimer/index.php">Disclaimer</a></li>
				<li><a href="http://www.utah.edu/privacy/">Privacy</a></li>
				<li><a href="http://www.utah.edu/nondiscrimination/">Nondiscrimination</a></li>
			</ul></div>
		</div>

	<div class="eccles-socials-wrapper">
		<ul>
						<li><a href="https://www.facebook.com/ubusiness" target="_blank"><span class="fa-stack fa-lg">
		<i class="fa fa-circle fa-stack-2x"></i>
		<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
		</span></a></li>
						<li><a href="https://twitter.com/UBusiness" target="_blank"><span class="fa-stack fa-lg">
		<i class="fa fa-circle fa-stack-2x"></i>
		<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
		</span></a></li>
						<li><a href="https://www.instagram.com/ubusiness/" target="_blank"><span class="fa-stack fa-lg">
		<i class="fa fa-circle fa-stack-2x"></i>
		<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
		</span></a></li>
						<li><a href="https://www.linkedin.com/edu/school?id=19557" target="_blank"><span class="fa-stack fa-lg">
		<i class="fa fa-circle fa-stack-2x"></i>
		<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
		</span></a></li>
						<li><a href="http://is.gd/ecclesgplus" target="_blank"><span class="fa-stack fa-lg">
		<i class="fa fa-circle fa-stack-2x"></i>
		<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
		</span></a></li>
						<li><a href="https://www.youtube.com/user/davidecclesbusiness" target="_blank"><span class="fa-stack fa-lg">
		<i class="fa fa-circle fa-stack-2x"></i>
		<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
		</span></a></li>
				</ul>
	</div>



	</div>
									
									
									<?php
									/**
									 * Footer Content (Copyright area) avada_footer_copyright_content hook.
									 *
									 * @hooked avada_render_footer_copyright_notice - 10 (outputs the HTML for the Theme Options footer copyright text)
									 * @hooked avada_render_footer_social_icons - 15 (outputs the HTML for the footer social icons)..
									 */
									//do_action( 'avada_footer_copyright_content' );
									?>

								</div> <!-- fusion-fusion-copyright-content -->
							</div> <!-- fusion-row -->
						</footer> <!-- #footer -->
					<?php endif; // End footer copyright area check. ?>
					<?php
					// Displays WPML language switcher inside footer if parallax effect is used.
					if ( defined( 'ICL_SITEPRESS_VERSION' ) && 'footer_parallax_effect' === Avada()->settings->get( 'footer_special_effects' ) ) {
						global $wpml_language_switcher;
						$slot = $wpml_language_switcher->get_slot( 'statics', 'footer' );
						if ( $slot->is_enabled() ) {
							echo $wpml_language_switcher->render( $slot ); // WPCS: XSS ok.
						}
					}
					?>
				</div> <!-- fusion-footer -->
			<?php endif; // End is not blank page check. ?>
		</div> <!-- wrapper -->




<div id="footer-container" class="clearfix">
         <footer class="wrapper clearfix">
         	 
                        <nav id="bottom-nav" role="navigation">
<ul class="menu">
<li>
<h3><a href="https://www.utah.edu/nondiscrimination/">Nondiscrimination &amp; Accessibility</a></h3>

</li>
<li>
<h3><a href="https://www.utah.edu/disclaimer/">Disclaimer</a></h3>

</li>
<li>
<h3><a href="https://www.utah.edu/a-z/">A-Z Index</a></h3>

</li>
<li>
<h3><a href="https://www.utah.edu/contact/">Contact - Feedback</a></h3>

</li>
</ul>
</nav>
         	 <section class="brand-area ">
            
               <div class="bottom-brand">
                  <div class="spacer"><a href="http://imagineu.utah.edu/"><img src="https://www.utah.edu/_images/imagine_u.png" alt="Imagine U: The University of Utah"></a>
</div>
               </div>
              
             
            </section>
             <section class="address">
                  <div class="spacer">
<p><a href="/">The University of Utah</a></p>
<p>201 Presidents Circle Salt Lake City, UT 84112</p>
<p>801-581-7200</p>
<p><small>© 2017 The University of Utah</small></p>

</div>
               </section>
   
           
         </footer>
      </div>




		<?php
		/**
		 * Check if boxed side header layout is used; if so close the #boxed-wrapper container.
		 */
		$page_bg_layout = ( $c_page_id ) ? get_post_meta( $c_page_id, 'pyre_page_bg_layout', true ) : 'default';
		?>
		<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'Top' !== Avada()->settings->get( 'header_position' ) ) : ?>
			</div> <!-- #boxed-wrapper -->
		<?php endif; ?>
		<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'framed' === Avada()->settings->get( 'scroll_offset' ) && 0 !== intval( Avada()->settings->get( 'margin_offset', 'top' ) ) ) : ?>
			<div class="fusion-top-frame"></div>
			<div class="fusion-bottom-frame"></div>
			<?php if ( 'None' !== Avada()->settings->get( 'boxed_modal_shadow' ) ) : ?>
				<div class="fusion-boxed-shadow"></div>
			<?php endif; ?>
		<?php endif; ?>
		<a class="fusion-one-page-text-link fusion-page-load-link"></a>

		<?php wp_footer(); ?>

		<?php
		/**
		 * Echo the scripts added to the "before </body>" field in Theme Options.
		 * The 'space_body' setting is not sanitized.
		 * In order to be able to take advantage of this,
		 * a user would have to gain access to the database
		 * in which case this is the least on your worries.
		 */
		echo Avada()->settings->get( 'space_body' ); // WPCS: XSS ok.
		?>
	</body>
</html>
