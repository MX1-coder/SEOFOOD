<?php
/**
 * The sidebar containing the main widget area
 *
 */

if ( bubulla_is_wc('woocommerce') || bubulla_is_wc('shop') || bubulla_is_wc('product') ) : ?>
			<?php 
				$bubulla_sidebar = bubulla_get_wc_sidebar_pos();
			?>
			<?php if ( is_active_sidebar( 'sidebar-wc' ) AND !empty( $bubulla_sidebar ) ): ?>
			<?php if ( $bubulla_sidebar == 'left' ): ?>
			<div class="col-xl-3 col-lg-4 col-md-12 col-xs-12 div-sidebar matchHeight" >
			<?php else: ?>
			<div class="col-xl-3 col-lg-4 col-md-12 col-xs-12 div-sidebar matchHeight" >
			<?php endif; ?>
				<div id="content-sidebar" class="content-sidebar woocommerce-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-wc' ); ?>
					<span class="lte-sidebar-close"></span>
				</div>
				<span class="lte-sidebar-filter"></span>
				<span class="lte-sidebar-overlay"></span>					
			</div>
			<?php endif; ?>
		</div>
	</div>
<?php elseif ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12 div-sidebar" >
		<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<span class="lte-sidebar-close"></span>
		</div>
				<span class="lte-sidebar-filter"></span>
				<span class="lte-sidebar-overlay"></span>			
	</div>
<?php endif; ?>
