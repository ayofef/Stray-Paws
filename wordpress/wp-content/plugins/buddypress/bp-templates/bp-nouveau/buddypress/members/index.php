
<?php
/**
 * BuddyPress Members Directory
 *
 * @version 3.0.0
 */

?>

	<?php bp_nouveau_before_members_directory_content(); ?>


	<div id="main-box">
		<div class="alpha">
			<img src="<?php bloginfo('template_directory'); ?>/images/dog_caro/brown.jpg" alt="LULU">
			<div class="dog-caro-text">
				<h4 class="caro-name">Lulu</h4>
			<a href="http://localhost/wordpress/stray-paws/dogs/lulu/">View Profile</a>
		</div>
		</div>
		<div class="bravo">
			<img src="<?php bloginfo('template_directory'); ?>/images/dog_caro/twin.jpg" alt="BERT AND ERNIE">
			<div class="dog-caro-text">
			<h4 class="caro-name">Bert & Ernie</h4>
			<a href="http://localhost/wordpress/stray-paws/dogs/bert_ernie/" >View Profile</a>
		</div>
		</div>
		<div class="charlie">
			<img src="<?php bloginfo('template_directory'); ?>/images/dog_caro/casey.jpg" alt="CASEY">
			<div class="dog-caro-text">
			<h4 class="caro-name">Casey</h4>
			<a href="http://localhost/wordpress/stray-paws/dogs/casey/" >View Profile</a>
		</div>
		</div>
	</div>
<div class="paged">
	<div class="screen-content">
		<div id="dog-text-members">
		<h2>Dogs</h2>
	<?php bp_get_template_part( 'common/search-and-filters-bar' );  ?>
</div>

		<div id="members-dir-list" class="members dir-list" data-bp-list="members">
			<div id="bp-ajax-loader"><?php bp_nouveau_user_feedback( 'directory-members-loading' ); ?></div>
		</div><!-- #members-dir-list -->

		<?php bp_nouveau_after_members_directory_content(); ?>
	</div><!-- // .screen-content -->
</div>
