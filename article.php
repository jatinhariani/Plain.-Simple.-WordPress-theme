				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-meta">
                    	by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> on <a href="<?php the_permalink(); ?>"><?php the_date(); ?></a> in <?php the_category(', '); ?>
                    </div>
                    <div class="entry-content">
                    	<?php the_content('Read More'); ?>
                        <div class="clear"></div>
                    </div>
                    <?php if(is_single()) : ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'j_framework' ), 'after' => '</div>' ) ); ?>
                    <?php
					$tag_list=get_the_tag_list('', ', ');
					if($tag_list!='') :
					?>
                    <div class="entry-tags">
                        <p>Tagged: <?php the_tags('',', '); ?>
                    </div>
                    <?php endif; ?>
                    <?php endif; ?>
                </article>