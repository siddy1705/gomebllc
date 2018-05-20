<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 

?>

			<div class="w3l_banner_info">
				<div class="col-md-5 banner-form-agileinfo">
					<img src="images/medical.png" alt="" />
				</div>
				<div class="col-md-7 slider">
					<div class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="slider_banner_info">
											 <h4>WE make healthy</h4>
											<p>Medical school education and post graduate education empha -size thoroughness.The good physician treats the disease, great physician treats the patient who has the disease.</p>
										</div>

									</li>
									<li>
										<div class="slider_banner_info">
											<h4>Medicine is a science</h4>
											<p>The best doctor is the one you run to and can't find.We should be concerned not only about the health of individual patients, but also the health of our entire society.</p>
										</div>

									</li>
									<li>
										<div class="slider_banner_info">
											<h4>Nothing cures health</h4>
											<p>Never go to a doctor whose office plants have died.You know what they call the fellow who finishes last in his medical school graduating class? They call him 'Doctor. </p>
										</div>

									</li>
									<li>
										<div class="slider_banner_info">
											<h4>We do best treatment</h4>
											<p>Time is generally the best doctor.so well choose your best doctor before time lossesThe art of medicine consists in amusing the patient while nature cures the disease.</p>
										</div>

									</li>
								</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			<!--//Slider-->
			
			</div>
		<!--//banner-->
		
	</div>	
	<!-- //banner --> 

<?php get_template_part( 'about' ); ?>

<?php get_template_part( 'services' ); ?>

<?php get_template_part( 'team' ); ?>
	
<?php get_template_part( 'testimonials' ); ?>

<?php //get_template_part( 'blog' ); ?>

<?php get_template_part( 'contact' ); ?>

<?php get_footer(); ?>
