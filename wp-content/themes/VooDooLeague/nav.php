    <nav class="navbar navbar-expand-lg navbar-light">
        
        <a class="navbar-brand" href="<?php echo get_option('Home');?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/post/VooDoo_logo_blog.jpg" alt="logo"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu_icon"><i class="dashicons dashicons-menu-alt3"></i></span>
        </button>
    
        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_option('Home');?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(get_page_by_title('Game')->ID);?>">Game</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(get_page_by_title('Blog')->ID);?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(get_page_by_title('Contact')->ID);?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(get_page_by_title('Archives')->ID);?>">Archives</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(get_page_by_title('Private Zone')->ID);?>">Private Zone</a>
                </li>
            </ul>
        </div>
        
    </nav>