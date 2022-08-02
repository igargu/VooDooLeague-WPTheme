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
        
    </div>
</div>