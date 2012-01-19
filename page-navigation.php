				<nav id="page-nav">
					<?php if ( get_next_posts_link() ) : ?>
    	                <div class="older page-nav-item"><?php next_posts_link('Older Posts'); ?></div>
                    <?php endif; ?>
                    <?php if ( get_previous_posts_link() ) : ?>
	                    <div class="newer page-nav-item"><?php previous_posts_link( 'Newer Posts'); ?></div>
                    <?php endif; ?>
                    <div class="clear"></div>
           		</nav>