<?php



function add_scripts(){
    //Main 
    
    wp_register_script('jquerymin', get_template_directory_uri() . '/assets/plugins/jquery/jquery.min.js', array('jquery') ,null, false);
    wp_enqueue_script('jquerymin');  
    
    wp_register_script('bundle', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.bundle.min.js', array('jquery') ,null, false);
    wp_enqueue_script('bundle');  
    
    wp_register_script('adminlte', get_template_directory_uri() . '/assets/js/adminlte.min.js', array('jquery') ,null, false);
    wp_enqueue_script('adminlte');
    
    // Graficas
    
    wp_register_script('graficas', get_template_directory_uri() . '/assets/js/graficas.js', array('jquery') ,null, false);
    wp_enqueue_script('graficas');
    
    //Welcome
    
    
    // wp_register_script('hoverIntent', get_template_directory_uri() . '/assets/bell/lib/superfish/hoverIntent.js', array('jquery') ,null, false);
    // wp_enqueue_script('hoverIntent'); 
    
    // wp_register_script('superfish', get_template_directory_uri() . '/assets/bell/lib/superfish/superfish.min.js', array('jquery') ,null, false);
    // wp_enqueue_script('superfish');
    
    // wp_register_script('tether', get_template_directory_uri() . '/assets/bell/lib/tether/js/tether.min.js', array('jquery') ,null, false);
    // wp_enqueue_script('tether');
    
    // wp_register_script('stellar', get_template_directory_uri() . '/assets/bell/lib/stellar/stellar.min.js', array('jquery') ,null, false);
    // wp_enqueue_script('stellar');
    
    // wp_register_script('counterup', get_template_directory_uri() . '/assets/bell/lib/counterup/counterup.min.js', array('jquery') ,null, false);
    // wp_enqueue_script('counterup');
    
    // wp_register_script('waypoints', get_template_directory_uri() . '/assets/bell/lib/waypoints/waypoints.min.js', array('jquery') ,null, false);
    // wp_enqueue_script('waypoints');
    
    // wp_register_script('easing', get_template_directory_uri() . '/assets/bell/lib/easing/easing.js', array('jquery') ,null, false);
    // wp_enqueue_script('easing');
    
    // wp_register_script('sticky', get_template_directory_uri() . '/assets/bell/lib/stickyjs/sticky.js', array('jquery') ,null, false);
    // wp_enqueue_script('sticky');
    
    // wp_register_script('parallax', get_template_directory_uri() . '/assets/bell/lib/parallax/parallax.js', array('jquery') ,null, false);
    // wp_enqueue_script('parallax');
    
    // wp_register_script('lockfixed', get_template_directory_uri() . '/assets/bell/lib/lockfixed/lockfixed.min.js', array('jquery') ,null, false);
    // wp_enqueue_script('lockfixed');
    
    // wp_register_script('custom', get_template_directory_uri() . '/assets/bell/js/custom.js', array('jquery') ,null, false);
    // wp_enqueue_script('custom');
    
    // wp_register_script('contactform', get_template_directory_uri() . '/assets/bell/contactform/contactform.js', array('jquery') ,null, false);
    // wp_enqueue_script('contactform');
}

add_action('wp_enqueue_scripts','add_scripts');

