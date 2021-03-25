<?php 
//Get only the approved comments
$args = array(
    'status' => 'approve',
    'post_id' => get_the_ID();
);
 
// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
 
// Comment Loop
if ( $comments ) {
 foreach ( $comments as $comment ) {
  echo '<p>' . $comment->comment_content . '</p>';
 }
} else {
 echo 'No comments found.';
}