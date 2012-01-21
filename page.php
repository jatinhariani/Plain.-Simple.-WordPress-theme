<?php get_header(); ?>
        <div id="main">
        	<div id="content" class="c8">
            	<?php if(have_posts()) : ?>
                <?php while(have_posts()) : ?>
                <?php the_post(); ?>
            	<?php get_template_part('article'); ?>
                <?php endwhile; ?>
                <?php comments_template(); ?>
                <?php else:
				?>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
            <div class="clear"></div>
        </div>
<?php get_footer(); ?>