	<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword">This post is password protected. Enter the password to view any comments.</p>
	</div>
    <?php
	return;
	endif;
	?>
	<?php if(have_comments()): ?>
	<h2 id="comments-title">
    Comments:
    </h2>
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <nav id="comment-nav-above">
        <div class="nav-previous"><?php previous_comments_link('&larr; Older Comments'); ?></div>
        <div class="nav-next"><?php next_comments_link('Newer Comments &rarr;'); ?></div>
    </nav>
    <?php endif; ?>
    <ul class="comment-list">
    	<?php wp_list_comments('type=comment&callback=plain_simple_comment'); ?>
    </ul>
    <?php
	elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
    <p>Comments are closed.</p>
    <?php endif; ?>
	<?php comment_form(); ?>
	</div>