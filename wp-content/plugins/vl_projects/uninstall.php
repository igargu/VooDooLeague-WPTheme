<?php

    /**
     * Trigger this file on Plugin uninstall
     */
    
    !defined('WP_UNINSTALL_PLUGIN') or die ('');
    
    // Limpiar la BBDD
    
    // FORMA FÁCIL
    // Recogemos en un resultset todos los post de nuestro CPT
    
    /*  $args = array (
            'post_type' => 'vl_projects', // Tipos de posts que queremos borrar
            'numberposts' => -1, // Cuantos queremos borrar, -1 es TODOS
        );
    $erase_posts = get_posts(array($args));
    
    // Vamos borrándo los posts uno a uno
    foreach($erase_posts as $post_to_erase) {
        wp_delete_post($post_to_erase->ID);
    }
    
    // FORMA COOL
    // Usamos vl_ como prejifo de tablas, cada uno debe poner su propio prefijo de su BBDD
    
    $global $wpdb;
    
    // Primero eliminamos los posts de nuestro tipo
    $wpdb->query("DELETE FROM vl_posts WHERE`post_type` = 'vl_projects'")
    
    // Después borramos los posibles metadatos que hayan creado esos posts (Borramos todos los metadatos excepto los de los post...)
    $wpdb->query("DELETE FROM vl_postmeta WHERE `post_id` NOT IN (SELECT id FROM wp_posts)");
    
    // Por último borramos las posibles relaciones que existan y que no pertenezcan a ningún posts de los que todavía existen
    $wpdb->query("DELETE FROM vl_term_relationships WHERE object_id NOT IN (SELECT id FROM vl_posts)");