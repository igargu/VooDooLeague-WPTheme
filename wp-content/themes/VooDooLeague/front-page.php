    
    <?php 
        get_header();
    ?>
    
    <div class="body_bg">

        <header class="main_menu single_page_menu menu_fixed animated faceInDown">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <?php get_template_part('nav'); ?>
                    </div>
                </div>
            </div>
        </header>

        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-8">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h1>VooDoo Virtual Reality is here</h1>
                                <p>Discover a new way to defend the nexus with your cards and the new virtual reality technology designed by Saimov</p>
                                <a href="#" class="btn_1">Watch the trailer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="client_logo">
            <div class="container">
                <h1>Meet our sponsors</h1>
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="client_logo_slider owl-carousel d-flex justify-content-between">
                            <div class="single_client_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/client_logo/client_logo_1.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/client_logo/client_logo_2.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/client_logo/client_logo_3.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/client_logo/client_logo_4.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/client_logo/client_logo_5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="about_us section_padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-6 col-xl-6">
                        <div class="learning_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/about_img.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <div class="about_us_text">
                            <h2>Discover the news in our blog</h2>
                            <p>We publish posts daily, do not forget to add us to your favorites section!</p>
                            <a href="<?php echo get_page_link(get_page_by_title('Blog')->ID)?>" class="btn_1">Go to our blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="Latest_War">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section_tittle text-center">
                            <h2>Duels of the week</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="latest_war_list">
                            <div class="single_war_text">
                                <div class="war_text_item d-flex justify-content-around align-items-center">
                                    <h2><span class="dashicons dashicons-admin-users"></span>David Moore</h2>
                                    <h1>4-1</h1>
                                    <h2>Steve Mignola<span class="dashicons dashicons-admin-users"></span></h2>
                                </div>
                            </div>
                            <div class="single_war_text">
                                <div class="war_text_item d-flex justify-content-around align-items-center">
                                    <h2><span class="dashicons dashicons-admin-users"></span>Rumiko Obata</h2>
                                    <h1>2-2</h1>
                                    <h2>Kazue Akutami<span class="dashicons dashicons-admin-users"></span></h2>
                                </div>
                            </div>
                            <div class="single_war_text">
                                <div class="war_text_item d-flex justify-content-around align-items-center">
                                    <h2><span class="dashicons dashicons-admin-users"></span>Brent Fang</h2>
                                    <h1>3-4</h1>
                                    <h2>Albert Pike<span class="dashicons dashicons-admin-users"></span></h2>
                                </div>
                            </div>
                            <div class="single_war_text">
                                <div class="war_text_item d-flex justify-content-around align-items-center">
                                    <h2><span class="dashicons dashicons-admin-users"></span>John López</h2>
                                    <h1>1-0</h1>
                                    <h2>Mike Kane<span class="dashicons dashicons-admin-users"></span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="Latest_War_text Latest_War_bg_1">
                            <div class="text-center">
                                <br/><br/>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/favicon.png" alt="">
                                <h1><u class="home_u_label">Star Duel</u></h1>
                                <br/>
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/war_logo_1.png" alt="">
                                    <h1 class="home_star_duel">Ken Waraxe</h1>
                                    <h1 class="home_star_duel">2-3</h1>
                                    <h1 class="home_star_duel">Tim Fighter</h1>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/war_logo_2.png" alt="">
                                </div>
                            </div>
                            <a href="#" class="btn_2">See the highlights</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="gallery_part section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="section_tittle text-center">
                            <h2>Last cards</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="gallery_part_item">
                            <div class="grid" style="position: relative; height: 1150px;">
                                <div class="grid-sizer"></div>
                                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_1.png"
                                    class="grid-item bg_img img-gal grid-item--height-1"
                                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_1.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <h1 class="dashicons dashicons-search"></h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_2.png" class="grid-item bg_img img-gal"
                                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_2.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <h1 class="dashicons dashicons-search"></h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_3.png" class="grid-item bg_img img-gal"
                                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_3.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <h1 class="dashicons dashicons-search"></h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_5.png"
                                    class="grid-item bg_img img-gal grid-item--height-2"
                                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_5.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <h1 class="dashicons dashicons-search"></h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_7.png"
                                    class="grid-item bg_img img-gal grid-item--height-2"
                                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_7.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <h1 class="dashicons dashicons-search"></h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_6.png"
                                    class="grid-item bg_img img-gal grid-item--width-1"
                                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_6.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <h1 class="dashicons dashicons-search"></h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_4.png"
                                    class="grid-item bg_img img-gal sm_weight  grid-item--height-1"
                                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/gallery_item_4.png')">
                                    <div class="single_gallery_item">
                                        <div class="single_gallery_item_iner">
                                            <div class="gallery_item_text">
                                                <h1 class="dashicons dashicons-search"></h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="upcomming_war">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section_tittle text-center">
                            <h2>Upcoming card</h2>
                        </div>
                    </div>
                </div>
                <div class="upcomming_war_iner">
                    <div class="text-center">
                        <br/><br/><br/><br/><br/><br/><br/>
                        <h1>Desert Dragon</h1>
                        <h2>3 days left</h2>
                    </div>
                </div>
            </div>
        </section>
        <br/>
        </section>
        
        <br/><br/>
        
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_tittle text-center">
                            <h2>Last posts</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php
                        $args = array('posts_per_page'=>3,);
                        $custom_query = new WP_Query($args);
                        if($custom_query->have_posts()):
                            while($custom_query->have_posts()):
                                $custom_query->the_post();
                    ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <p class="last_posts_home">Author: <?php the_author_posts_link() ?> | Date: <?php the_time('j M Y'); ?></p>
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
                                        <h2><a href=<?php the_permalink(); ?>><?php echo the_title(); ?></a></h2>
                                    </a>
                                    <p><?php the_excerpt(); ?></p>
                                    <p><?php the_category(); ?></p>
                                    <p><?php comments_number('0 comments', '1 comments', '% comments');?></p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <?php
                            endwhile;
                        else:
                            echo "No posts published yet";
                        endif;
                    ?>
                </div>
            </div>
        </section>
        
        <br/>
        
    <?php 
        get_footer();
    ?>