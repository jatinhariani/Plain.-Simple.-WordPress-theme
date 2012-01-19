<?php

add_theme_support( 'automatic-feed-links' );
if(!isset($content_width))
{
	$content_width=770;
}

if ( is_singular() ) wp_enqueue_script( "comment-reply" );

register_nav_menu('primary-menu', 'Primary Menu');

register_sidebar(
array(
'name'=>__('Sidebar 1','j_framework'),
'id'=>'sidebar-1',
'description'=>'Sidebar for the WordPress theme',
'before_widget'=>'<aside id="%1$s" class="widget %2$s">',
'after_widget'=>"</aside>",
'before_title'=>'<h2 class="widget-title">',
'after_title'=>'</h2>'
));
?>

<?php
function plain_simple_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
     <div class="avatar-container">
         <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
	</div>
    <div class="comment-container">
      <div class="comment-author vcard">
         <?php printf('<cite class="fn">%s</cite> <span class="says">says:</span>', get_comment_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em class="comment-moderation">Your comment is awaiting moderation.</em>
         <br />
      <?php endif; ?>
      <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf('%1$s at %2$s', get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link('(Edit)','  ','') ?></div>

      <?php comment_text(); ?>

      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
      </div>
     </div>
<?php
        }
?>