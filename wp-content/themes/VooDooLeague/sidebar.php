<div class="col-lg-4">
    <div class="blog_right_sidebar">
        
        <aside class="single_sidebar_widget search_widget">
            <h4 class="widget_title"><span class="dashicons dashicons-search"></span>&nbsp;Search</h4>
            <?php get_search_form() ?>
        </aside>
        
        <aside class="single_sidebar_widget tag_cloud_widget">
            <h4 class="widget_title"><span class="dashicons dashicons-welcome-widgets-menus"></span>&nbsp;Widgets Area</h4>
            <?php
                if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets')) {
            ?>
                <p>ERROR</p>                
            <?php
                }
            ?>
        </aside>

        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title"><span class="dashicons dashicons-category"></span>&nbsp;Category</h4>
            <ul class="list cat-list">
                <?php 
                    wp_list_categories("title_li=&show_count=true");
                ?>
            </ul>
        </aside>

        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title"><span class="dashicons dashicons-format-quote"></span>&nbsp;Recent Post</h3>
            <ul class="list cat-list">
                <?php 
                    $args = array (
                        'type' => 'postbypost', // Devuelve los títulos de los posts
                        'limit' => 5, // Devuelve los últimos 5 posts
                        'after' => '<br/><br/>',
                    );
                    wp_get_archives($args);
                ?>
            </ul>
        </aside>

        <aside class="single_sidebar_widget instagram_feeds">
            <h4 class="widget_title"><span class="dashicons dashicons-admin-users"></span>&nbsp;Authors</h4>
            <?php
                $args = array (
                    'hide_empty' => false, // Visualiza también los autores sin posts
                    'orderby' => 'post_count', // Ordenamos por el número de posts
                    'order' => 'DESC', // Orden descendente
                    'optioncount' => true, // Mostrar el múmero de posts de cada autor
                );
                
                wp_list_authors($args);
            ?>
        </aside>


        <aside class="single_sidebar_widget newsletter_widget">
            <h4 class="widget_title"><span class="dashicons dashicons-admin-page"></span>&nbsp;Pages</h4>
            <?php
                $pages = get_pages();
                $exclude = array();
                foreach($pages as $page) {
                    if (!in_array($page->post_title, array('Home', 'Game', 'Contact', 'Archives', 'Private Zone'))) {
                        $exclude[] = $page->ID;
                    }
                }
                $args = array(
                    'title_li' => "",
                    'exclude' => implode(', ', $exclude),
                );
                wp_list_pages($args);            
            ?>
        </aside>
        
    </div>
</div>