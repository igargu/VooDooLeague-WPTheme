<?php

    /*
        TEMPLATE NAME: Archives
    */
    
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
        <div class="col-wc_dec"></div>
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
           
    <section class="gallery_part section_padding">
        <div class="col-wc_dec"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 archives_container">
                    <div id="sidebar_section3" class="widget widget-wrap fl-wrap single-side-bar widget_nastik_user_details">
                        <div class="typography">
                            <h5><span class="dashicons dashicons-format-quote"></span>&nbsp;Last entries</h5>
                        </div>
                        <div class="widget-container fl-wrap">
                            <div class="about-widget fl-wrap">
                                <ul class="unordered-list">
                                    <?php 
                                        $args = array (
                                            'type' => 'postbypost', // Devuelve los títulos de los posts
                                            'limit' => 5, // Devuelve los últimos 5 posts
                                        );
                                        wp_get_archives($args);
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 archives_container">
                    <div id="sidebar_section3" class="widget widget-wrap fl-wrap single-side-bar widget_nastik_user_details">
                        <div class="typography">
                            <h5><span class="dashicons dashicons-games"></span>&nbsp;Game</h5>
                        </div>
                        <div class="widget-container fl-wrap">
                            <div class="about-widget fl-wrap">
                                <ul class="unordered-list">
                                    <?php
                                        $args = array (
                                            'type' => 'postbypost', // Devuelve los títulos de los posts
                                            'limit' => 10, // Limitamos a los últimos 10 posts
                                            'post_type'=>array('vl_projects'),
                                        );
                                        wp_get_archives($args);
                                    
                                        $posts = get_posts($args);
                                        foreach ($posts as $post) {
                                            echo '<li><a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 archives_container">
                    <div id="sidebar_section3" class="widget widget-wrap fl-wrap single-side-bar widget_nastik_user_details">
                        <div class="typography">
                            <h5><span class="dashicons dashicons-category"></span>&nbsp;Categories</h5>
                        </div>
                        <div class="widget-container fl-wrap">
                            <div class="about-widget fl-wrap">
                                <ul class="unordered-list">
                                    <li>
                                        <?php 
                                            wp_list_categories("title_li=&show_count=true");
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 archives_container">
                    <div id="sidebar_section3" class="widget widget-wrap fl-wrap single-side-bar widget_nastik_user_details">
                        <div class="typography">
                            <h5><span class="dashicons dashicons-tag"></span>&nbsp;Tag List</h5>
                        </div>
                        <div class="widget-container fl-wrap">
                            <div class="about-widget fl-wrap">
                                <ul class="unordered-list">
                                    <?php list_tags_archives() ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 archives_container">
                    <div id="sidebar_section3" class="widget widget-wrap fl-wrap single-side-bar widget_nastik_user_details">
                        <div class="typography">
                            <h5><span class="dashicons dashicons-edit"></span>&nbsp;Authors</h5>
                        </div>
                        <div class="widget-container fl-wrap">
                            <div class="about-widget fl-wrap">
                                <ul class="unordered-list">
                                    <li>
                                        <?php wp_list_authors('hide_empty=0&optioncount=1') ?>  
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
                    // Conseguir todos los autores
                    $args = array (
                        'display_name',
                        'Id',
                    );
                    $authors = get_users($args); // Devuelve una colección de objetos de tipo autor
                    $numAuthor = 0;
                    // Por cada autor creo una ficha
                    foreach($authors as $author) {
                        $numAuthor++;
                        
                    if ($numAuthor == 3) {
                        echo '<div class="col-md-3 archives_container">';
                        $numAuthor = 0;
                    } else {
                        echo '<div class="col-md-4 archives_container">';
                    }
                ?>

                    <div id="sidebar_section3" class="widget widget-wrap fl-wrap single-side-bar widget_nastik_user_details">
                        <div class="typography">
                            <h5><span class="dashicons dashicons-admin-users"></span>&nbsp;Post by <?php echo $author->display_name;?></h5>
                        </div>
                        <div class="widget-container fl-wrap">
                            <div class="about-widget fl-wrap">
                                <ul class="unordered-list">
                                    <?php
                                        $args = array (
                                            'numberposts' => 10,
                                            'orderby' => 'date', // Ordenamos por fecha de publicación
                                            'order' => 'DESC', // En orden descendente
                                            'author' => $author->ID,
                                        );
                                        $posts = get_posts($args); // Devuelve una colección de objetos de tipo post del autor
                                        foreach ($posts as $post) {
                                            echo '<li><a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li>';
                                        }
                                    ?> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
                    // Cierro el bucle que recorre los autores
                    }
                ?>
                
                <div class="col-md-4 archives_container">
                    <div id="sidebar_section3" class="widget widget-wrap fl-wrap single-side-bar widget_nastik_user_details">
                        <div class="typography">
                            <h5><span class="dashicons dashicons-calendar-alt"></span>&nbsp;Daily Posts</h5>
                        </div>
                        <div class="widget-container fl-wrap">
                            <div class="about-widget fl-wrap">
                                <ul class="unordered-list">
                                    <li>
                                        <?php
                                            $args = array (
                                                'type' =>'daily' // Devuelve los post diarios
                                            );
                                            wp_get_archives($args);
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 archives_container">
                    <div id="sidebar_section3" class="widget widget-wrap fl-wrap single-side-bar widget_nastik_user_details">
                        <div class="typography">
                            <h5><span class="dashicons dashicons-calendar-alt"></span>&nbsp;Monthly Posts</h5>
                        </div>
                        <div class="widget-container fl-wrap">
                            <div class="about-widget fl-wrap">
                                <ul class="unordered-list">
                                    <li>
                                        <?php
                                            wp_get_archives();
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 archives_container">
                    <div id="sidebar_section3" class="widget widget-wrap fl-wrap single-side-bar widget_nastik_user_details">
                        <div class="typography">
                            <h5><span class="dashicons dashicons-calendar-alt"></span>&nbsp;Yearly Posts</h5>
                        </div>
                        <div class="widget-container fl-wrap">
                            <div class="about-widget fl-wrap">
                                <ul class="unordered-list">
                                    <li>
                                        <?php
                                            $args = array (
                                                'type' =>'yearly'
                                            );
                                            wp_get_archives($args);
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 archives_container">
                    <div id="sidebar_section3" class="widget widget-wrap fl-wrap single-side-bar widget_nastik_user_details">
                        <div class="typography">
                            <h5><span class="dashicons dashicons-heart"></span>&nbsp;Most Popular Posts</h5>
                        </div>
                        <div class="widget-container fl-wrap">
                            <div class="about-widget fl-wrap">
                                <ul class="unordered-list">
                                    <li>
                                        <?php
                                            
                                            $args = array (
                                                'post_per_page' => 10, // Limitamos a 10 post máximo
                                                'meta_key' =>  'numvisits', // El campo para filtrar es numvisits
                                                'orderby' => 'meta_value_num', // Ordenamos de mayor a menor número de visitas
                                                'order' => 'DESC',
                                            );
                                            
                                            $popular = new WP_Query($args);
                                            
                                            if ($popular->have_posts()):
                                                while($popular->have_posts()):
                                                    $popular->the_post();
                                                    echo '<li><a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li>';
                                                endwhile;
                                            endif;
                                            
                                            wp_reset_query();
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 archives_container">
                    <div id="sidebar_section3" class="widget widget-wrap fl-wrap single-side-bar widget_nastik_user_details">
                        <div class="typography">
                            <h5><span class="dashicons dashicons-admin-comments"></span>&nbsp;Most Comment Posts</h5>
                        </div>
                        <div class="widget-container fl-wrap">
                            <div class="about-widget fl-wrap">
                                <ul class="unordered-list">
                                    <?php
                                        $args = array (
                                            'orderby' => 'comment_count',
                                        );
                                        
                                        $commented = new WP_Query($args);
                                        
                                        if($commented->have_posts()):
                                            while($commented->have_posts()):
                                                $commented->the_post();
                                                $num_comments = get_comments_number($post->ID);
                                                if ($num_comments > 0) {
                                                    echo '<li><a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a> ('.$num_comments.' comments)</li>';
                                                }
                                            endwhile;
                                        endif;
                                        
                                        wp_reset_query();
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="sec-lines"></div>
        <div class="col-wc_dec col-wc_dec2 col-wc_dec3"></div>
    </section>
                
<?php
    get_footer();
?>


