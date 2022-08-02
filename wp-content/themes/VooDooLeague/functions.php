<?php

    // Damos soportes al tema
    add_theme_support('post-thumbnails');
    
    // Añadimos soporte para los post-formats
    add_theme_support('post-formats', array('audio', 
        'video', 'quote', 'link', 'gallery', 'image'));
        
    /**
     * 
     */
    function saludo_func() {
        return "<b>Hola holita vecinito</b>";
    }
    add_shortcode('saludo', 'saludo_func');
    
    /**
     * Añadimos los script de CSS y de JavaScript
     */
    function add_theme_scripts() {
        
        // Registramos y añadimos a la cola las hojas de estilo y los scripts de js
        wp_enqueue_style('style', get_stylesheet_uri());
        
        /* --- CSS --- */
        wp_register_style('bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap.min');
        
        wp_register_style('animate', get_template_directory_uri().'/css/animate.css');
        wp_enqueue_style('animate');
        
        wp_register_style('owl.carousel.min', get_template_directory_uri().'/css/owl.carousel.min.css');
        wp_enqueue_style('owl.carousel.min');
        
        wp_register_style('all', get_template_directory_uri().'/css/all.css');
        wp_enqueue_style('all');
        
        wp_register_style('flaticon', get_template_directory_uri().'/css/flaticon.css');
        wp_enqueue_style('flaticon');
        
        wp_register_style('themify-icons', get_template_directory_uri().'/css/themify-icons.css');
        wp_enqueue_style('themify-icons');
        
        wp_register_style('magnific-popup', get_template_directory_uri().'/css/magnific-popup.css');
        wp_enqueue_style('magnific-popup');
        
        wp_register_style('slick', get_template_directory_uri().'/css/slick.css');
        wp_enqueue_style('slick');
        
        wp_register_style('style', get_template_directory_uri().'/css/style.css');
        wp_enqueue_style('style');
        
        wp_register_style('animate', get_template_directory_uri().'/css/animate.css');
        wp_enqueue_style('animate');
        
        wp_register_style('aos', get_template_directory_uri().'/css/aos.css');
        wp_enqueue_style('aos');
        
        wp_register_style('font-awesome.min', get_template_directory_uri().'/css/font-awesome.min.css');
        wp_enqueue_style('font-awesome.min');
        
        wp_register_style('magnific-popup', get_template_directory_uri().'/css/magnific-popup.css');
        wp_enqueue_style('magnific-popup');
        
        wp_register_style('nice-select', get_template_directory_uri().'/css/nice-select.css');
        wp_enqueue_style('nice-select');
        
        wp_register_style('swiper.min', get_template_directory_uri().'/css/swiper.min.css');
        wp_enqueue_style('swiper.min');
        
        wp_enqueue_style('dashicons');
        
        /* --- JavaScript --- */
        wp_register_script('jquery-1.12.1.min', get_template_directory_uri().'/js/jquery-1.12.1.min.js', '', '', true); // El último parámetro es true si se enlaza por el footer, false en caso contrario
        wp_enqueue_script('jquery-1.12.1.min');
        
        wp_register_script('popper.min', get_template_directory_uri().'/js/popper.min.js', '', '', true); 
        wp_enqueue_script('popper.min');
        
        wp_register_script('bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js', '', '', true);
        wp_enqueue_script('bootstrap.min');
        
        wp_register_script('jquery.magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.js', '', '', true); 
        wp_enqueue_script('jquery.magnific-popup');
        
        wp_register_script('swiper.min', get_template_directory_uri().'/js/swiper.min.js', '', '', true); 
        wp_enqueue_script('swiper.min');
        
        wp_register_script('masonry.pkgd', get_template_directory_uri().'/js/masonry.pkgd.js', '', '', true); 
        wp_enqueue_script('masonry.pkgd');
        
        wp_register_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', '', '', true); 
        wp_enqueue_script('owl.carousel.min');
        
        wp_register_script('jquery.nice-select.min', get_template_directory_uri().'/js/jquery.nice-select.min.js', '', '', true); 
        wp_enqueue_script('jquery.nice-select.min');
 
        wp_register_script('slick.min', get_template_directory_uri().'/js/slick.min.js', '', '', true); 
        wp_enqueue_script('slick.min');

        wp_register_script('jquery.counterup.min', get_template_directory_uri().'/js/jquery.counterup.min.js', '', '', true); 
        wp_enqueue_script('jquery.counterup.min');
        
        wp_register_script('waypoints.min', get_template_directory_uri().'/js/waypoints.min.js', '', '', true); 
        wp_enqueue_script('waypoints.min');
        
        wp_register_script('contact', get_template_directory_uri().'/js/contact.js', '', '', true); 
        wp_enqueue_script('contact');

        wp_register_script('jquery.ajaxchimp.min', get_template_directory_uri().'/js/jquery.ajaxchimp.min.js', '', '', true); 
        wp_enqueue_script('jquery.ajaxchimp.min');
        
        wp_register_script('jquery.form', get_template_directory_uri().'/js/jquery.form.js', '', '', true); 
        wp_enqueue_script('jquery.form');
        
        wp_register_script('jquery.validate.min', get_template_directory_uri().'/js/jquery.validate.min.js', '', '', true); 
        wp_enqueue_script('jquery.validate.min');

        wp_register_script('mail-script', get_template_directory_uri().'/js/mail-script.js', '', '', true); 
        wp_enqueue_script('mail-script');
    
        wp_register_script('custom', get_template_directory_uri().'/js/custom.js', '', '', true); 
        wp_enqueue_script('custom');
        
        wp_register_script('aos', get_template_directory_uri().'/js/aos.js', '', '', true); 
        wp_enqueue_script('aos');
        
        wp_register_script('gmaps.min', get_template_directory_uri().'/js/gmaps.min.js', '', '', true); 
        wp_enqueue_script('gmaps.min');
        
        wp_register_script('jquery-3.3.1.slim.min', get_template_directory_uri().'/js/jquery-3.3.1.slim.min.js', '', '', true); 
        wp_enqueue_script('jquery-3.3.1.slim.min');
        
        wp_register_script('jquery.easing.min', get_template_directory_uri().'/js/jquery.easing.min.js', '', '', true); 
        wp_enqueue_script('jquery.easing.min');
        
        wp_register_script('masonry.pkgd.min', get_template_directory_uri().'/js/masonry.pkgd.min.js', '', '', true); 
        wp_enqueue_script('masonry.pkgd.min');
        
        wp_register_script('particles.min', get_template_directory_uri().'/js/particles.min.js', '', '', true); 
        wp_enqueue_script('particles.min');
        
        wp_register_script('swiper_custom', get_template_directory_uri().'/js/swiper_custom.js', '', '', true); 
        wp_enqueue_script('swiper_custom');
        
    }
    add_action('wp_enqueue_scripts','add_theme_scripts');
    
    // -------------- SIDEBAR --------------- //
    
    /** 
     * Registramos el área de widget en el sidebar -> los widgets nos lo proveen el hook widgets_init
     */
    function widget_area() {
        
        $args = array (
            'name' => 'Sidebar Widgets',
            'id' => 'sidebar-widgets',
            'description' => 'Sidebar widgets area',
            'before_widget' => '<div class="myclass">',
            'after_widget' => '</div>',
        );
        
        register_sidebar($args);
        
        $args = array (
            'name' => 'Footer Widgets',
            'id' => 'footer-widgets',
            'description' => 'Footer widgets area',
            'before_widget' => '<div class="myclass">',
            'after_widget' => '</div>',
        );
        
        register_sidebar($args);
        
    }
    add_action('widgets_init','widget_area');
    
    // -------------- POST --------------- //
    
    /**
     * Actualizar el Contador de visitas de un post -> sólo se invoca en sigle.php
     * @param post_id int Post ID
     */
    function add_num_visits($post_id) {
        $numvisits = 1;
        // Si no existe el campo numvisits lo creamos
        if (!add_post_meta($post_id, 'numvisits', $numvisits, true)) {
            // Si existe obtenemos el valor del contador y le sumamos la nueva visita
            $numvisits = get_post_meta($post_id, 'numvisits', true);
            $numvisits++;
            // Actualizamos el contador de visitas del post
            update_post_meta($post_id, 'numvisits', $numvisits);
        }
    }
    
    /**
     * Obtener el número de visitas de un post
     * @param post_id int   Post ID
     * @return $numvisits string Número de visitas del post
     */
    function get_num_visits($post_id) {
      $numvisits = get_post_meta($post_id, 'numvisits', true);  
      if (empty($numvisits)) $numvisits = 0;
      if ($numvisits == 1) {
          $suffix = "Visit";
      } else {
          $suffix = "Visits";
      }
      return $numvisits." ".$suffix;
    }
    
    // -------------- AUTORES --------------- //
    
    /**
     * Añadir campos de redes sociales al perfi del autor
     * @param $user_methods array Contiene los campos del perfil del autor -> lo provee el hook user_contacmethods
     * @return $user_methods array 
     */
    function add_user_custom_fields($user_methods) {
        $user_methods['facebook'] = "Facebook:"; // La clave es el nombre del campo y el valor su descripcion o label
        $user_methods['instagram'] = "Instagram:";
        $user_methods['twitter'] = "Twitter:";
        $user_methods['linkedin'] = "Linkedin:";
        $user_methods['grade'] = "Grade:";
        
        return $user_methods;
    }
    add_action('user_contactmethods', 'add_user_custom_fields');
    
    /**
     * Añadir campos a las skills de los autores que usaremos en el front-end en la plantilla de autores para hacer los progress bar
     * @param $user object Contiene los campos del perfil del autor -> lo provee los hooks show_user_profile y edit_user_profile
     */
    function add_user_skills($user) {
        // Dibujamos campos de las skills con etiquetas HTML
        ?>
        <h3>User Skills</h3>
        <table class="form-table">
            <tr>
                <td>
                    <label for="skill1">Skill1:</label>
                    <input type="text" id="skill1" name="skill1" value="<?php echo get_user_meta($user->ID, 'skill1', true)?>"/>
                    <label for="skill1V">Skill1 Value:</label>
                    <input type="text" id="skill1V" name="skill1V" value="<?php echo get_user_meta($user->ID, 'skill1V', true)?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="skill2">Skill2:</label>
                    <input type="text" id="skill2" name="skill2" value="<?php echo get_user_meta($user->ID, 'skill2', true)?>"/>
                    <label for="skill2V">Skill2 Value:</label>
                    <input type="text" id="skill2V" name="skill2V" value="<?php echo get_user_meta($user->ID, 'skill2V', true)?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="skill3">Skill3:</label>
                    <input type="text" id="skill3" name="skill3" value="<?php echo get_user_meta($user->ID, 'skill3', true)?>"/>
                    <label for="skill3V">Skill3 Value:</label>
                    <input type="text" id="skill3V" name="skill3V" value="<?php echo get_user_meta($user->ID, 'skill3V', true)?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="skill4">Skill4:</label>
                    <input type="text" id="skill4" name="skill4" value="<?php echo get_user_meta($user->ID, 'skill4', true)?>"/>
                    <label for="skill4V">Skill4 Value:</label>
                    <input type="text" id="skill4V" name="skill4V" value="<?php echo get_user_meta($user->ID, 'skill4V', true)?>"/>
                </td>
            </tr>
        </table>
        <?php
    }
    add_action('show_user_profile', 'add_user_skills');
    add_action('edit_user_profile', 'add_user_skills');
    
    /**
     * Actualizar los campos de las skillas de los autores
     * @param $user_id int Contiene el Id del autor -> Nos los suministran los 
     *      hooks personal_options_update y edit_user_profile_update
     */
    function save_user_skills($user_id) {
        update_user_meta($user_id, 'skill1', $_POST['skill1']);
        update_user_meta($user_id, 'skill1V', $_POST['skill1V']);
        
        update_user_meta($user_id, 'skill2', $_POST['skill2']);
        update_user_meta($user_id, 'skill2V', $_POST['skill2V']);
        
        update_user_meta($user_id, 'skill3', $_POST['skill3']);
        update_user_meta($user_id, 'skill3V', $_POST['skill3V']);
        
        update_user_meta($user_id, 'skill4', $_POST['skill4']);
        update_user_meta($user_id, 'skill4V', $_POST['skill4V']);
    }
    add_action('personal_options_update', 'save_user_skills');
    add_action('edit_user_profile_update', 'save_user_skills');
    
    /** 
     * Obtener el rol de un autor
     * @param $user_id int Contiene el Id del autor
     * @return $roles string El rol del autor
     */
    function get_author_role($user_id) {
        $myauthor = get_userdata($user_id);
        $roles = implode(",", $myauthor->roles);
        return $roles;
    }
    
    /**
     * Chequea si una ruta existe en nuestro árbol de directorios
     * @param url string Contiene la ruta que se va a comprobar
     * @return bool Si existe o no
     */
    function my_file_exists($url) {
        $f = pathinfo($url, PATHINFO_EXTENSION);
        return (strlen($f) > 0) ? true : false;
    }
    
    // -------------- ARCHIVES --------------- //
    
    /**
     * Retrieve tags list with each posts per tag - custom function
     * @return <ul><li> for each tag
     */
    function list_tags_archives() {
        $args = array (
            'orderby' => 'count', // Ordena por el número de posts que tengan este tag
            'order' => 'DESC', // Orden descendente
            'number' => 20, // Sólo las 20 etiquetas más usadas
        );
        
        $tags = get_tags($args); // Devuelve todos los tags del Blog como una colección de objetos de tipo tag
        
        foreach($tags as $tag) {
            echo'<li><a href="'.get_tag_link($tag).'">'.$tag->name.'</a></li>';
        }
    }
    
    // -------------- COMMENTS --------------- //
    
    /**
     * Delete url field from comments form
     * @param $fields array List of coment form fields -> nos la provee el hook 
     *      comment_form_default_fields
     * @return $fields
     */
    function erase_url_form_comment($fields) {
        unset($fields['url']); // Eliminamos la url del array $fields
        return $fields; // Devolvemos el array sin la url
    }
    add_filter('comment_form_default_fields', 'erase_url_form_comment');
    
    /**
     * Reorder comments form fields
     * @param $fields array List of coment form fields -> nos la provee el 
     *      hook comment_form_fields
     * @return $auxfields
     */
    function reorder_comment_form_fields($fields) {
        
        if (!is_user_logged_in()) {
        
            $auxfield = array(); // Creamos un array auxiliar para insertarles 
                                 //     los elementos del form en el orden que queramos
        
            array_push($auxfield, $fields['author']); // Nombre del comentarista
            array_push($auxfield, $fields['email']); // Email del comentarista
            array_push($auxfield, $fields['comment']); // Comentario
            array_push($auxfield, $fields['cookies']); // Cookies
            array_push($auxfield, $fields['consent']); // Aceptar la política de privacidad
            
            return $auxfield; // Devolvemos el array
        
        } else {
            
            return $fields;
            
        }
    }
    add_filter('comment_form_fields', 'reorder_comment_form_fields');
    
    /**
     * Add consent field to comment form fields
     * @param $fields array List of coment form fields -> nos la provee el hook comment_form_default_fields
     * @return $fields
     */
    function add_RGPD_consent($fields) {
        $fields['consent'] = '<div class="switch-wrap d-flex justify-content-between">'.
                                 '<p>
                                    Check this box to give us permission to publicly post your comment 
                                    (Accept our <a href="'.get_page_link(get_page_by_title("Política de 
                                    privacidad")->ID).'">privacy policy</a>)
                                </p>'.
                                 '<div class="primary-checkbox">'.
                                    '<input type="checkbox" name="consent" id="consent">'.
                                    '<label for="consent"></label>'.
                                 '</div>'.
                             '</div>';
        return $fields;
    }
    add_filter('comment_form_default_fields', 'add_RGPD_consent');
    
    /**
     * Save consent in DB
     * @param $comment_id int Comment ID -> nos la provee el hook comment_post
     */
    function save_consent_fields($comment_id) {
        $consent_value = $_POST['consent'];
        if ($consent_value == true) {
            $valor = "Checkbox is checked. I accept the privacy policy.";
        } else {
            $valor = "Checkbox is NOT checked. I DO NOT accept the privacy policy.";
        }
        add_comment_meta($comment_id,'consent', $valor, true);
    }
    add_filter('comment_post', 'save_consent_fields');
    
    /**
     * Create a new column in comments admin-area to show the consent field
     * @param $columns array Comment admin-area columns -> suministrado por el 
     *      hook manage_edit-comments_columns
     * @return $columns
     */
    function create_consent_column($columns) {
        $columns = array(
            'cb' => '<input type="checkbox">',
            'author' => 'Author',
            'comment' => 'Comment',
            'consent' => 'Consent',
            'response' => 'In response to',
            'date' => 'Submitted on',
        );
        
        return $columns; 
    }
    add_filter('manage_edit-comments_columns', 'create_consent_column');
    
    /**
     * Show privacy policy consent in consent column in comments admin-area
     * @param $column string Comment admin-area column
     * @param $comment_id int Comment ID -> suministrado por el 
     *      hook manage_comments_custom_column
     */
    function show_consent_column($column, $comment_id) {
        if ($column == 'consent') {
            echo get_comment_meta($comment_id, 'consent', true); 
        }
    }
    add_action('manage_comments_custom_column', 'show_consent_column',1,2);
    
    // -------------- CUSTOMIZE LOGIN TEMPLATE --------------- //
    
    /**
     * Customize login template
     */
    function customize_login_template() { ?>
    
        <style>
            #login h1 a, .login h1 a {
                background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/post/VooDoo_logo.jpg");
                width: 320px;
                height: 320px;
                background-size: cover;
                background-position: center center;
                background-repeat: no-repeat;
            }
            
            .login {
                background: rgb(2,0,36);
                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(252,13,27,1) 35%, rgba(0,212,255,1) 100%);
                background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/post/VooDoo_fondo.png");
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-color: black;
            }
            
            .message.register {
                border-left-color: #003024 !important;
            }
            
            #user_login:focus {
                border-color: #003024 !important;
            }
            
            #user_email:focus {
                border-color: #003024 !important;
            }
            
            #wp-submit {
                border-color: rgb(140,143,148);
            }
            
            #wp-submit:hover {
                border-color: #003024;
            }
            
            a {
                color: rgb(140,143,148) !important;
            }
            
            a:hover {
                color: #003024 !important;
            }
            
            #language-switcher-locales:hover {
                color: #003024;
            }
            
            .button {
                color: black !important;
                background: white !important;
                border-color: black !important;
            }
            
            .button:hover {
                color: #003024 !important; 
                border-color: #003024 !important;
            }
        </style>
    
    <?php
    }
    add_action('login_enqueue_scripts', 'customize_login_template');
    
    /**
     * Change login logo url
     */
    function change_login_logo_url() {
        return home_url();
    }
    add_filter('login_headeurl', 'change_login_logo_url');
    
    /**
     * Change login error
     */
    function change_login_error() {
        return "Ooops! You must enter a valid username and password...";
    }
    add_filter('login_errors', 'change_login_error');
    
    // -------------- ARCHIVE --------------- //
    
    /**
     * Filter that trims the excerpt number of words out of index.php
     * @param $query The Wordpress query var
     */
    function add_custom_post_type_to_archive($query) {
        // Si estamos preguntamos si es búsqueda por categorías
        if (is_category() || is_tag() || is_date()) {
            // Establecemos en la consulta por defecto de Wordpress el valor 
            // de post_type a post y vl_projects para que incluya
            // tanto los post normales como los custom post types
           $query->set('post_type', array('post', 'vl_projects'));
        }
    }
    add_action('pre_get_posts', 'add_custom_post_type_to_archive');
    
    /**
     * Filter that trims the excerpt number of words out of index.php
     * @param lenght The excerpt lenght default value
     */
    function my_excerpt_lenght($lenght) {
        if (!is_home()) {
            return 22;
        } else {
            if (get_post_type($post->ID) == 'my_app') {
                return 20;
            } else {
                return $lenght;
            }
        }
    }
    add_filter('excerpt_lenght', 'my_excerpt_lenght', 999);
?>

