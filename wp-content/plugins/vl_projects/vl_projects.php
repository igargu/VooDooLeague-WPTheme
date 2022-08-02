<?php
    /*
     * Plugin Name: WordPress Voodoo League Projects
     * Plugin URI: https://download.1k3r.org
     * Description: Creates an interfaces to manage Voodoo League game Projects
     * Version: 1.0.0
     * Author: 1k3r42
     * Author URI: http://www.1k3r.org
     * License: GPL2
     * License URI: https://www.gnu.org/licenses/gpl-2.0.html
     */
    
    // Comprobar que el puglin no se ha ejecutado tecleando su URL en la dirección 
    // del navegador
    defined('ABSPATH') or die ('You can not reach my plugin moron!');
                                                                    
                                                                      
    class VL_projects {
        
        // Variables
        public $plugin_name;
        
        /**
         * Constructor
         */
        function __construct() {
            $this->plugin_name = plugin_basename(__FILE__);
            
            add_shortcode('vl_show_fields', array($this, 'vl_show_custom_fields'));
            add_shortcode('vl_show_fields_single', array($this, 'vl_show_custom_fields_single'));
        }
        
        /**
         * Acciones que se van a llevar acabo al ejecutar el script
         */
        function execute_actions() {
            
            // Registramos el custom post type
            add_action('init', array($this, 'register_voodoo_league_projects'));
               
            // Creación de la metabox que contendrá los custom-post-fields
            add_action('add_meta_boxes', array($this, 'vl_projects_add_metabox'));
               
            // Guardamos los custom-post-fields en la BBDD
            add_action('save_post', array($this, 'save_custom_post_fields'));
               
            // Registramos las hojas de estilo y los js del plugin
            // Para el admin-area
            add_action('admin_enqueue_scripts', array($this, 'admin_put_in_queue'));
            // Para el front-end
            add_action('wp_enqueue_scripts', array($this, 'put_in_queue'));
               
            // Creamos una opción para los settings del plugin en el dashboard
            add_action('admin_menu', array($this, 'add_settings_option'));
               
            // Crear una subopción en settings
            add_action('admin_menu', array($this, 'add_settings_option_second_level'));
           
            // Crear un enlace para la página de settings en el panel del plugin en la página de plugins
            add_filter("plugin_action_links_$this->plugin_name", array($this, 'add_settings_link_in_panel'));
            
            // Registramos los settings del admin-area -> debe ser una función asociada al hook 'admin_init'
            add_action('admin_init', array($this, 'vl_projects_register_settings'));
            
            // Visualizamos los mensajes de los posibles errores en los settings con el hook 'admin_notices'
            add_action('admin_notices', array($this, 'vl_projects_admin_notices'));
        }
        
        /**
         * Función de callback del shortcode vl_show_fields
         * @param $atts
         */
        function vl_show_custom_fields($atts) {
            
            // Recogemos el atributo del shortcode
            $postid = shortcode_atts(array(
                         'id' => 1,
                      ), $atts);
            
            $post_id = $postid['id'];
            
            // Obtenemos los valores de los settings
            $options = get_option('vl_projects_settings');
            
            // Dibujamos los campos
            ?>
                <div class="game_details">
                    <b style="color: <?php echo $options['vl_color']; ?>">Type:</b> <?php echo get_post_meta($post_id, 'vl_type', true); ?><br/>
                    <b style="color: <?php echo $options['vl_color']; ?>">Level:</b> <?php echo get_post_meta($post_id, 'vl_level', true); ?>
                </div>
            <?php
        }
        
        /**
         * Función de callback del shortcode vl_show_fields_single
         * @param $atts
         */
        function vl_show_custom_fields_single($atts) {
            // Recogemos el atributo del shortcode
            $postid = shortcode_atts(array(
                         'id' => 1,
                      ), $atts);
            
            $post_id = $postid['id'];
            
            // Obtenemos los valores de los settings
            $options = get_option('vl_projects_settings');
            
            // Dibujamos los campos
            ?>  
                <br><br>
                <div class="table-head">
                    <div class="col-6 col-md-3" style="color: <?php echo $options['vl_color']; ?>">Type</div>
                    <div class="col-6 col-md-3" style="color: <?php echo $options['vl_color']; ?>">Level</div>
                    <div class="col-6 col-md-3" style="color: <?php echo $options['vl_color']; ?>">Price</div>
                    <div class="col-6 col-md-3" style="color: <?php echo $options['vl_color']; ?>">Date</div>
                </div>
                <div class="table-row">
       			   <div class="col-6 col-md-3"><?php echo get_post_meta($post_id, 'vl_type', true); ?></div>
       			   <div class="col-6 col-md-3"><?php echo get_post_meta($post_id, 'vl_level', true); ?></div>
       			   <div class="col-6 col-md-3">$<?php echo get_post_meta($post_id, 'vl_price', true); ?></div>
       			   <div class="col-6 col-md-3"><?php echo get_post_meta($post_id, 'vl_date', true); ?></div>
       		   </div>
            
            <?php
        }
        
        /**
         * Register my custome post type vl_projects
         */
        function register_voodoo_league_projects() {
            // Definir array de soporte
            $supports = array(
                'title', // Habilitamos el panel del title
                'editor', // Habilitamos el panel del editor
                'excerpt', // Habilitamos el panel del excerpt
                'author', // Habilitamos el panel de author
                // 'custom-fields', // nose
                'comments', // Habilitamos el panel de comments
                'thumbnail', // Habilitamos el panel del thumbnail
            );
            // Definir array de etiquetas
            $labels = array(
                'name' => _x('VooDoo League Projects', 'plural'),// Como vamos a llamar a los custom post type en plural
                'singular_name' => _x('VooDoo League Project', 'singular'),// Como vamos a llamar a los custom post type en singular
                'menu_name' => _x('VooDoo League Projects', 'admin menu'),// Como vamos a llamar a los custom post type en el menu
                'menu_admin_bar' => _x('VooDoo League Projects', 'admin bar'),// Como vamos a llamar a los custom post type en la admin bar 
                'add_new' => _x('Add New Project', 'add_new'),// Como vamos a llamar a los custom post type en plural
                'all_items' => __('All Projects'),
                'add_new_item' => __('Add New Project'),
                'view_item' => __('View Project'),
                'search' => __('Search Project'),
                'not__found' => __('No Projects Found...'),
            );
            // Definir array de argumentos
            $args = array(
                'supports' => $supports, // Establece los paneles que aparecerán en el admin area del custom post type
                'labels' => $labels, // Establece las etiquetas de los elementos del admin area para el custom post type
                'public' => true, // Ámbito de visibilidad público (se ven en el admin area y el front-end)
                'hierarchical' => false, // Si va a tener custom post type hijos
                'query_var' => true, // Los custom posts type serán accesibles desde la consulta principal de WP
                'has_archive' => true, // Si queremos que los custom post type aparezcan en el template archive.php
                'show_in_menu' => true, // Quiero que aparezca un item en el menú del admin area para el custom post type
                'menu_position' => 5, // Donde quiero que aparezca el item, 5º lugar como opción del menú
                'menu_icon' => 'dashicons-games',// Que icono queremos que aparezca en la opción del menú para el custom post type
                'show_in_rest' => false, // True -> Editor Gutemberg | False -> Editor antiguo
            );
            // Definir el custom post type
            register_post_type('vl_projects', $args);
            // Registramos la taxonomía del custom post type
            $args = array (
                'show_admin_column' => true,
                'hierarchical' => false,
                'labels' => 'VooDoo League Projects Tags',
                'rewrite' => true,
                'query_var' => true,
            );
            register_taxonomy('vl-projects', 'vl_projects', $args);
            flush_rewrite_rules();
            // Si queremos los paneles de tags y categorias...
            register_taxonomy_for_object_type('category', 'vl_projects'); // panel que activo, a quien se lo activo
            register_taxonomy_for_object_type('post_tag', 'vl_projects');
        }
        
        /**
         * Plugin activation
         */
        function vl_projects_activation() {
            
            flush_rewrite_rules();
        }
        
        /**
         * Plugin deactivation
         */
        function vl_projects_deactivation() {
            
            flush_rewrite_rules();
        }
        
        /**
         * Añadimos la metabox con los custom-post-fields
         * @param $screens Object of class WP_Screen -> Nos lo provee el hook add_meta_boxes
         */
        function vl_projects_add_metabox($screens) {
            // $screens es un objeto de la clase WP_Screen, esta clase son todas las pantallas del admin-area
            $screens = array('vl_projects'); // Le asignamos como array a nuestro custom-post-type, para aislar 
                                             // aquellas pantallas que lo contengan
            
            // Recorremos las pantallas que contenga el custom-post-type para crearles a cada una la metabox
            foreach($screens as $screen) {
                add_meta_box('metabox', 'VL Projects', array($this, 'metabox_callback'), $screen, 'advanced');
            }
        }
        
        /**
         * Función de callback de add_meta_box que dibuja los custom-post-fields del custom-post-type
         * @param $post Object of class post -> Lo provee la función add_meta_box()
         */
        function metabox_callback($post) {
            // Creamos un campo nonce que se va a usar para comprobar la procedencia de las peticiones
            wp_nonce_field(basename(__FILE__), 'vl_projects_nonce');
            // Harvesting
            $type = get_post_meta($post->ID, 'vl_type', true);
            $level = get_post_meta($post->ID, 'vl_level', true);
            $date = get_post_meta($post->ID, 'vl_date', true);// Fecha en el que se hizo el proyecto
            $price = get_post_meta($post->ID, 'vl_price', true);
            // Dibujamos los campos con etiquetas HTML
            ?>
            
            <div class="details">
                <h1>Project Details</h1>
                <div class="standard">
                    <label for="vl_type">Type:</label>
                    <input type="text" id="vl_type" name="vl_type" value="<?php echo $type ?>">
                </div>
                <div class="standard">
                    <label for="vl_level">Level:</label>
                    <input type="text" id="vl_level" name="vl_level" value="<?php echo $level ?>">
                </div>
                <div class="standard">
                    <label for="vl_date">Date:</label>
                    <input type="number" id="vl_date" name="vl_date" value="<?php echo $date ?>">
                </div>
                <div class="standard">
                    <label for="vl_price">Price:</label>
                    <input type="number" id="vl_price" name="vl_price" value="<?php echo $price ?>">
                </div>
            </div>
            
            <?php
        }
        
        /**
         * Función de callback que guardará los custom-post-fields en la BBDD
         * @param $post_id int post ID -> nos lo da el hook 'save_post'
         */
        function save_custom_post_fields($post_id) {
            // Verificamos si el campo nonce es válido
            $is_valid_nonce = (isset($_POST['vl_projects_nonce']) 
                && wp_verify_nonce($_POST['vl_projects_nonce']
                , basename(__FILE__))) ? 'true' : 'false';
            // Comprobar si estoy en un autosave
            $is_autosave = wp_is_post_autosave($post_id);
            // Comprobar si estoy en revision
            $is_revision = wp_is_post_revision($post_id);
            
            if ($is_autosave || $is_autosave || !$is_valid_nonce) {
                return;
            }
            // Comprobar que el usuario tiene permiso para editar el post
            if (!current_user_can('edit_post', $post_id)) {
                return;
            }
            // Saneamos el contenido de los campos 
            $type = sanitize_text_field($_POST['vl_type']);
            $level = sanitize_text_field($_POST['vl_level']);
            $date = sanitize_text_field($_POST['vl_date']);
            $price = sanitize_text_field($_POST['vl_price']);
            // Ahora podemos guardar su contenido en la BBDD, update_post_meta() 
            // crea los campos si no existen
            update_post_meta($post_id, 'vl_type', $type);
            update_post_meta($post_id, 'vl_level', $level);
            update_post_meta($post_id, 'vl_date', $date);
            update_post_meta($post_id, 'vl_price', $price);
        }
        
        /**
         * Función de callback que carga las hojas de estilos y los js para el back-end
         */
        function admin_put_in_queue() {
            wp_register_style('vl_projects_admin_css', plugins_url('admin/vl_projects_admin.css', __FILE__));
            wp_enqueue_style('vl_projects_admin_css');
            
            wp_register_script('vl_projects_admin_js', plugins_url('admin/vl_projects_admin.js', __FILE__));
            wp_enqueue_script('vl_projects_admin_js');
        }
        
        /**
         * Función de callback que carga las hojas de estilos y los js para el front-end
         */
        function put_in_queue() {
            wp_register_style('vl_projects_css', plugins_url('admin/vl_projects.css', __FILE__));
            wp_enqueue_style('vl_projects_css');
        }
        
        /**
         * Función de callback que crea una opción en el dashboard para los settings del plugin
         */
        function add_settings_option() {
            add_menu_page('VooDoo League Projects Settings Page', 'VooDoo League Settings', 
                'manage_options', 'voodoo_league_projects_settings', 
                array($this, 'add_settings_option_callback'), 'dashicons-admin-generic', 100);
        }
        
        /**
         * Función de callback que crea una sub-opción en el dashboard para los settings del plugin
         */
        function add_settings_option_second_level() {
            add_options_page('VooDoo League Projects Settings Page 2', 
                'VooDoo League Settings 2', 'manage_options', 
                'voodoo_league_projects_settings', array($this, 'add_settings_option_callback'), 100);
        }
        
        /**
         * Función de callback que crea un enlace en el panel del plugin en 
         * la página de plugins para los settings del plugin
         * @param $link objects array Links for our plugin
         * @return $links objects array
         */
        function add_settings_link_in_panel($links) {
            // Hallamos la URL de la página de settings
            $url = esc_url(add_query_arg('page', 'voodoo_league_projects_settings', 
                get_admin_url().'admin.php'));
            // Creamos una etiqueta <a> con ese href
            $enlace = '<a href="'.$url.'">Settings</a>';
            array_push($links, $enlace);
            return $links;
        }
        
        /**
         * Función de callback para registrar los settings de la página de settings del plugin
         */
        function vl_projects_register_settings() {
            // 1 - Nombre del grupo de settings
            // 2 - Nombre del setting, en nuestro caso será un array
            // 3 - Array de argumentos, indispensable la función de callback para validar los campos
            register_setting('vl_projects_settings_group', 'vl_projects_settings', array($this, 'vl_projects_settings_validate'));
        }
        
        /**
         * Función de callback de register_setting que se usa para:
         *  - Validar el contenido de los campos
         *  - Guardar el contenido de los campos cuando se pulse el botón Guardar
         */
        function vl_projects_settings_validate($args) {
            // Validar campos del form de los settings
            if (!isset($args['vl_color'])) { // Nombre conciso, descriptivo y que haya poca posibilidad de coincida en otro tema
                $args['vl_color'] = "#9e9e9e";
            }
            
            if (!isset($args['vl_pack_price']) || $args['vl_pack_price'] < 0) {
                $args['vl_pack_price'] = "0";
                add_settings_error('vl_projects_settings', 'vl_projects_invalid_pack_price', 'Please enter a price >= 0', 'error');
            }
            return $args;
        }
        
        /**
         * Función de callback que lanza el sistema de errores del admin area para
         */
        function vl_projects_admin_notices() {
           settings_errors(); 
        }
        
        /**
         * Función de callback que dibuja la hoja de estilos la opción y subopción
         * de las settings
         */
        function add_settings_option_callback() {
            require_once(plugin_dir_path(__FILE__).'admin/admin-settings.php');
        }
        
    }
    
    // Comprobamos si existe la clase
    if (class_exists('VL_projects')) {
        $my_project = new VL_projects();
        $my_project->execute_actions();
    }
    
    // Registramos los hooks de activación y desactivación del plugin
    register_activation_hook(__FILE__, array($my_project, 'vl_projects_activation'));
    register_deactivation_hook(__FILE__, array($my_project, 'vl_projects_deactivation'));
    