<?php
    get_header();
    
    // Recuperamos la palabra o las palabras de búsqueda
    if (isset($_GET['s']) && empty($_GET['s'])) {
        $label = "All Posts";
    } else {
        $label = esc_html(get_search_query());
    }
    
    // Hallar cuantas entradas ha encontrado
    if (have_posts()) {
        $total_results = $wp_the_query->found_posts;
        if ($total_results == 1) {
            $results = "1 post found";
        } else {
            $results = $total_results. " posts found";
        }
    } else {
        $results = "No posts found";
    }
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
                            <h2>Search for: <?php echo $label; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="blog_area section_padding">
        <div class="container">
            <div class = "row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        
                        <h2><?php echo $results; ?></h2>
                        
                        <?php if ($results != "No posts found") { ?>
                        
                            <div class="section-top-border">
        					    <div class="progress-table">
                                    <div class="section-top-border">
                                        <!-- Cabecera de las tabla -->
            					        <div class="table-head">
            								<div class="serial">Date</div>
            								<div class="country">Author</div>
            								<div class="visit">Title</div>
            							</div>
                                        
                                        <!-- Fin cabecera -->
                                        
                                        <!-- Loop para el contenido de los post -->
                                        <?php 
                                            while(have_posts()):
                                                the_post();
                                                if ($post->post_type == 'vl_projects') {
                                                    $is_custom = 'Game';
                                                } else {
                                                    $is_custom = '';                                            
                                                }
                                        ?>
                                        <div class="table-row">
            								<div class="serial"><?php the_time('j M Y') ?></div>
            								<div class="country"><?php the_author_posts_link() ?></div>
            								<div class="visit"><a href=<?php the_permalink(); ?>><?php echo mb_strimwidth(get_the_title(), 0, 48, '...'); ?></a>&nbsp;&nbsp;<div class="typography"><h6 class="mb-20"><?php echo $is_custom; ?></h6></div></div>
            							</div>
                                        <?php
                                            endwhile;
                                        ?>
                                        <!-- Fin loop -->
                                        
                                    </div>
                                </div>
                            </div>
                        
                        <?php } else { ?>
                        
                            
                        
                        <?php } ?>
                        
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <?php 
                                        echo the_posts_pagination(array(
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
                <?php get_sidebar('simple'); ?>
            </div>
        </div>
    </section>
    
    
<?php
    get_footer();
?>