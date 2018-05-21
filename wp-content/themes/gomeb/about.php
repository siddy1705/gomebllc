<!-- about -->
<?php
$gomeb_about_ID = 69;
$gomeb_about = get_post($gomeb_about_ID);
$gomeb_about_title = $gomeb_about->post_title;
$gomeb_about_content = $gomeb_about->post_content;
$gomeb_about_image = get_the_post_thumbnail_url( $gomeb_about_ID );
$gomeb_about_short = get_post_meta( $gomeb_about_ID, 'about-short', true );
?>

<div class="line">
</div>
	<div class="about" id="about">
		<div class="container">
			<div class="w3ls-heading">
				<h3>About</h3>
			</div>
			<div class="col-md-6 about-left">
				<div class="w3labout-img boxw3-agile"> 
					<img src="<?php echo esc_url( $gomeb_about_image ); ?>" alt="" class="img-responsive" />
				</div>
			</div>
			<div class="col-md-6 about-right">
				<h2><?php echo $gomeb_about_title; ?></h2>
				<?php echo $gomeb_about_short; ?>
				<a href="#myModal" class="w3more" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Read more</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //about -->

<!-- modal --><!-- for pop up -->
<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="span2" aria-hidden="true">&times;</span></button>						
				<h4 class="modal-title"><?php echo $gomeb_about_title; ?></h4>
			</div> 
		<div class="modal-body">
			<div class="agileits-w3layouts-info">
				<!-- <img src="images/about.jpg" alt="" /> -->
				<?php echo $gomeb_about_content; ?>
			</div>
		</div>
		</div>
	</div>
</div>
<!-- //modal --><!-- //for pop up -->