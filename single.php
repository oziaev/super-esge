<?php
/* Template Name: NEWS - JP */
add_filter('pre_get_document_title', function() {
    return 'NEWS | ADFINITYS PTE.LTD.';
});

global $lang_switch_url;
$lang_switch_url = home_url('/single/');

get_header('ja');
?>

    <main id="single">
      <section class="fv mainvisual">
        <div class="container">
          <h2 class="page-title">NEWS</h2>
        </div>
      </section>

      <div class="container main">

                <?php 
          if (have_posts()) : // 投稿があれば処理に入る
            while (have_posts()) : // 投稿の数だけ繰り返す
              the_post(); // 回数に応じた投稿の情報を取得
          ?>

        <article class="news">
          <h3 class="title"><?php the_field('news_title'); ?></h3>
              <?php 
                $image = get_field('news_img');
                if ($image): 
                ?>          
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif; ?>

          <p class="text"><?php the_field('news_text'); ?></p>
        </article>
          <?php
            endwhile;
          else:
          ?> 
          <p class="no_post">投稿はありません</p>
          <?php endif; ?>


        <aside class="sidebar-news">
          <h4 class="sidebar-title">最新の記事</h4>
          <?php
          $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3,  // ← 最新3件
            'orderby'        => 'date',
            'order'          => 'DESC',
          );
          $news_query = new WP_Query($args);

          if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post();
          ?>
          <article class="new-news">
            <a href="<?php the_permalink(); ?>">
                <?php 
                $image = get_field('news_img');
                if ($image): 
                ?>

              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif; ?>

              <div class="text">
                <time class="date"><?php the_field('news_date'); ?></time>
                <p class="title"><?php the_field('news_title'); ?></p>
              </div>
            </a>
          </article>
          
          <?php
            endwhile;
          else:
          ?> 
          <p class="no_post">投稿はありません</p>
          <?php endif; ?>

        </aside>

      </div>
    </main>

<?php get_footer('ja'); ?>