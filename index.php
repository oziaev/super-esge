<?php
// タイトルを上書きしたい場合
add_filter('pre_get_document_title', function() {
    return 'ADFINITYS PTE.LTD. | DSP Advertising & Digital Advertising Agency';
});

global $lang_switch_url;
$lang_switch_url = home_url('/top-jp/');

get_header();
?>
    <main id="top-en" class="top top-en">

      <section id="fv">
        <video src="<?php echo get_template_directory_uri(); ?>/img/fv_video.mp4" autoplay muted loop playsinline></video>
        <h2 class="fv-title">Cutting-edge,Optimized. <br>Infinite possibilities</h2>
        <div class="scroll">
          <div class="scroll-text">SCROLL</div>
          <div class="scroll-border"></div>
        </div>
      </section>
      
      <section id="hero">
        <div class="container">
          <p class="left">We propose optimal operational plans by centering on DSP services while integrating ad networks and display advertising.</p>
          <p class="right">What is DSP?<br>DSP stands for Demand-Side Platform, a distribution platform designed for advertisers to place ads.<br>
                          There are numerous DSP services, each with its unique strengths. By leveraging these
advantages, DSP optimizes ad distribution targets, ad placements, bid prices, and creatives, ultimately maximizing the cost-effectiveness of advertising.</p>
        </div>
        <div class="scroll-divider">
          <div class="scroll-text">ADFINITYS PTE.LTD. ADFINITYS PTE.LTD. ADFINITYS PTE.LTD.</div>
        </div>
      </section>

      <section id="partnership">
        <div class="container">
          <h3 class="section-title fadein">PARTNERSHIP</h3>
        </div>
        <div class="wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/partnership-1.png" alt="パートナーシップロゴ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/partnership-2.png" alt="パートナーシップロゴ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/partnership-3.jpg" alt="パートナーシップロゴ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/partnership-4.jpg" alt="パートナーシップロゴ">
        </div>
      </section>

      <section id="services">
        <div class="container">
          <h3 class="section-title fadein">SERVICES</h3>
          <div class="box">
            <ul class="list">
              <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/services-1.jpg" alt=""></li>
              <li class="item">
                <h4 class="title">DSP Business</h4>
                <p class="text">By utilizing DSP, more effective ad distribution is possible, leading to increased site revenue.<br> Users experience a stress-free web experience with ads tailored to them.</p>
              </li>
            </ul>
            <ul class="list">
              <li class="item">
                <h4 class="title">Advertising Agency Business</h4>
                <p class="text">We support all aspects of digital advertising and marketing, including ad operations, social media marketing, media purchasing, SEO, and ASO. We also handle the creation of advertising creatives. We fully support achieving your business goals, so feel free to consult with us.</p>
              </li>
              <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/services-2.jpg" alt=""></li>
            </ul>
          </div>
        </div>
      </section>

      <section id="news">
        <div class="container">

          <div class="left">
            <h3 class="section-title fadein">NEWS</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/news.jpg" alt="ニュース画像">
          </div>

          <div class="right">
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
            <article class="post">
              <a href="<?php the_permalink(); ?>">
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
            <div class="btn-container">
              <a href="<?php echo esc_url( home_url('/news/') ); ?>" class="btn">View All</a>
            </div>
          </div>
          
        </div>
      </section>

    </main>

<?php get_footer(); ?>