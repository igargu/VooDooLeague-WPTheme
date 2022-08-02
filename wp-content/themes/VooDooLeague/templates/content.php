<?php
    
    global $PostImg;
    
?>

<article class="blog_item">
    <div class="blog_item_img">
        <span class="dashicons dashicons-admin-users"></span>Author: <?php the_author_posts_link() ?>&nbsp;&nbsp;&nbsp;<span class="dashicons dashicons-calendar-alt"></span>Date: <?php the_time('j M Y'); ?>&nbsp;&nbsp;&nbsp;<span class="dashicons dashicons-category"></span>Category: <?php the_category( ', ' ); ?>
        <?php 
            if (has_post_thumbnail()) { // Devuelve true si hay imagen representativa, false si no hay
                $PostImg = get_the_post_thumbnail_url();
            } else {
                //$PostImg = get_template_directory_url().'/img/post/VooDoo_logo.jpg';
            }
        ?>
        <br/><br/>
        <img class="card-img rounded-0" src="<?php echo $PostImg; ?>" alt="<?php the_title(); ?>" >
    </div>

    <div class="blog_details">
        <a class="d-inline-block" href="single-blog.html">
            <h2><a href=<?php the_permalink(); ?>><?php echo the_title(); ?></a></h2>
        </a>
        <p><?php the_excerpt(); ?></p>
    </div>
</article>
<br/>