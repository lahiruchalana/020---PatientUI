<?php
$featured_post = get_field('featured_post');
if( $featured_post ): ?>
    <h3><?php echo esc_html( $featured_post->post_title ); ?></h3>
<?php endif; ?>