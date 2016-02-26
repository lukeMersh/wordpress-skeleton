<?php
// Exit if the file is accessed directly over web
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 
 * Photo list in shortcode grid view
 * You can override it in yourtheme/mediapress/default/shortcodes/grid-photo.php
 * 
 */
$query = mpp_shortcode_get_media_data( 'query' );
?>
<?php if ( $query->have_media() ) : ?>
	<div class="mpp-container mpp-shortcode-wrapper mpp-shortcode-media-list-wrapper">
		<div class="mpp-g mpp-item-list mpp-media-list mpp-shortcode-item-list mpp-shortcode-list-media mpp-shortcode-list-media-photo "> 

			<?php while ( $query->have_media() ): $query->the_media(); ?>

				<div class="mpp-u <?php mpp_media_class( mpp_get_grid_column_class( mpp_shortcode_get_media_data( 'column' ) ) ); ?>">

					<?php do_action( 'mpp_before_media_shortcode_item' ); ?>
					
					<div class="mpp-item-meta mpp-media-meta mpp-media-shortcode-item-meta mpp-media-meta-top mpp-media-shortcode-item-meta-top">
						<?php do_action( 'mpp_media_shortcode_item_meta_top' );?>
					</div>	
					
					<div class='mpp-item-entry mpp-media-entry mpp-photo-entry'>

						<a href="<?php mpp_media_permalink(); ?>" <?php mpp_media_html_attributes( array( 'class' => "mpp-item-thumbnail mpp-media-thumbnail mpp-photo-thumbnail", 'data-mpp-context' => 'shortcode' ) ); ?>>

							<img src="<?php mpp_media_src( 'thumbnail' ); ?>" alt="<?php echo esc_attr( mpp_get_media_title() ); ?> "/>
						</a>

					</div>		

					<a href="<?php mpp_media_permalink(); ?>" <?php mpp_media_html_attributes( array( 'class' => "mpp-item-title mpp-media-title mpp-photo-title", 'data-mpp-context' => 'shortcode' ) ); ?> >
						<?php mpp_media_title(); ?>
					</a>
					<div class="mpp-item-actions mpp-media-actions mpp-photo-actions">
						<?php mpp_media_action_links(); ?>
					</div>
					
					<div class="mpp-item-meta mpp-media-meta mpp-media-shortcode-item-meta mpp-media-meta-bottom mpp-media-shortcode-item-meta-bottom">
						<?php do_action( 'mpp_media_shortcode_item_meta' );?>
					</div>	

					<?php do_action( 'mpp_after_media_shortcode_item' ); ?>	

				</div>

			<?php endwhile; ?>
		</div>
	</div>
	<?php mpp_reset_media_data(); ?>
<?php endif; ?>