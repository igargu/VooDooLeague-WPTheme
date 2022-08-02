<h1>VooDoo League Plugin Settings EXTERNAL</h1>

<h2>Usage: </h2>

<h4>Insert this code to display custom fields in custom post type index</h4>

<blockquote>
    <pre>&lt;?php do_shortcode('[vl_show_fields id="'.$post->ID.'"]'); ?&gt;</pre>
</blockquote>

<h4>Insert this code to display custom fields in custom post type single</h4>

<blockquote>
    <pre>&lt;?php do_shortcode('[vl_show_fields_single id="'.$post->ID.'"]'); ?&gt;</pre>
</blockquote>

<h2>Customize your plugin:</h2>

<form action="options.php" method="post">
    
    <?php
        // Mis campos de settings están registrados bajo el nombre vl_projects_settings
        settings_fields('vl_projects_settings_group'); // El del registro de settings con register_settings
        do_settings_sections('vl_projects_settings'); // El del slug o __FILE__
        
        // Obtener los valores anteriores
        $options = get_option('vl_projects_settings');
    ?>
    
    <p>
        <label for="vl_color">Custom color:</label>
        <input type="color" id="vl_color" name="vl_projects_settings[vl_color]" value="<?php echo (isset($options['vl_color']) && $options['vl_color'] != '') ? $options['vl_color'] : ''; ?>">
    </p>
    
    <br/>
    <input type="submit" name="submit" class="button button-primary" value="Save Settings" />
    
</form>