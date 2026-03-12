<?php
/* Template Name: RECRUITMENT - EN */
add_filter('pre_get_document_title', function() {
    return 'Recruitment | ADFINITYS PTE.LTD.';
});

global $lang_switch_url;
$lang_switch_url = home_url('/recruitment-jp/');

get_header();
?>
    <main id="recruitment-jp" class="recruitment recruitment-en">

      <section class="fv mainvisual">
        <div class="container">
          <h2 class="page-title">RECRUITMENT</h2>
        </div>
      </section>

      <section class="job-sales recruitment-box">
        <div class="container">
              <?php
              $args = array(
                  'post_type'      => 'recruitment_en', // カスタム投稿タイプ名
                  'posts_per_page' => -1                // 全件取得
              );
              $staff_query = new WP_Query($args);

              if ( $staff_query->have_posts() ) :
                  while ( $staff_query->have_posts() ) :
                      $staff_query->the_post();
              ?>
          <h3 class="recruitment-title"><?php the_field('job_title_en'); ?></h3>
          <p class="sub-title"><?php the_field('job_catchphrase_en'); ?></p>

          <table class="job-table">

            <tr>
              <th>Key Responsibilities</th>
              <td>
                <ul>
                    <?php 
                    for ($i = 1; $i <= 3; $i++) : 
                        $t_key = 'resp_title_' . $i;
                        $d_key = 'resp_detail_' . $i;
                        
                        $title = get_field($t_key);
                        $detail = get_field($d_key);

                        // タイトルが入力されている時だけ <li> を出す
                        if ($title) : ?>
                            <li>
                                <span><?php echo esc_html($title); ?>:</span><br>
                                <?php echo esc_html($detail); ?>
                            </li>
                        <?php endif; 
                    endfor; ?>                  
                </ul>
              </td>
            </tr>
            <tr>
              <th>Requirements<span>(Must)</span></th>
              <td>
                <ul>
                    <?php 
                    for ($i = 1; $i <= 3; $i++) : 
                        $t_key = 'must_title_' . $i;
                        $d_key = 'must_detail_' . $i;
                        
                        $title = get_field($t_key);
                        $detail = get_field($d_key);

                        // タイトルが入力されている時だけ <li> を出す
                        if ($title) : ?>
                            <li>
                                <span><?php echo esc_html($title); ?>:</span><br>
                                <?php echo esc_html($detail); ?>
                            </li>
                        <?php endif; 
                    endfor; ?>                  
                </ul>
              </td>
            </tr>
            <tr>
              <th>Preferred Skills<span>(Want)</span></th>
              <td>
                <ul>
                    <?php 
                    for ($i = 1; $i <= 3; $i++) : 
                        $t_key = 'want_title_' . $i;
                        $d_key = 'want_detail_' . $i;
                        
                        $title = get_field($t_key);
                        $detail = get_field($d_key);

                        // タイトルが入力されている時だけ <li> を出す
                        if ($title) : ?>
                            <li>
                                <span><?php echo esc_html($title); ?>:</span><br>
                                <?php echo esc_html($detail); ?>
                            </li>
                        <?php endif; 
                    endfor; ?>                  
                </ul>
              </td>
            </tr>
            <tr>
              <th>Ideal Candidate</th>
              <td>
                <ul>
                  <li><?php the_field('ideal_list'); ?></li>
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
    
<?php get_footer(); ?>