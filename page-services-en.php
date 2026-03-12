<?php
/* Template Name: SERVICES - EN */
add_filter('pre_get_document_title', function() {
    return 'SERVICES | ADFINITYS PTE.LTD.';
});

global $lang_switch_url;
$lang_switch_url = home_url('/services-jp/');

get_header();
?>
    <main id="services-en" class="services services-en">

      <section class="fv mainvisual">
        <div class="container">
          <h2 class="page-title">SERVICE</h2>
        </div>
      </section>

      <section class="lead">
        <div class="container">
          <p class="title">Comprehensive digital marketing support from planning<br>and execution to optimization.</p>
          <p class="text">An integrated digital advertising strategy that does not rely on a single channel. SUPER EDGE places DSP at its core, delivering cross-channel optimization to maximize advertising performance.</p>
        </div>
      </section>

      <section class="business">
        <ul class="list">
          <li class="item left">
            <img src="<?php echo get_template_directory_uri(); ?>/img/business-1.jpg" alt="ビジネス画像">
            <div class="text-area">
              <h3>DSP SERVICE</h3>
              <p class="sub">Maximizing advertising performance through data and technology.</p>
              <p class="text">By leveraging DSP (Demand-Side Platform) and real-time bidding (RTB), we deliver highly optimized ads to the right audience at the right time and at the right price, maximizing performance and efficiency.</p>
            </div>
          </li>
          <li class="item right">
            <div class="text-area">
              <h3>Advertising Agency Services</h3>
              <p class="sub">Comprehensive digital marketing support from strategy development and execution to ongoing optimization.</p>
              <p class="text">SUPER EDGE builds marketing strategies aligned with our clients’ business goals, going beyond ad placement to drive real business growth.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/business-2.jpg" alt="ビジネス画像">
          </li>
        </ul>
      </section>

    </main>
    
<?php get_footer(); ?>