<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

$responsive_options = responsive_get_options();
//test for first install no database
$db = get_option( 'responsive_theme_options' );

?>

<div id="featured" class="grid col-940">

	<div id="featured-content" class="grid col-460">

                <?php
		echo do_shortcode( wpautop( $responsive_options['home_content_area'] ) );
                ?>

	</div><!-- end of .col-460 -->

	<div id="featured-image" class="grid col-460 fit">

		<?php $featured_content = ( !empty( $responsive_options['featured_content'] ) ) ? $responsive_options['featured_content'] : '<img class="aligncenter" src="/ekp/wp-content/themes/responsive-ekp/images/eliot-440.jpg" width="440" alt="" />'; ?>

		<?php echo do_shortcode( wpautop( $featured_content ) ); ?>

	</div><!-- end of #featured-image -->

</div><!-- end of #featured -->
