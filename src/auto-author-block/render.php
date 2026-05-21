
<div <?php echo get_block_wrapper_attributes(); ?>>


<?php

    $author_id     = get_the_author_meta('ID');
    $author_name   = get_the_author_meta('display_name');
    $author_bio    = get_the_author_meta('description');
    $author_avatar = get_avatar($author_id, 96);

?>


<div class="author-profile-card">


	<div class="author-avatar">
		<?php echo $author_avatar; ?>
	</div>

	<div class="author-info">
		<h3 class="author-name">
			<?php echo esc_html($author_name); ?>
		</h3>
		<p class="author-bio">
			<?php if (! empty($author_bio)) {
                    echo esc_html($author_bio);
                } else {
                    echo "This author has not written a biography yet";
                }

            ?>
		</p>
	</div>

</div>
</div>