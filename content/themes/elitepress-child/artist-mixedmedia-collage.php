<?php
/* Template Name: artist mixed_mediacollage */
get_header();
?>
<div class="content-section">
	<div class="container">
		<div class="title-section">
			<div class="row">
				<div class="col-md-12">
					<h2>Mixed Media and Collage</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php echo do_shortcode('[mpp-list-gallery component=groups component_id=6 view="grid"]'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
