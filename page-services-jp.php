<?php
/* Template Name: SERVICES - JP */
add_filter('pre_get_document_title', function() {
    return 'サービス | ADFINITYS PTE.LTD.';
});

global $lang_switch_url;
$lang_switch_url = home_url('/services-en/');

get_header('ja');
?>
    <main id="services-jp" class="services">

      <section class="fv mainvisual">
        <div class="container">
          <h2 class="page-title">SERVICE</h2>
        </div>
      </section>

      <section class="lead">
        <div class="container">
          <p class="title">DSPサービスを中心としながらもアドネットワークや<br>ディスプレイ広告を掛け合わせた<br>より最適な運用プランをご提案</p>
          <p class="text">単一の広告手法に依存しない、統合型のデジタル広告戦略。<br>SUPER EDGEは、DSPを中核に据え、複数チャネルを横断した広告最適化を実現します。</p>
        </div>
      </section>

      <section class="business">
        <ul class="list">
          <li class="item left">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business-1.jpg" alt="ビジネス画像">
            <div class="text-area">
              <h3>DSP事業</h3>
              <p class="sub">データとテクノロジーで、広告成果を最大化する。</p>
              <p class="text">DSP（Demand-Side Platform）を活用し、リアルタイム入札（RTB）による高度な広告配信を実行。<br>ユーザーデータをもとに、最適なターゲットへ、最適なタイミングで、最適な価格で広告を届けます。</p>
            </div>
          </li>
          <li class="item right">
            <div class="text-area">
              <h3>広告代理店事業</h3>
              <p class="sub">戦略設計から実行・改善まで、デジタルマーケティングを総合的に支援</p>
              <p class="text">SUPER EDGEは、広告主のビジネス目標を深く理解した上で、最適なマーケティング戦略を構築します。単なる広告出稿ではなく、 「事業成長に直結する広告戦略」を設計・実行します。</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business-2.jpg" alt="ビジネス画像">
          </li>
        </ul>
      </section>

    </main>

<?php get_footer('ja'); ?>