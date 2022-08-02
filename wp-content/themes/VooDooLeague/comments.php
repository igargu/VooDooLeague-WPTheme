<?php
    comment_form();
    
    $num_comments = get_comments_number($post->ID);
    if ($num_comments == 0) {
?>

        <br/><br/>
        <h3>No one has commented on this post yet</h3>

<?php
    } else {
?>

        <br/><br/>
        <h3>Comments</h3>

<?php
        wp_list_comments();
    }
?>