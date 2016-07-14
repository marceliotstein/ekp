<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Post Data Template-Part File
 *
 * @file           post-data.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.1.0
 * @filesource     wp-content/themes/responsive/post-data.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */
?>

<?php if ( !is_page() && !is_search() ) { ?>

        <div class="post-meta">
          <?php
             $byline = get_post_meta(get_the_ID(),'Byline');
             if (!empty($byline) && (!empty($byline[0]))) {
               print $byline[0];
             }
            ?>
          </div>
	<div class="post-data">
	  <?php
            $orig_date = get_post_meta(get_the_ID(),'Original Date');
            print $orig_date[0];
          ?>
	  <?php //printf( __( 'Posted in %s', 'responsive' ), get_the_category_list( ', ' ) ); ?>
	  <?php //the_tags( __( 'Tagged with:', 'responsive' ) . ' ', ', ', '<br />' ); ?>
	</div><!-- end of .post-data -->

<?php } ?>

<div class="post-edit"><?php edit_post_link( __( 'Edit', 'responsive' ) ); ?></div>
