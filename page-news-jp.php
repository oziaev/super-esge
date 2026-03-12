<?php
/* Template Name: NEWS - JP */
add_filter('pre_get_document_title', function() {
    return 'ニュース | ADFINITYS PTE.LTD.';
});

global $lang_switch_url;
$lang_switch_url = home_url('/news/');

get_header('ja');
?>

    <main id="news">
      <section class="fv mainvisual">
        <div class="container">
          <h2 class="page-title">NEWS</h2>
        </div>
      </section>

      <section class="news">
        <div class="container">

      <?php 
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      // 投稿タイプを post に指定
      $args = array(
        'post_type'      => 'post',   // ← 通常の投稿
        'posts_per_page' => 6,       // 全件表示
        'paged'          => $paged, 
      );
      $news_query = new WP_Query($args);

      if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post();
      ?>
          <article class="post">
            <a href="<?php the_permalink(); ?>">
                <?php 
                $image = get_field('news_img');
                if ($image): 
                ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
              <time class="date"><?php the_field('news_date'); ?></time>
              <h4 class="news-title"><?php the_field('news_title'); ?></h4>
            </a>
          </article>

          <?php
            endwhile;
          else:
          ?> 
          <p class="no_post">投稿はありません</p>
          <?php endif; ?>
        </div>
        <nav class="pagination">
<?php
  echo paginate_links( array(
    'total'     => $news_query->max_num_pages,
    'current'   => $paged,
    'prev_text' => ' < ',
    'next_text' => ' > ',
    'type'      => 'plain',
  ) );
  ?>          
  
            <!-- <a class="prev"> < </a>
          <a class="page current">1</a>
          <a class="page">2</a>
          <a class="page">3</a>
          <a class="next"> > </a> -->
        </nav>
        <?php wp_reset_postdata(); // ループが終わったら必ずリセット！ ?>

      </section>
    </main>

<?php get_footer('ja'); ?>