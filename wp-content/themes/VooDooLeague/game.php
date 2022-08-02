<?php 
    
    /*
        TEMPLATE NAME: Game
    */
    
?>

<?php
    get_header();
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
                            <h2>Game</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <h1 class="game_title">Choose your cards:</h1>
                        <br/><br/><br/>
                        <div class="container">
                            <div class="row">
                            
                                <!-- Loop-->
                     
                                <?php
                                    //$paged = get_query_var('paged') > 1 ? get_query_var('paged') : 1;
                                    $args = array(
                                        'posts_per_page'=> 4, // Post por página
                                        'post_type'=>array('vl_projects'), // Obtenemos los cpt
                                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                                    );
                                    $custom = new WP_Query($args);
                                    if ($custom->have_posts()):
                                        while($custom->have_posts()):
                                            $custom->the_post();
                                ?>
                            
                                <div class="col-md-5 archives_container">
                                    <div id="sidebar_section3" class="widget widget-wrap fl-wrap single-side-bar widget_nastik_user_details">
                                        <div class="typography">
                                            <?php do_shortcode('[vl_show_fields id="'.$post->ID.'"]'); ?>
                                            <br/>
                                            <div class="game_product_title">
                                                <h5><a href=<?php the_permalink(); ?>><?php echo get_the_title(); ?></a></h5>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="widget-container fl-wrap">
                                            <div class="about-widget fl-wrap">
                                                <?php 
                                                    if (has_post_thumbnail()) { // Devuelve true si hay imagen representativa, false si no hay
                                                        $PostImg = get_the_post_thumbnail_url();
                                                    } else {
                                                        //PostImg = get_template_directory_url().'/img/post/VooDoo_logo.jpg';
                                                    }
                                                ?>
                                                <img class="card-img rounded-0" src="<?php echo $PostImg; ?>" alt="<?php the_title(); ?>" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <?php
                                        endwhile;
                                    else:
                                        echo "No  published yet";
                                    endif;
                                    wp_reset_query();
                                ?>
            
                                <!-- fin loop -->
                                
                            </div>
                        </div>
    
            
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <?php 
                                        $p = 9999999999;
                                        echo paginate_links(array(
                                                'prev_text' => '<span class= "dashicons dashicons-arrow-left-alt2"></span>',
                                                'next_text' => '<span class= "dashicons dashicons-arrow-right-alt2"></span>',
                                                'base' => str_replace($p, '%#%', get_pagenum_link($p)),
                                                'format' => '?paged=%#%',
                                                'current' => max(1, get_query_var('paged')),
                                                'total' => $custom->max_num_pages,
                                            )
                                        );
                                    ?>
                                </li>
                            </ul>
                        </nav>
            
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    
    
<?php
    get_footer();
?>