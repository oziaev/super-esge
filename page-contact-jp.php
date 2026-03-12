<?php
/* Template Name: CONTACT - JP */
add_filter('pre_get_document_title', function() {
    return 'お問い合わせ | ADFINITYS PTE.LTD.';
});

global $lang_switch_url;
$lang_switch_url = home_url('/contact-en/');

get_header('ja');
?>
<?php echo do_shortcode('[contact-form-7 id="47a0fd7" title="コンタクトフォーム JP"]'); ?>
<?php get_footer('ja'); ?>