<?php
/* Template Name: TOP - JP */
add_filter('pre_get_document_title', function() {
    return 'ADFINITYS PTE.LTD. | DSP広告・デジタル広告代理店';
});

global $lang_switch_url;
get_header('ja');
?>
    <main id="top-jp" class="top">

      <section id="fv">
        <video src="<?php echo get_template_directory_uri(); ?>/img/fv_video.mp4" autoplay muted loop playsinline></video>
        <h2 class="fv-title">最先端の技術と最適化戦略により、<br>質の高い広告体験を提供します</h2>
        <div class="scroll">
          <div class="scroll-text">SCROLL</div>
          <div class="scroll-border"></div>
        </div>
      </section>
      
      <section id="hero">
        <div class="container">
          <p class="left">DSPサービスを中心としながらもアドネットワークや<br>ディスプレイ広告を掛け合わせたより最適な運用プランをご提案</p>
          <p class="right">DSPとはDemand-Side Platformの略称で、広告を出稿する広告主向けの配プラットフォームのこと数多くのDSPサービスがありますが、それぞれ独自の長所を活かし広告出稿における配ターゲット・広告枠・入札金額・クリエイティブの最適化をすることで広告の費用対効果を最大化させるものです。</p>
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
                <h4 class="title">DSP事業</h4>
                <p class="text">DSPを利用することで、より効果的な広告の配信が可能となり、サイトの収益も上がります。<br>ユーザーは自身にあった広告が表示されるので、ストレスのないweb体験が可能になります。</p>
              </li>
            </ul>
            <ul class="list">
              <li class="item">
                <h4 class="title">広告代理店事業</h4>
                <p class="text">デジタル広告・マーケティング全般を支援します。<br>広告運用、ソーシャルメディアマーケティング、メディア買付け、SEO・ASOなどを通じ、最適な戦略を企画・実行。広告クリエイティブの制作も対応可能です。<br>ビジネス目標達成を全力でサポートしますので、お気軽にご相談ください。</p>
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

<?php get_footer('ja'); ?>