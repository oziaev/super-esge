<?php
/* Template Name: RECRUITMENT - JP */
add_filter('pre_get_document_title', function() {
    return '採用情報 | ADFINITYS PTE.LTD.';
});

global $lang_switch_url;
$lang_switch_url = home_url('/recruitment-en/');

get_header('ja');
?>
    <main id="recruitment-jp" class="recruitment recruitment-jp">

      <section class="fv mainvisual">
        <div class="container">
          <h2 class="page-title">RECRUITMENT</h2>
        </div>
      </section>

      <section class="job-sales recruitment-box">
        <div class="container">
              <?php
              $args = array(
                  'post_type'      => 'recruitment_jp', // カスタム投稿タイプ名
                  'posts_per_page' => -1                // 全件取得
              );
              $staff_query = new WP_Query($args);

              if ( $staff_query->have_posts() ) :
                  while ( $staff_query->have_posts() ) :
                      $staff_query->the_post();
              ?>
          <h3 class="recruitment-title"><?php the_field('job_title_jp'); ?></h3>
          <p class="sub-title"><?php the_field('job_catchphrase_jp'); ?></p>
          <table class="job-table">
            <tr>
              <th>仕事内容</th>
              <td>
                <ul>
                  <li><?php the_field('job_description_1'); ?></li>
                  <li><?php the_field('job_description_2'); ?></li>
                  <li><?php the_field('job_description_3'); ?></li>
                </ul>
              </td>
            </tr>
            <tr>
              <th>必須要件<span>(Must)</span></th>
              <td>
                <ul>
                  <li><?php the_field('requirement_must_1'); ?></li>
                  <li><?php the_field('requirement_must_2'); ?></li>
                  <li><?php the_field('requirement_must_3'); ?></li>
                </ul>
              </td>
            </tr>
            <tr>
              <th>歓迎要件<span>(Want)</span></th>
              <td>
                <ul>
                  <li><?php the_field('requirement_want_1'); ?></li>
                  <li><?php the_field('requirement_want_2'); ?></li>
                  <li><?php the_field('requirement_want_3'); ?></li>
                </ul>
              </td>
            </tr>
            <tr>
              <th>求める人物像</th>
              <td>
                <ul>
                  <li><?php the_field('target_person_1'); ?></li>
                  <li><?php the_field('target_person_2'); ?></li>
                  </ul>
                </td>
              </tr>
              
            </table>
              <?php
    endwhile;
    wp_reset_postdata();
else :
    ?>
<p>comming soon...</p>
<?php endif; ?>
        </div>
      </section>
            
    </main>
    
<?php get_footer('ja'); ?>