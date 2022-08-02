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
                     <h2><?php the_title(); ?></h2>
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
                  <?php do_shortcode('[vl_show_fields_single id="'.$post->ID.'"]'); ?>
               </div>
               <div class="single-post">
                  <br/>
                  <?php the_content() ?>
               </div>
               <div class="navigation-top">
                  <div class="navigation-area">
                     <h4>More packs</h4>
                     <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="row justify-content-center">
                              <?php
                                 $args = array(
                                               'posts_per_page' => 3,
                                               'post__not_in' => array($post_id),
                                               'post_type'=>array('vl_projects'),
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
                                          <p><b>Type:</b> <?php echo get_post_meta($post->ID, 'vl_type', true); ?></p>
                                          <p><b>Level:</b> <?php echo get_post_meta($post->ID, 'vl_level', true); ?></p>
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
               </div>
            </div>
            <?php get_sidebar('simple'); ?>
         </div>
      </div>
   </section>
   
<?php
    get_footer();
?>



