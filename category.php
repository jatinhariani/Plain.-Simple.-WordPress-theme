<?php get_header(); ?>
        <div id="main">
        	<div id="content" class="c8">
            	<?php if(have_posts()) : ?>
                <header class="page-header">
                	<h1>
                    	Archives for the category '<?php single_cat_title(); ?>':
                    </h1>
                </header>
                <?php while(have_posts()) : ?>
                <?php the_post(); ?>
            	<?php get_template_part('article'); ?>
                <?php endwhile; ?>
                <?php get_template_part('page-navigation'); ?>
                <?php else:
				get_template_part('article-notfound'); ?>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
            <div class="clear"></div>
        </div>
<?php get_footer(); ?>