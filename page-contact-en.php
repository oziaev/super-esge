<?php
/* Template Name: CONTACT - EN */
add_filter('pre_get_document_title', function() {
    return 'CONTACT | ADFINITYS PTE.LTD.';
});

global $lang_switch_url;
$lang_switch_url = home_url('/contact-jp/');

get_header();
?>

<?php echo do_shortcode('[contact-form-7 id="4defb3b" title="コンタクトフォーム EN"]'); ?>

<?php get_footer(); ?>