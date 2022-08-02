<?php
    get_header();
    
    global $PostImg; // Hacemos la variable global
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
                            <h2>Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <br/>
    
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <div class="featured_post">
                            <h2><b>Featured post</b></h2>
                            <br/>
                            <!-- Primer loop-->
                    
                            <?php 
                                $args = array(
                                    'posts_per_page'=>1, // Post por página
                                    'post_type' => array('post'),
                                    // Excluir los post-formats del bucle del post destacado
                                    'tax_query' => array( // Accedemos a la taxonomía de WP en la consulta principal de WP, tiene un array de arrays de args como
                                        array(
                                            'taxonomy' => 'post_format', // Por qué concepto vamos a buscar
                                            'field' => 'slug', // En qué campo del post me voy a basar para buscar
                                            'terms' => array( // Qué términos vamos a manejar -> los slugs de cada uno de los post-formats que queremos excluir
                                                'post-format-gallery',
                                                'post-format-audio',
                                                'post-format-video',
                                                'post-format-quote',
                                                'post-format-link',
                                                'post-format-image',
                                            ),
                                            'operator' => 'NOT IN', // Qué vamos hacer con ellos -> EXCLUIRLOS
                                        ),
                                    ),
                                );
                                $destacado = new WP_Query($args);
                                if ($destacado->have_posts()):
                                    while($destacado->have_posts()):
                                        $destacado->the_post();
                                        $post_destacado_id = $post->ID;
                            ?>
                            
                            <?php
                                
                                get_template_part('templates/content', get_post_format());
                            
                            ?>
                            
                            <?php
                                    endwhile;
                                else:
                                    echo "No posts published yet";
                                endif;
                                wp_reset_postdata();
                            ?>
                
                            <!-- fin primer loop -->
                        </div>
                        <br/><br/>
                        <!-- Segundo loop -->
            
                        <?php
                            $paged = get_query_var('paged') > 1 ? get_query_var('paged') : 1;
                            $args = array('posts_per_page'=>3,
                                          'paged' => $paged,
                                          'post_type' => array('post'),
                                          'post__not_in'=>array($post_destacado_id),
                                        );
                            $my_query = new WP_Query($args);
                            if ($my_query->have_posts()):
                                while($my_query->have_posts()):
                                    $my_query->the_post();
                        ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <div blog_post_details>
                                    <span class="dashicons dashicons-admin-users"></span>Author: <?php the_author_posts_link() ?>&nbsp;&nbsp;&nbsp;<span class="dashicons dashicons-calendar-alt"></span>Date: <?php the_time('j M Y'); ?>&nbsp;&nbsp;&nbsp;<span class="dashicons dashicons-category"></span>Category: <?php the_category( ', ' ); ?>
                                </div>
                                <br/>
                                <?php 
                                    if (has_post_thumbnail()) { // Devuelve true si hay imagen representativa, false si no hay
                                        $PostImg = get_the_post_thumbnail_url();
                                    } else {
                                        $PostImg = get_template_directory_url().'/img/post/VooDoo_logo.jpg';
                                    }
                                ?>
                                <img src="<?php echo $PostImg; ?>" alt="<?php the_title(); ?>" >
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2><a href=<?php the_permalink(); ?>><?php echo the_title(); ?></a></h2>
                                </a>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </article>
                        <br/>
                        
                        <?php   
                                endwhile;
                            else:
                                echo "No posts published yet";
                            endif;
                            wp_reset_postdata();
                        ?>
                            
                        <!-- fin segundo loop -->
                        
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <?php 
                                        the_posts_pagination(array(
                                            'mid_size' => 2,
                                            'prev_text' => '<span class= "dashicons dashicons-arrow-left-alt2"></span>',
                                            'next_text' => '<span class= "dashicons dashicons-arrow-right-alt2"></span>',
                                        ));
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