<?php
    get_header();
    the_post();
    $post_id = $post->ID;
    add_num_visits($post_id);
    
    //Conseguir el array con todas las categorías del post
    $cats = wp_get_post_categories($post->ID);
?>
    
   <header class="main_menu single_page_menu menu_fixed animated faceInDown">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <?php get_template_part('nav'); ?>
            </div>
         </div>
      </div>
   </header>
    
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner text-center">
                  <div class="breadcrumb_iner_item">
                     <h3><?php the_title(); ?></h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
    
   <br/>
   
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="progress-table">
                  <br><br>
                  <div class="table-head">
                     <div class="col-6 col-md-4">Author</div>
                     <div class="col-6 col-md-4">Date</div>
                     <div class="col-6 col-md-4">Category</div>
                  </div>
                  <div class="table-row">
           			   <div class="col-6 col-md-4"><?php the_author_posts_link() ?></div>
           			   <div class="col-6 col-md-4"><?php the_time('j M Y') ?></div>
           			   <div class="col-6 col-md-4"><?php the_category() ?></div>
           		   </div>
               </div>
               <div class="single-post">
                  <br/>
                  <?php the_content() ?>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <div class="my-2 my-sm-0">
                        <p class="comment-count">
                           <p class="dashicons dashicons-visibility"></p><?php echo get_num_visits($post_id) ?>&nbsp;&nbsp;&nbsp;<p class="dashicons dashicons-admin-comments"></p><?php comments_number('0 comments', '1 comments', '% comments') ?>
                        </p>
                     </div>
                  </div>
                  <div class="navigation-area">
                     <h4>Related posts</h4>
                     <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="row justify-content-center">
                              <?php
                                 $args = array(
                                               'posts_per_page' => 3,
                                               'post__not_in' => array($post_id),
                                               'category__in' => $cats,
                                               );
                                 $related = new WP_Query($args);
                                 if($related->have_posts()):
                                    while($related->have_posts()):
                                       $related->the_post();
                              ?>
                              <div class="col-lg-4 col-sm-6">
                                 <div class="blog_left_sidebar">
                                    <article class="blog_item">
                                       <div class="blog_item_img">
                                          <?php 
                                             if (has_post_thumbnail()) { // Devuelve true si hay imagen representativa, false si no hay
                                                $PostImg = get_the_post_thumbnail_url();
                                             } else {
                                                $PostImg = get_template_directory_url().'/img/post/VooDoo_logo.jpg';
                                             }
                                          ?>
                                          <img class="card-img rounded-0" src="<?php echo $PostImg; ?>" alt="<?php the_title(); ?>">
                                       </div>
                                       <div class="blog_details">
                                          <a class="d-inline-block" href="single-blog.html">
                                             <h5><a href=<?php the_permalink(); ?>><?php echo the_title(); ?></a></h5>
                                          </a>
                                          <?php the_excerpt(); ?>
                                       </div>
                                    </article>
                                 </div>
                              </div>
                              <?php
                                    endwhile;
                                 else:
                                     echo "No posts published yet";
                                 endif;
                                 wp_reset_postdata();
                              ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br/>
                  <?php comments_template(); ?>
               </div>
            </div>
            <?php get_sidebar('simple'); ?>
         </div>
      </div>
   </section>
   
<?php
    get_footer();
?>



