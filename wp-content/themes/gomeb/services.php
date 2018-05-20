<!-- tabs -->	<!-- services -->
<div class="line">
</div>
<div class="demo" id="services">    
<div class="container">
	<div class="w3ls-heading">
					<h3>What We Do</h3>
				</div>
	<div class="row">
	<ul>
		<?php
		$args = array( 'posts_per_page' => -1, 'category' => 3 );

		$gomeb_services = get_posts( $args );

		foreach ( $gomeb_services as $single_service ) :  
			$gomeb_service_img = get_the_post_thumbnail_url( $single_service->ID );
			$gomeb_service_icon = get_post_meta( $single_service->ID, 'icon', true );
			$gomeb_service_modal = get_post_meta( $single_service->ID, 'modal', true );
		?>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 Services-tab  item">
			<a href="#<?php echo $single_service->post_name; ?>" class="service-modal" data-toggle="modal"><div class="folded-corner service_tab_1">
				<div class="text">
					<i class="fa <?php echo $gomeb_service_icon; ?> fa-5x fa-icon-image"></i>
						<p class=""><p><h3 class="service-title"><?php echo $single_service->post_title; ?></h3></p></p><!-- /.item-title -->
					<p><?php echo substr($single_service->post_content,0,200 );  ?>	</div>
			</div></a>
	    </div>

		<!-- modal --><!-- for pop up -->
		<div class="modal about-modal fade" id="<?php echo $single_service->post_name; ?>" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header"> 
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="span2" aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title"><?php echo $single_service->post_title; ?></h4>
					</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="<?php echo esc_url($gomeb_service_img); ?>" alt="" />
						<p><?php echo $single_service->post_content;  ?> </p>
					</div>
				</div>
				</div>
			</div>
		</div>
		<!-- //modal --><!-- //for pop up -->


	<?php endforeach; ?>
	   </ul>
	</div>
</div>
</div>
<!-- //tabs -->    <!-- services -->

