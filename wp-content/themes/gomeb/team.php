<!-- team -->	<!-- Our specialists -->
		<div class="line">
		</div>
	<div class="team" id="team">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Meet Our Specialists</h3>
			</div>
			<div class="agile_team_grids">

				<?php
				$args = array( 'posts_per_page' => -1, 'category' => 4 );

				$gomeb_team = get_posts( $args );

				foreach ( $gomeb_team as $single_member ) :  
					$single_member_img = get_the_post_thumbnail_url( $single_member->ID );
					$single_member_twitter = get_post_meta( $single_member->ID, 'twitter', true );
					$single_member_facebook = get_post_meta( $single_member->ID, 'facebook', true );
					$single_member_instagram = get_post_meta( $single_member->ID, 'instagram', true );
					$single_member_linkedin = get_post_meta( $single_member->ID, 'linkedin', true );
				?>
				<div class="col-md-3 agile_team_grid  agile_team_gridf">
					<div class="agile_team_grid_main">
						<img src="<?php echo esc_url($single_member_img); ?>" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="<?php echo $single_member_twitter; ?>" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
								<li><a href="<?php echo $single_member_facebook; ?>" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="<?php echo $single_member_instagram; ?>" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="<?php echo $single_member_linkedin; ?>" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h4><?php echo $single_member->post_title; ?></h4>
						<p><?php echo $single_member->post_content;  ?> </p>
					</div>
				</div>
				<?php endforeach; ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->	<!-- //Our specialists -->