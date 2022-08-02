<?php 
    
    /*
        TEMPLATE NAME: Private
    */
    
    get_header();
    
    // Comprobamos si hay algún usuario logueado y en su caso recopilamos la info necesaria
    if (is_user_logged_in()) {
        $user = wp_get_current_user(); // Devuelve un objeto de tipo user con el user que está logueado
        $user_name = $user->display_name; // Obtenemos su nombre público
        $rol = get_author_role($user->ID); // Obtenemos su rol
        
        $saludo = 'Hello <b>'.$user_name.'</b>!<br/>You are logged as <b>'.$rol.'</b>';
    } else {
        $saludo = "Log In";
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
                            <h2>Private Zone</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="blog_area single-post-area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <h2><?php echo $saludo ?></h2>
                    <br/>
                    <div class="typography">
                        <h4>
                            <?php
                                if (is_user_logged_in()) {
                                    switch($rol) {
                                        case 'administrator':
                                            echo 'Everything under control!';
                                            break;
                                        case 'editor':
                                            echo 'Remember to check the latest posts!';
                                            break;
                                        case 'author':
                                            echo 'We look forward to your new post!';
                                            break;
                                        case 'contributor':
                                            echo 'We look forward to your new post!';
                                            break;
                                        case 'subscriber':
                                            echo 'Enjoy our blog!';
                                            break;
                                    }
                                    echo '<br/><br/>';
                                    echo'<h6>';
                                        wp_register('', ''); // Mostrar el link para irnos al admin-area
                                    echo '</h6>';
                                    echo '<div class="logout">';
                                        wp_loginout(get_permalink()); // Mostrar el link para el logout
                                    echo '</div>';
                                    echo '<br/><br/>';
                                }
                            ?>
                        </h4>
                        <?php
                            if (!is_user_logged_in()) {
                                    // Visualizar el formulario de login
                                    wp_login_form();
                                    // Visualizar el link para registrarse
                                    wp_register('<div class="registrarse">','</div>');
                            }
                        ?> 
                    </div>
                </div>
                <?php get_sidebar('simple'); ?>
            </div>
        </div>
    </section>
   
<?php
    get_footer();
?>

