<?php
add_action('wp_enqueue_scripts', 'add_styles');
add_filter('wpcf7_autop_or_not', '__return_false');

function add_styles() {

    // google fonts
    wp_register_style(
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap',
        array(),
        '1.0'
    );

    // reset style
    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress@4.0.0/dist/ress.min.css',
        array(),
        null,
        'all'
    );
    
    // main style
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/main.css',
        array('reset_style', 'google-fonts_style'),
        '1.0'
    );
}

        // jsの読み込み
    add_action('wp_enqueue_scripts', 'add_scripts');
    function add_scripts() {
      // デフォルトのjQueryを削除
      wp_deregister_script('jquery');

      // jQueryを読み込む
      wp_register_script(
        'jquery_script',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js',
        array(),
        '1.0',
        true
      );

      // メインのスクリプトを読み込む
      wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery_script'),
        '1.0',
        true
      );
    }
    
?>