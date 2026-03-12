<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="description" content="ADFINITYS PTE.LTD. delivers high-quality advertising experiences through cutting-edge technology and optimization strategies. We propose optimal operation plans combining DSP services, ad networks, and display advertising." />
  <meta name="keywords" content="DSP advertising, digital advertising, advertising agency, Demand-Side Platform, Google Ads, Amazon Ads, display advertising, ad network, ad operations, ADFINITYS" />
  <meta name="author" content="ADFINITYS PTE.LTD." />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="<?php echo esc_url( get_permalink() ); ?>" />

  <link rel="alternate" hreflang="en" href="<?php echo esc_url( get_permalink() ); ?>" />
  <!-- todo JPのTOPページリンクに -->
  <link rel="alternate" hreflang="ja" href="https://www.superedge.co.jp/" />
  <!-- todo EN TOPページURL -->
  <link rel="alternate" hreflang="x-default" href="https://www.superedge.co.jp/en/" />

  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="ADFINITYS PTE.LTD." />
  <meta property="og:title" content="ADFINITYS PTE.LTD. | DSP Advertising & Digital Advertising Agency" />
  <meta property="og:description" content="Delivering high-quality advertising experiences through cutting-edge technology and optimization strategies. We propose optimal operation plans combining DSP services, ad networks, and display advertising." />
  <meta property="og:url" content="<?php echo esc_url( get_permalink() ); ?>" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/ogp.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:locale:alternate" content="ja_JP" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="ADFINITYS PTE.LTD. | DSP Advertising & Digital Advertising Agency" />
  <meta name="twitter:description" content="Delivering high-quality advertising experiences through cutting-edge technology and optimization strategies. Optimal ad operation plans centered on DSP services." />
  <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/ogp.jpg" />

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.svg" type="image/jpeg" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.svg" type="image/jpeg" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.svg" />

  <?php
  $org_url = esc_url( get_permalink() );
  $logo_url = get_template_directory_uri() . '/img/logo.svg';
  ?>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "ADFINITYS PTE.LTD.",
      "url": "<?php echo $org_url; ?>",
      "logo": "<?php echo $logo_url; ?>",
      "description": "A digital advertising agency delivering high-quality advertising experiences through cutting-edge technology and optimization strategies.",
      "foundingDate": "2025-07-22",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "111 NORTH BRIDGE ROAD, #20-05, PENINSULA PLAZA",
        "addressLocality": "Singapore",
        "postalCode": "179098",
        "addressCountry": "SG"
      },
      "areaServed": ["SG", "JP"],
      "serviceType": ["DSP Advertising Operations", "Digital Advertising Agency", "Display Advertising", "Ad Network"]
    }
  </script>

  <?php wp_head(); ?>

</head>
<body>

<header id="header">
  <h1><a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-bk.svg" alt="ロゴ"></a></h1>

      <?php global $lang_switch_url; ?>

  <nav>
    <ul class="page-links">
      <li class="item"><a href="<?php echo esc_url( home_url('/services-en/') ); ?>">SERVICES</a></li>
      <li class="item"><a href="<?php echo esc_url( home_url('/news/') ); ?>">NEWS</a></li>
      <li class="item"><a href="<?php echo esc_url( home_url('/company-en/') ); ?>">COMPANY</a></li>
      <li class="item"><a href="<?php echo esc_url( home_url('/recruitment-en/') ); ?>">RECRUITMENT</a></li>
      <li class="item"><a href="<?php echo esc_url( home_url('/contact-en/') ); ?>">CONTACT</a></li>
      <li class="item jp-en"><a href="<?php echo esc_url( isset($lang_switch_url) ? $lang_switch_url : home_url('/top-jp/') ); ?>">JP \ EN</a></li>
    </ul>
  </nav>

  <div class="sp-header">
    <a href="<?php echo esc_url( isset($lang_switch_url) ? $lang_switch_url : home_url('/top-jp/') ); ?>" class="jp-en">JP \ EN</a>
  </div>
  <div class="toggle">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="mask"></div>
</header>